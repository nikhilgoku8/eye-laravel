<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $data['result'] = BlogCategory::orderBy('sort_order')->paginate(100);
        return view('admin.blogs-categories.index', $data);
    }

    public function create()
    {
        return view('admin.blogs-categories.create');
    }

    public function show(Category $category)
    {
        $data['result'] = $category;
        return view('admin.blogs-categories.show', $data);
    }

    public function edit(Category $category)
    {
        $data['result'] = $category;
        return view('admin.blogs-categories.edit', $data);
    }

    public function string_filter($string){
        $string = str_replace('--', '-', preg_replace('/[^A-Za-z0-9\-\']/', '', str_replace(' ', '-', str_replace("- ","-", str_replace(" -","-", str_replace("&","and", preg_replace("!\s+!"," ",strtolower($string))))))));
        return $string;
    }

    public function store(Request $request)
    {
        return $this->handleCategoryRequest($request, new Category(), true);
    }

    public function update(Request $request, Category $category)
    {

        return $this->handleCategoryRequest($request, $category, false);

    }

    private function handleCategoryRequest(Request $request, Category $category, bool $isNew)
    {

        $dataID = $request->input('dataID');

        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255|unique:blogs_categories,title,'. $dataID,
                'sort_order' => 'required|numeric|min:0',
            ]);

            $validated['slug'] = $this->string_filter($validated['title']);

            // Directly handle the save/update logic here
            if ($isNew) {
                $category = BlogCategory::create($validated);
            } else {
                $category->update($validated);
            }

            return response()->json([
                'status' => 'success',
                'message' => $isNew ? 'Category created successfully!' : 'Category updated successfully!',
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

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.blogs-categories.index')->with('success', 'Category deleted!');
    }

    public function bulkDelete(Request $request)
    {
        // $dataIDs = $request->input('dataID');

        BlogCategory::destroy($request->dataID);

        return response()->json(['success' => true, 'message' => 'Record Deleted']);
    }
}
