<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\BlogController as UserBlogController;
use App\Http\Controllers\User\ContactMeController as UserContactMeController;
use App\Http\Controllers\User\EventsController as UserEventsController;
use App\Http\Controllers\User\MaterialController as UserMaterialController;
use App\Http\Controllers\User\PortofolioController as UserPortofolioController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ConsultationRequestCategoryController;
use App\Http\Controllers\Admin\ConsultationRequestController;
use App\Http\Controllers\Admin\ContactPageSettingController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\MaterialCategoryController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\WorkCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'store'])->name('user.consultation-request.store');

// Blog
Route::get('blog', [UserBlogController::class, 'index'])->name('blog.index');
Route::get('blog/{slug}', [UserBlogController::class, 'detail'])->name('blog.detail');

// Events
Route::get('events', [UserEventsController::class, 'index'])->name('events.index');

// Material
Route::get('material', [UserMaterialController::class, 'index'])->name('material.index');
// Route::get('material/{id}', [UserMaterialController::class, 'download'])->name('material.download');
Route::get('material/item', [UserMaterialController::class, 'item'])->name('material.item');
Route::get('material/add', [UserMaterialController::class, 'addPage'])->name('material.add');
Route::post('material/store', [UserMaterialController::class, 'addData'])->name('material.store');
Route::get('material/filter', [UserMaterialController::class, 'filter'])->name('material.filter');
Route::get('material/search', [UserMaterialController::class, 'search'])->name('material.search');
Route::get('material/{id}/detailPage', [MaterialController::class, 'detailPage'])->name('user.material.detail');
Route::get('material/{id}/download', [UserMaterialController::class, 'download'])->name('material.download');
Route::get('material/detailPage/{link}', [MaterialController::class, 'linkPage'])->name('user.material.link');

// Portofolio
Route::get('portofolio', [UserPortofolioController::class, 'index'])->name('portofolio.index');

