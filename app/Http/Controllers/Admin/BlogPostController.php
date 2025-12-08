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
        $data['result'] = BlogPost::with('blogCategory')
            ->when($request->input('q'), fn($query) => $query->where('title', 'LIKE', '%'.$request->input('q').'%'))
            ->when($request->input('category_id'), fn($query) => $query->where('category_id', $request->input('category_id')))
            ->orderBy('category_id')
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
                'category_id' => 'required|exists:blogs_categories,id',
                'title' => 'required|string|max:255|unique:blog_posts,title,'.$dataID,
                'description' => 'required|string',
                'image_file' => 'nullable|bail|required_without:existing_image_file|file|mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=800,height=600',
                'blog_date' => 'required|date',
                'meta_title' => 'required|string|max:255',
                'meta_description' => 'required|string|max:255',
            ];

            $messages = [
                'image_file.dimensions' => 'Required dimensions are 800x600px'
            ];

            $attributes = [];

            $validator = Validator::make($request->all(), $rules , $messages, $attributes);

            // This validates and gives errors which are caught below and also stop further execution
            $validated = $validator->validated();

            $validated['slug'] = $this->string_filter($validated['title']);

            // Need to set folder path for file manipulation
            $uploadRoot = base_path(env('UPLOAD_ROOT'));
            $blogsFolder = $uploadRoot . '/blogs';

            if($request->hasFile('image_file')){
                $file = $validated['image_file'];
                $fileName = $validated['slug'] . '_' . date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->move($blogsFolder, $fileName);
                $validated['image_file'] = $fileName;

                if(!empty($dataID)){
                    // Get existing image_file name from database for current id
                    $existing_image_file = BlogPost::find($dataID)->image_file;

                    // Delete existing image_file if exists
                    if($existing_image_file && file_exists($blogsFolder.'/'.$existing_image_file)){
                        @unlink($blogsFolder.'/'.$existing_image_file);
                    }
                }
            }else{
                $validated['image_file'] = $request->input('existing_image_file');
            }

            // Directly handle the save/update logic here
            if ($isNew) {
                $blogPost = BlogPost::create($validated);
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
        // $dataIDs = $request->input('dataID');

        // foreach ($dataIDs as $id) {
        //     $blogPost = BlogPost::find($id);
        //     if ($blogPost) {

        //         $blogPost->delete(); // Triggers model events and cascades
        //     }
        // }

        BlogPost::destroy($request->input('dataID'));

        return response()->json(['success' => true, 'message' => 'Record Deleted']);
    }
}
