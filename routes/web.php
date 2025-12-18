<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\SpecializationController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\TimeSlotController;
use App\Http\Controllers\Admin\AppointmentController;

use App\Http\Controllers\Front\HomeController;

use App\Http\Controllers\MailController;

use App\Http\Middleware\IsAdmin;

use App\Models\BlogCategory;
use App\Models\BlogPost;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::get('/blog-and-resources', [HomeController::class, 'blog_and_resources'])->name('blog-and-resources');
// Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/eye-diseases', [HomeController::class, 'eye_diseases'])->name('eye-diseases');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/info', [HomeController::class, 'info'])->name('info');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/surgeries', [HomeController::class, 'surgeries'])->name('surgeries');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::post('/enquiry/store', [HomeController::class, 'enquiry_store'])->name('enquiry.store');
Route::get('/enquiry/thank-you', [HomeController::class, 'enquiry_thank_you'])->name('enquiry.thank-you');
Route::post('/appointment/store', [HomeController::class, 'appointment_store'])->name('appointment.store');
Route::get('/appointment/thank-you', [HomeController::class, 'appointment_thank_you'])->name('appointment.thank-you');
Route::post('/get-doctor-by-specialization', [HomeController::class, 'getDoctorBySpecialization'])->name('get-doctor-by-specialization');
Route::post('/get-time-slots', [HomeController::class, 'getTimeSlots'])->name('get-time-slots');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

// $categories = BlogCategory::pluck('slug')->implode('|');
// if ($categories) {
//     Route::get('blogs/{category}', [HomeController::class, 'blogs'])
//         ->where('category', $categories)->name('blogs');
// } else {
    Route::get('blogs/{category?}', [HomeController::class, 'blogs'])->name('blogs');
// }

$posts = BlogPost::pluck('slug')->implode('|');
if ($posts) {
    Route::get('p/{post}', [HomeController::class, 'blog_post'])
        ->where('post', $posts);
} else {
    Route::get('p/{post}', [HomeController::class, 'blog_post']);
}

Route::get('test-mail', [MailController::class, 'test_mail']);


Route::get('testOtpMail', [HomeController::class, 'testOtpMail'])->name('testOtpMail');
Route::post('sendOtpViaEmail', [HomeController::class, 'sendOtpViaEmail'])->name('sendOtpViaEmail');

// Route::get('blogs-search', [HomeController::class, 'blogs_search']);
// Route::get('/category-blogs/load-more', [HomeController::class, 'loadMoreBlogs']);

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('ewm')->as('admin.')->group(function () {
    
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/authenticate', [LoginController::class, 'authenticate'] )->name('authenticate');
    Route::get('/logout', [LoginController::class, 'logout'] )->name('logout');

    Route::middleware([IsAdmin::class])->group(function () {

        Route::get('/dashboard', [LoginController::class, 'dashboard'] )->name('dashboard');

        Route::get('/appointments', [AppointmentController::class, 'index'] )->name('appointments.index');
        Route::get('/appointments/upcoming', [AppointmentController::class, 'upcoming'] )->name('appointments.upcoming');
        Route::get('/appointments/past', [AppointmentController::class, 'past'] )->name('appointments.past');
        Route::get('/appointments/edit/{id}', [AppointmentController::class, 'edit'] )->name('appointments.edit');
        Route::post('/appointments/update/{id}', [AppointmentController::class, 'update'] )->name('appointments.update');

        Route::get('/change-password', [AdminController::class, 'change_password'] )->name('change-password');
        Route::post('/changePasswordFunction', [AdminController::class, 'changePasswordFunction'] )->name('changePasswordFunction');

        Route::resource('/blogs-categories', BlogCategoryController::class);
        Route::post('/blogs-categories/bulk-delete', [BlogCategoryController::class, 'bulkDelete'])->name('blogs-categories.bulk-delete');

        Route::resource('/blog-posts', BlogPostController::class);
        Route::post('/blog-posts/bulk-delete', [BlogPostController::class, 'bulkDelete'])->name('blog-posts.bulk-delete');

        Route::resource('/specializations', SpecializationController::class);
        Route::post('/specializations/bulk-delete', [SpecializationController::class, 'bulkDelete'])->name('specializations.bulk-delete');

        Route::resource('/doctors', DoctorController::class);
        Route::post('/doctors/bulk-delete', [DoctorController::class, 'bulkDelete'])->name('doctors.bulk-delete');

        Route::resource('/time-slots', TimeSlotController::class);
        Route::post('/time-slots/bulk-delete', [TimeSlotController::class, 'bulkDelete'])->name('time-slots.bulk-delete');

    });

});
