<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogPostController;

use App\Http\Controllers\Front\HomeController;

use App\Models\BlogCategory;
use App\Models\BlogPost;

use App\Http\Controllers\MailController;

use App\Http\Middleware\IsAdmin;

Route::get('/', [HomeController::class, 'index']);

$categories = BlogCategory::pluck('slug')->implode('|');
$posts = BlogPost::pluck('slug')->implode('|');

Route::get('blogs/{category}', [HomeController::class, 'blogs_category'])
    ->where('category', $categories);

Route::get('p/{post}', [HomeController::class, 'blog_post'])
    ->where('post', $posts);
    
// Route::get('blogs-search', [HomeController::class, 'blogs_search']);
// Route::get('/category-blogs/load-more', [HomeController::class, 'loadMoreBlogs']);

// Route::get('/', function () {
//     return view('welcome');
// });



Route::prefix('wm')->namespace ('Admin')->group(function () {

    
    Route::get('/register', [LoginController::class, 'register']);
    Route::get('/login', [LoginController::class, 'login']);
    Route::post('/authenticate', [LoginController::class, 'authenticate'] );
    Route::get('/logout', [LoginController::class, 'logout'] );

    Route::middleware([IsAdmin::class])->group(function () {

        Route::get('/dashboard', [LoginController::class, 'dashboard'] );

        Route::get('/change-password', [AdminController::class, 'change_password'] );
        Route::post('/changePasswordFunction', [AdminController::class, 'changePasswordFunction'] );

        Route::resource('/blogs-categories', BlogCategoryController::class);
        Route::post('/blogs-categories/bulk-delete', [BlogCategoryController::class, 'bulkDelete'])->name('blogs-categories.bulk-delete');

        Route::resource('/blog-posts', BlogPostController::class);
        Route::post('/blog-posts/bulk-delete', [BlogPostController::class, 'bulkDelete'])->name('blog-posts.bulk-delete');

    });

});
