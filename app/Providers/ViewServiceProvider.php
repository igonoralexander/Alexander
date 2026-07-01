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
        View::composer('*', function ($view) {
            $request = request();
            $key = 'shared_view_data';

            // Nested layouts and partials share this array, so the same queries do not rerun per include.
            if (!$request->attributes->has($key)) {
                $request->attributes->set($key, $this->sharedViewData());
            }

            $view->with($request->attributes->get($key));
        });
    }

    private function sharedViewData()
    {
        $settings = SiteSettings::first();
        $blogs = BlogPost::with(['admin', 'blogcategory'])
            ->orderBy('created_at', 'desc')
            ->get();

        return [
            'setting' => $settings,
            'favicon' => $settings ? $settings->favicon : null,
            'logo' => $settings ? $settings->logo : null,
            'breadcrumb_image' => $settings ? $settings->breadcrumb_image : null,
            'contact' => ContactUs::first(),
            'mostReadPosts' => BlogPost::orderBy('views_count', 'desc')->take(5)->get(),
            'terms_conditions' => TermsCondition::first(),
            'privacy_policy' => PrivacyPolicy::first(),
            'aboutsection' => AboutSection::first(),
            'parallaxsection' => ParallaxSection::first(),
            'about' => AboutUs::first(),
            'howweworkpage' => HowWeWorkPage::first(),
            'faq' => FAQ::all(),
            'mainslider' => MainSlider::all(),
            'industrs' => Industry::all(),
            'industrys' => Industry::orderBy('id', 'asc')->take(6)->get(),
            'servicessection' => ServicesSection::take(6)->get(),
            'services' => ServicesSection::all(),
            'projects' => Project::latest()->take(6)->get(),
            'causes' => Causes::latest()->take(3)->get(),
            'events' => Events::all(),
            'howwework' => HowWeWork::all(),
            'blogs' => $blogs,
            'blogpage' => $blogs,
            'clients' => Client::all(),
            'tags' => Tag::all(),
            'categorys' => BlogCategory::withCount('blogposts')->get(),
            'techstacks' => TechStack::all(),
            'volunters' => Volunters::take(4)->get(),
            'latestcontact' => Contact::take(4)->get(),
            'securityteam' => Volunters::all(),
            'gallery' => Gallery::all(),
            'whychooseus' => WhyChooseUs::all(),
            'corevalues' => CoreValue::take(3)->get(),
            'gallerysection' => Gallery::latest()->take(6)->get(),
            'testimonial' => Testimonial::all(),
        ];
    }
}
