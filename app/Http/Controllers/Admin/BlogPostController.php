<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\BlogCategory;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index(Request $request)
    {
        $data['categories'] = BlogCategory::all();
        $data['result'] = SubBlogCategory::with('category')
            ->when($request->input('q'), fn($query) => $query->where('title', 'LIKE', '%'.$request->input('q').'%'))
            ->when($request->input('category_id'), fn($query) => $query->where('category_id', $request->input('category_id')))
            ->orderBy('category_id')
            ->orderBy('sort_order')
            ->orderBy('title')
            ->paginate(100);
        return view('admin.blog-posts.index', $data);
    }

    public function create()
    {
        $data['categories'] = BlogCategory::all();
        return view('admin.blog-posts.create', $data);
    }

    public function show(BlogPost $blogPost)
    {
        $data['result'] = $blogPost;
        $data['categories'] = BlogCategory::all();
        return view('admin.blog-posts.show', $data);
    }

    public function edit(BlogPost $blogPost)
    {
        $data['result'] = $blogPost;
        $data['categories'] = BlogCategory::all();
        return view('admin.blog-posts.edit', $data);
    }

    public function store(Request $request)
    {
        return $this->handleBlogPostRequest($request, new BlogPost(), true);
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        return $this->handleBlogPostRequest($request, $blogPost, false);
    }

    public function string_filter($string){
        $string = str_replace('--', '-', preg_replace('/[^A-Za-z0-9\-\']/', '', str_replace(' ', '-', str_replace("- ","-", str_replace(" -","-", str_replace("&","and", preg_replace("!\s+!"," ",strtolower($string))))))));
        return $string;
    }

    private function handleBlogPostRequest(Request $request, BlogPost $blogPost, bool $isNew)
    {
        $dataID = $request->input('dataID');
        try {

            $rules = [
                'category_id' => 'required|exists:categories,id',
                'title' => 'required|string|max:255|unique:sub_categories,title,'.$dataID,
                'thumbnail' => 'nullable|bail|required_without:existing_thumbnail|file|mimes:jpeg,png,jpg,webp|max:2048',
                'image' => 'nullable|bail|required_without:existing_image|file|mimes:jpeg,png,jpg,webp|max:2048',
                'pdf' => 'nullable|bail|required_without:existing_pdf|file|mimes:pdf',
                'description' => 'required|string',
                // 'sort_order' => $isNew ? 'nullable|numeric' : 'required|numeric',
                'sort_order' => 'required|numeric|min:0',
            ];

            $messages = [];

            $attributes = [];

            $validator = Validator::make($request->all(), $rules , $messages, $attributes);

            // This validates and gives errors which are caught below and also stop further execution
            $validated = $validator->validated();

            $validated['slug'] = $this->string_filter($validated['title']);

            // Need to set folder path for file manipulation
            $uploadRoot = base_path(env('UPLOAD_ROOT'));
            $subCategoriesFolder = $uploadRoot . '/blog-posts';

            if($request->hasFile('thumbnail')){
                $file = $validated['thumbnail'];
                $fileName = $validated['slug'] . '_' . date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->move($subCategoriesFolder, $fileName);
                $validated['thumbnail'] = $fileName;

                if(!empty($dataID)){
                    // Get existing thumbnail name from database for current id
                    $existing_thumbnail = SubBlogCategory::find($dataID)->thumbnail;

                    // Delete existing thumbnail if exists
                    if($existing_thumbnail && file_exists($subCategoriesFolder.'/'.$existing_thumbnail)){
                        @unlink($subCategoriesFolder.'/'.$existing_thumbnail);
                    }
                }
            }else{
                $validated['thumbnail'] = $request->input('existing_thumbnail');
            }

            if($request->hasFile('image')){
                $file = $validated['image'];
                $fileName = $validated['slug'] . '_' . date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->move($subCategoriesFolder, $fileName);
                $validated['image'] = $fileName;

                if(!empty($dataID)){
                    // Get existing image name from database for current id
                    $existing_image = SubBlogCategory::find($dataID)->image;

                    // Delete existing image if exists
                    if($existing_image && file_exists($subCategoriesFolder.'/'.$existing_image)){
                        @unlink($subCategoriesFolder.'/'.$existing_image);
                    }
                }
            }else{
                $validated['image'] = $request->input('existing_image');
            }

            $subCategoriesPdfFolder = $uploadRoot . '/blog-posts/pdf';

            if($request->hasFile('pdf')){
                $file = $validated['pdf'];
                $fileName = $validated['slug'] . '_' . uniqid() . '_' . date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->move($subCategoriesPdfFolder, $fileName);
                $validated['pdf'] = $fileName;

                if(!empty($dataID)){
                    // Get existing pdf name from database for current id
                    $existing_pdf = SubBlogCategory::find($dataID)->pdf;

                    // Delete existing pdf if exists
                    if($existing_pdf && file_exists($subCategoriesPdfFolder.'/'.$existing_pdf)){
                        @unlink($subCategoriesPdfFolder.'/'.$existing_pdf);
                    }
                }
            }else{
                $validated['pdf'] = $request->input('existing_pdf');
            }

            if ($isNew) {
                $validated['created_by'] = session('username');
            }
            $validated['updated_by'] = session('username');

            // Directly handle the save/update logic here
            if ($isNew) {
                $blogPost = SubBlogCategory::create($validated);
            } else {
                $blogPost->update($validated);
            }

            return response()->json([
                'status' => 'success',
                'message' => $isNew ? 'BlogPost created successfully!' : 'BlogPost updated successfully!',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'error_type' => 'form',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // dd($e);
            return response()->json([
                'status' => 'error',
                'error_type' => 'server',
                'message' => 'Something went wrong. Please try again later.',
                'console_message' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();
        return redirect()->route('admin.blog-posts.index')->with('success', 'BlogPost deleted!');
    }

    public function bulkDelete(Request $request)
    {
        $dataIDs = $request->input('dataID');

        foreach ($dataIDs as $id) {
            $blogPost = SubBlogCategory::find($id);
            if ($blogPost) {

                $blogPost->delete(); // Triggers model events and cascades
            }
        }

        return response()->json(['success' => true, 'message' => 'Record Deleted']);
    }

    public function get_sub_categories_by_category($id){
        return SubBlogCategory::where('category_id',$id)->get();
    }
}
