<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SiteSettings;
use App\Models\ContactUs;
use App\Models\Client;
use App\Models\TechStack;
use App\Models\BlogPost;
use App\Models\AboutUs;
use App\Models\Tag;
use App\Models\HowWeWork;
use App\Models\HowWeWorkPage;
use App\Models\MainSlider;
use App\Models\Industry;
use App\Models\ServicesSection;
use App\Models\Project;
use App\Models\BlogCategory;
use App\Models\AboutSection;
use App\Models\ParallaxSection;
use App\Models\Causes;
use App\Models\Events;
use App\Models\Volunters;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\TermsCondition;
use App\Models\PrivacyPolicy;
use App\Models\WhyChooseUs;
use App\Models\CoreValue;
use App\Models\FAQ;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Use View::composer to pass data to all views
        View::composer('*', function ($view) {
            // Fetch necessary data
            $settings = SiteSettings::first();
            $mostReadPosts = BlogPost::orderBy('views_count', 'desc')->take(5)->get();

            $view->with([
                'favicon' => $settings ? $settings->favicon : null,
                'logo' => $settings ? $settings->logo : null,
                'breadcrumb_image' => $settings ? $settings->breadcrumb_image : null,
                'contact' => ContactUs::first(),
                'mostReadPosts' => $mostReadPosts,
                'terms_conditions' => TermsCondition::first(),
                'privacy_policy' => PrivacyPolicy::first(),
                'aboutsection' => AboutSection::first(),
                'parallaxsection' => ParallaxSection::first(),
                'about' => AboutUs::first(),
                'howweworkpage' => HowWeWorkPage::first(),
                'faq' => FAQ::all()->chunk(10),
                'mainslider' => MainSlider::all(),
                'industrs' => Industry::all(),
                'industrys' => Industry::orderBy('id', 'asc')->take(6)->get(),
                'servicessection' => ServicesSection::take(6)->get(),
                'services' => ServicesSection::All(),
                'projects' => Project::latest()->paginate(6),
                'causes' => Causes::latest()->paginate(3),
                'events' => Events::all(),
                'howwework' => HowWeWork::all(),
                'blogs' => BlogPost::with(['admin', 'blogcategory'])
                        ->orderBy('created_at', 'desc')
                        ->take(3)->get(),
                
                'blogpage' => BlogPost::with(['admin', 'blogcategory'])
                        ->orderBy('created_at', 'desc')->get(),

                'clients' => Client::all(),
                'tags' => Tag::all(),
                'categorys' => BlogCategory::withCount('blogposts')->get(),
                'techstacks' => TechStack::all(),
                'volunters' => Volunters::take(4)->get(),
                'latestcontact' => Contact::take(4)->get(),
                'securityteam' => Volunters::All(),
                'gallery' => Gallery::all(),
                'whychooseus' => WhyChooseUs::all(),
                'corevalues' => CoreValue::take(3)->get(),
                'gallerysection' => Gallery::latest()->take(6)->get(),
                'testimonial' => Testimonial::all(),
            ]);
        });
    }
}