// Contact Us
Route::get('contact-me', [UserContactMeController::class, 'index'])->name('contact-me.index');
Route::post('contact-me/', [UserContactMeController::class, 'store'])->name('user.message.store');


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    //Blog
    Route::prefix('blog')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('admin.blog');
        Route::get('{id}', [BlogController::class, 'show'])->name('admin.blog.show');
        Route::post('/', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::post('{id}/update', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::post('{id}/delete', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
    });

    //Blog Category
    Route::prefix('blog-category')->group(function () {
        Route::get('/', [BlogCategoryController::class, 'index'])->name('admin.blog-category.index');
        Route::get('{id}', [BlogCategoryController::class, 'show'])->name('admin.blog-category.show');
        Route::post('/', [BlogCategoryController::class, 'store'])->name('admin.blog-category.store');
        Route::post('{id}/update', [BlogCategoryController::class, 'update'])->name('admin.blog-category.update');
        Route::post('{id}/delete', [BlogCategoryController::class, 'destroy'])->name('admin.blog-category.destroy');
    });

    //Consultation Request
    Route::prefix('consultation-request')->group(function () {
        Route::get('/', [ConsultationRequestController::class, 'index'])->name('admin.consultation-request.index');
        Route::get('{id}', [ConsultationRequestController::class, 'show'])->name('admin.consultation-request.show');
        Route::post('/', [ConsultationRequestController::class, 'store'])->name('admin.consultation-request.store');
        Route::post('{id}/update', [ConsultationRequestController::class, 'update'])->name('admin.consultation-request.update');
        Route::post('{id}/delete', [ConsultationRequestController::class, 'destroy'])->name('admin.consultation-request.destroy');
    });

    //Consultation Request Category
    Route::prefix('consultation-request-category')->group(function () {
        Route::get('/', [ConsultationRequestCategoryController::class, 'index'])->name('admin.consultation-request-category.index');
        Route::get('{id}', [ConsultationRequestCategoryController::class, 'show'])->name('admin.consultation-request-category.show');
        Route::post('/', [ConsultationRequestCategoryController::class, 'store'])->name('admin.consultation-request-category.store');
        Route::post('{id}/update', [ConsultationRequestCategoryController::class, 'update'])->name('admin.consultation-request-category.update');
        Route::post('{id}/delete', [ConsultationRequestCategoryController::class, 'destroy'])->name('admin.consultation-request-category.destroy');
    });

    //Contact Page Setting
    Route::prefix('contact-page-setting')->group(function () {
        Route::get('/', [ContactPageSettingController::class, 'index'])->name('admin.contact-page-setting.index');
        Route::get('{id}', [ContactPageSettingController::class, 'show'])->name('admin.contact-page-setting.show');
        Route::post('/', [ContactPageSettingController::class, 'store'])->name('admin.contact-page-setting.store');
        Route::post('{id}/update', [ContactPageSettingController::class, 'update'])->name('admin.contact-page-setting.update');
        Route::post('{id}/delete', [ContactPageSettingController::class, 'destroy'])->name('admin.contact-page-setting.destroy');
    });

    //Event
    Route::prefix('event')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('admin.event.index');
        Route::get('{id}', [EventController::class, 'show'])->name('admin.event.show');
        Route::post('/', [EventController::class, 'store'])->name('admin.event.store');
        Route::post('{id}/update', [EventController::class, 'update'])->name('admin.event.update');
        Route::post('{id}/delete', [EventController::class, 'destroy'])->name('admin.event.destroy');
    });

    //Event Category
    Route::prefix('event-category')->group(function () {
        Route::get('/', [EventCategoryController::class, 'index'])->name('admin.event-category.index');
        Route::get('{id}', [EventCategoryController::class, 'show'])->name('admin.event-category.show');
        Route::post('/', [EventCategoryController::class, 'store'])->name('admin.event-category.store');
        Route::post('{id}/update', [EventCategoryController::class, 'update'])->name('admin.event-category.update');
        Route::post('{id}/delete', [EventCategoryController::class, 'destroy'])->name('admin.event-category.destroy');
    });

    //Experience
    Route::prefix('experience')->group(function () {
        Route::get('/', [ExperienceController::class, 'index'])->name('admin.experience.index');
        Route::get('{id}', [ExperienceController::class, 'show'])->name('admin.experience.show');
        Route::post('/', [ExperienceController::class, 'store'])->name('admin.experience.store');
        Route::post('{id}/update', [ExperienceController::class, 'update'])->name('admin.experience.update');
        Route::post('{id}/delete', [ExperienceController::class, 'destroy'])->name('admin.experience.destroy');
    });

    //Material
    Route::prefix('material')->group(function () {
        Route::get('/', [MaterialController::class, 'index'])->name('admin.material.index');
        Route::get('{id}', [MaterialController::class, 'show'])->name('admin.material.show');
        Route::post('/', [MaterialController::class, 'store'])->name('admin.material.store');
        // Route::post('{id}/update', [MaterialController::class, 'update'])->name('admin.material.update');
        Route::post('{id}/delete', [MaterialController::class, 'destroy'])->name('admin.material.destroy');
        Route::get('material/{id}/edit', [MaterialController::class, 'edit'])->name('admin.material.edit');
        // Route::put('dashboard/material/{id}/update', [MaterialController::class, 'update'])->name('dashboard.material.update');
        Route::put('dashboard/material/{id}/update', [MaterialController::class, 'update'])->name('admin.material.update');
        Route::get('/search/material', [MaterialController::class, 'search'])->name('search.material');



    });

    //Material Category
    Route::prefix('material-category')->group(function () {
        Route::get('/', [MaterialCategoryController::class, 'index'])->name('admin.material-category.index');
        Route::get('{id}', [MaterialCategoryController::class, 'show'])->name('admin.material-category.show');
        Route::post('/', [MaterialCategoryController::class, 'store'])->name('admin.material-category.store');
        Route::post('{id}/update', [MaterialCategoryController::class, 'update'])->name('admin.material-category.update');
        Route::post('{id}/delete', [MaterialCategoryController::class, 'destroy'])->name('admin.material-category.destroy');
    });

    //Message
    Route::prefix('message')->group(function () {
        Route::get('/', [MessageController::class, 'index'])->name('admin.message.index');
        Route::get('{id}', [MessageController::class, 'show'])->name('admin.message.show');
        Route::post('/', [MessageController::class, 'store'])->name('admin.message.store');
        Route::post('{id}/update', [MessageController::class, 'update'])->name('admin.message.update');
        Route::post('{id}/delete', [MessageController::class, 'destroy'])->name('admin.message.destroy');
    });

    //Partner
    Route::prefix('partner')->group(function () {
        Route::get('/', [PartnerController::class, 'index'])->name('admin.partner.index');
        Route::get('{id}', [PartnerController::class, 'show'])->name('admin.partner.show');
        Route::post('/', [PartnerController::class, 'store'])->name('admin.partner.store');
        Route::post('{id}/update', [PartnerController::class, 'update'])->name('admin.partner.update');
        Route::post('{id}/delete', [PartnerController::class, 'destroy'])->name('admin.partner.destroy');
    });

    //Social Media
    Route::prefix('social-media')->group(function () {
        Route::get('/', [SocialMediaController::class, 'index'])->name('admin.social-media.index');
        Route::get('{id}', [SocialMediaController::class, 'show'])->name('admin.social-media.show');
        Route::post('/', [SocialMediaController::class, 'store'])->name('admin.social-media.store');
        Route::post('{id}/update', [SocialMediaController::class, 'update'])->name('admin.social-media.update');
        Route::post('{id}/delete', [SocialMediaController::class, 'destroy'])->name('admin.social-media.destroy');
    });

    //Testimonial
    Route::prefix('testimonial')->group(function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('admin.testimonial.index');
        Route::get('{id}', [TestimonialController::class, 'show'])->name('admin.testimonial.show');
        Route::post('/', [TestimonialController::class, 'store'])->name('admin.testimonial.store');
        Route::post('{id}/update', [TestimonialController::class, 'update'])->name('admin.testimonial.update');
        Route::post('{id}/delete', [TestimonialController::class, 'destroy'])->name('admin.testimonial.destroy');
    });

    //Work
    Route::prefix('work')->group(function () {
        Route::get('/', [WorkController::class, 'index'])->name('admin.work.index');
        Route::get('{id}', [WorkController::class, 'show'])->name('admin.work.show');
        Route::post('/', [WorkController::class, 'store'])->name('admin.work.store');
        Route::post('{id}/update', [WorkController::class, 'update'])->name('admin.work.update');
        Route::post('{id}/delete', [WorkController::class, 'destroy'])->name('admin.work.destroy');
    });

    //Work Category
    Route::prefix('work-category')->group(function () {
        Route::get('/', [WorkCategoryController::class, 'index'])->name('admin.work-category.index');
        Route::get('{id}', [WorkCategoryController::class, 'show'])->name('admin.work-category.show');
        Route::post('/', [WorkCategoryController::class, 'store'])->name('admin.work-category.store');
        Route::post('{id}/update', [WorkCategoryController::class, 'update'])->name('admin.work-category.update');
        Route::post('{id}/delete', [WorkCategoryController::class, 'destroy'])->name('admin.work-category.destroy');
    });
});


require __DIR__ . '/auth.php';
