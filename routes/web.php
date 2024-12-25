<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\FileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\SeoMeta;
use App\Models\ProjectCategory;
use App\Models\Project;

Route::get('/', function () {
    $seometa = SeoMeta::where('page_name', 'Home')->first();
    return view('frontend.index', compact('seometa'));
});

Route::get('/faq', function () {
    
    $seometa = SeoMeta::where('page_name', 'FAQ')->first();
    return view('frontend.pages.faq', [
        
        'seometa' => $seometa,
        'title' => 'What do you need help with?',
        'breadcrumbs' => [
            ['url' => null, 'label' => 'FAQs'],
        ],   
    ]);
});

Route::get('/services', function () {

    $seometa = SeoMeta::where('page_name', 'Services')->first();
    return view('frontend.pages.services', [
        
        'seometa' => $seometa,  // Pass the SEO meta data
        'title' => 'What I DO?',
        'breadcrumbs' => [
            ['url' => null, 'label' => 'Services'],
        ],   
    ]);
});

Route::get('/portfolio', function () {

    $seometa = SeoMeta::where('page_name', 'Projects')->first();
    $categories = ProjectCategory::all();
    $allprojects = Project::with('projectcategory')->get();

    return view('frontend.pages.projects', [    
        'seometa' => $seometa,
        'categories' => $categories,
        'allprojects' => $allprojects,

        'title' => 'What I Have Done?',
        'breadcrumbs' => [
            ['url' => null, 'label' => 'My Projects'],
        ],   
    ]);
});


Route::get('/blog', function () {
    return view('frontend.blog.index', [
        'title' => 'Articles and Updates',
        'breadcrumbs' => [
            ['url' => '#', 'label' => 'My Articles'],
        ],   
    ]);
});

Route::get('/about', [AboutUsPageController::class, 'index'])->name('about');

// Route::get('/', [ProjectsController::class, 'index']);

Route::get('/contact', [ContactUsController::class, 'index'])->name('contact');

Route::post('/email', [EmailController::class, 'sendEmail']) -> name('send.email');

Route::get('/download/{filename}', [FileController::class, 'download'])->name('file.download');

