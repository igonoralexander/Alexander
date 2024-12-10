<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteSettingsController;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\VoluntersController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesPageController;
use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\HowWeWorkPageController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MainSliderController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\TestimonailController;

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function(){
        
    Route::get('/login', [AdminController::class, 'index'])->name('login');

    Route::post('/logincheck', [AdminController::class, 'store'])->name('logincheck');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    
    // Apply middleware to all routes except login
    Route::middleware(['admin.session'])->group(function () {
    
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/why-choose-us', [AdminController::class, 'createWhyChooseUs'])->name('why-choose-us');
        Route::get('/clients', [AdminController::class, 'clients'])->name('clients');
        Route::get('/tech-stacks', [AdminController::class, 'techStacks'])->name('tech-stacks');
        Route::get('/core-values', [AdminController::class, 'createCoreValues'])->name('core-values');
        Route::get('/how-we-work-section', [AdminController::class, 'createHowWeWork'])->name('how-we-work-section');
        Route::get('/contact-view', [AdminController::class, 'viewContacts'])->name('contact-view');
        Route::get('/change-password', [AdminController::class, 'changePassword'])->name('change-password');
        Route::get('/parallax-section', [AdminController::class, 'parallaxSection'])->name('parallax-section');

        Route::get('/settings/site', [SiteSettingsController::class, 'index'])->name('site-settings-index');
        Route::get('/seo/meta', [SiteSettingsController::class, 'create'])->name('seo-metas-index');

        
        //projects-category
        Route::get('/project/category', [ProjectController::class, 'index'])->name('project-category');
        Route::post('/project/category/create', [ProjectController::class, 'store'])->name('project-category.store');

        //Terms-conditions

        Route::get('/terms-conditions', [TermsConditionController::class, 'index'])->name('terms-conditions');
        Route::get('/terms-conditions/create', [TermsConditionController::class, 'create'])->name('terms-conditions.create');
        Route::post('/terms-conditions', [TermsConditionController::class, 'store'])->name('terms-conditions.store');
        Route::get('/terms-conditions/{id}/edit', [TermsConditionController::class, 'edit'])->name('terms-conditions.edit');
        Route::put('/terms-conditions/{id}', [TermsConditionController::class, 'update'])->name('terms-conditions.update');
        Route::delete('/terms-conditions/{id}', [TermsConditionController::class, 'destroy'])->name('terms-conditions.destroy');

        //About Us Page

        Route::get('/about-us', [AboutUsPageController::class, 'aboutPageIndex'])->name('about-us');
        Route::get('/about-us/create', [AboutUsPageController::class, 'create'])->name('about-us.create');
        Route::post('/about-us', [AboutUsPageController::class, 'store'])->name('about-us.store');
        Route::get('/about-us/{id}/edit', [AboutUsPageController::class, 'edit'])->name('about-us.edit');
        Route::put('/about-us/{id}', [AboutUsPageController::class, 'update'])->name('about-us.update');
        Route::delete('/about-us/{id}', [AboutUsPageController::class, 'destroy'])->name('about-us.destroy');
        
        //How we work
        Route::get('/how-we-work', [HowWeWorkPageController::class, 'index'])->name('how-we-work');
        Route::get('/how-we-work/create', [HowWeWorkPageController::class, 'create'])->name('how-we-work.create');
        Route::post('/how-we-work', [HowWeWorkPageController::class, 'store'])->name('how-we-work.store');
        Route::get('/how-we-work/{id}/edit', [HowWeWorkPageController::class, 'edit'])->name('how-we-work.edit');
        Route::put('/how-we-work/{id}', [HowWeWorkPageController::class, 'update'])->name('how-we-work.update');
        Route::delete('/how-we-work/{id}', [HowWeWorkPageController::class, 'destroy'])->name('how-we-work.destroy');

        //Privacy Policy
        Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');
        Route::get('/privacy-policy/create', [PrivacyPolicyController::class, 'create'])->name('privacy-policy.create');
        Route::post('/privacy-policy', [PrivacyPolicyController::class, 'store'])->name('privacy-policy.store');
        Route::get('/privacy-policy/{id}/edit', [PrivacyPolicyController::class, 'edit'])->name('privacy-policy.edit');
        Route::put('/privacy-policy/{id}', [PrivacyPolicyController::class, 'update'])->name('privacy-policy.update');
        Route::delete('/privacy-policy/{id}', [PrivacyPolicyController::class, 'destroy'])->name('privacy-policy.destroy');

        //Industry Management
        Route::get('/industry', [IndustryController::class, 'index'])->name('industry.index');
        Route::get('/industry/create', [IndustryController::class, 'create'])->name('industry.create');
        Route::post('/industry/new', [IndustryController::class, 'store'])->name('industry.store');
        Route::put('/industry/{id}', [IndustryController::class, 'update'])->name('industry.update');
        Route::get('/industry/{id}/delete', [IndustryController::class, 'destroy'])->name('industry.delete');
        Route::get('/industry/{id}/edit', [IndustryController::class, 'edit'])->name('industry.edit');
        Route::get('/industry/{id}', [IndustryController::class, 'show'])->name('industry.show');
        
        // VoluntersController
        Route::get('/volunters', [VoluntersController::class, 'index'])->name('volunters-index');

        Route::get('/volunters/create', [VoluntersController::class, 'create'])->name('volunters-create');
        Route::post('/volunters/new', [VoluntersController::class, 'store'])->name('add-volunters');
        Route::put('/volunters/{volunters}', [VoluntersController::class, 'update'])->name('volunters-update');
        Route::get('/volunters/{volunters}/delete', [VoluntersController::class, 'destroy'])->name('volunters-delete');
        Route::get('/volunters/{volunters}/edit', [VoluntersController::class, 'edit'])->name('volunters-edit');
        Route::get('/volunters/{volunters}', [VoluntersController::class, 'show'])->name('volunters-show');

        //Gallery Management
        Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery-index');

        Route::get('/galler/create', [GalleryController::class, 'create'])->name('gallery-create');
        Route::post('/gallery/new', [GalleryController::class, 'store'])->name('add-gallery');
        Route::put('/gallery/{gallery}', [GalleryController::class, 'update'])->name('gallery-update');
        Route::get('/gallery/{gallery}/delete', [GalleryController::class, 'destroy'])->name('gallery-delete');
        Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery-edit');
        Route::get('/gallery/{gallery}', [GalleryController::class, 'show'])->name('gallery-show');

        //Events Management
        Route::get('/events', [EventsController::class, 'index'])->name('events-index');
        Route::get('/events/create', [EventsController::class, 'create'])->name('events-create');
        Route::post('/events/new', [EventsController::class, 'store'])->name('add-events');
        Route::put('/events/{events}', [EventsController::class, 'update'])->name('events-update');
        Route::get('/events/{events}/delete', [EventsController::class, 'destroy'])->name('events-delete');
        Route::get('/events/{events}/edit', [EventsController::class, 'edit'])->name('events-edit');
        Route::get('/events/{events}', [EventsController::class, 'show'])->name('events-show');

        //ProjectsPageController management
        Route::get('/homepage/projects', [ProjectController::class, 'projectssectionIndex'])->name('projects-section-create');

        //ServicesPageController management
        Route::get('/homepage/servicessection', [ServicesPageController::class, 'servicessectionIndex'])->name('services-section-create');

        
        //AboutUsPageController management
        Route::get('/homepage/aboutsection', [AboutUsPageController::class, 'aboutsectionIndex'])->name('about-section-create');

        Route::get('/contactus', [ContactUsController::class, 'contactIndex'])->name('contact-create');

        //main-slider management

        Route::get('/hero-section', [MainSliderController::class, 'index'])->name('main-slider-index');
        Route::get('/main-slider/create', [MainSliderController::class, 'create'])->name('main-slider-create');

        Route::post('/main-slider/new', [MainSliderController::class, 'store'])->name('add-main-slider');
        
        Route::put('/main-slider/{mainSlider}', [MainSliderController::class, 'update'])->name('main-slider-update');
        Route::get('/main-slider/{mainSlider}/delete', [MainSliderController::class, 'destroy'])->name('main-slider-delete');
        Route::get('/main-slider/{mainSlider}/edit', [MainSliderController::class, 'edit'])->name('main-slider-edit');
        Route::get('/main-slider/{mainSlider}', [MainSliderController::class, 'show'])->name('main-slider-show');

        
        //faq management

        Route::get('/faq', [FAQController::class, 'index'])->name('faq-index');

        Route::get('/faq/create', [FAQController::class, 'create'])->name('faq-create');
        Route::post('/faq/new', [FAQController::class, 'store'])->name('add-faq');
        Route::put('/faq/{faq}', [FAQController::class, 'update'])->name('faq-update');
        Route::get('/faq/{faq}/delete', [FAQController::class, 'destroy'])->name('faq-delete');
        Route::get('/faq/{faq}/edit', [FAQController::class, 'edit'])->name('faq-edit');
        Route::get('/faq/{faq}', [FAQController::class, 'show'])->name('faq-show');

        Route::get('/cadre-level', [AdminController::class, 'createCadreLevels'])->name('cadre-levels');

        //testimonial management

        Route::get('/testimonial', [TestimonailController::class, 'index'])->name('testimonial-index');
        
        Route::get('/testimonial/create', [TestimonailController::class, 'create'])->name('testimonial-create');
        Route::post('/testimonial/new', [TestimonailController::class, 'store'])->name('add-testimonial');
        Route::put('/testimonial/{testimonial}', [TestimonailController::class, 'update'])->name('testimonial-update');
        Route::get('/testimonial/{testimonial}/delete', [TestimonailController::class, 'destroy'])->name('testimonial-delete');
        Route::get('/testimonial/{testimonial}/edit', [TestimonailController::class, 'edit'])->name('testimonial-edit');
        Route::get('/testimonial/{testimonial}', [TestimonailController::class, 'show'])->name('testimonial-show');

    });
});