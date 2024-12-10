<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;
use App\Models\SiteSettings;
use App\Models\ContactUs;
use App\Models\MainSlider;
use App\Models\ServicesSection;
use App\Models\Projects;
use App\Models\AboutSection;
use App\Models\Causes;
use App\Models\Events;
use App\Models\Volunters;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\FAQ;


class SharedViewData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {

         // Individual method calls to retrieve data
         $favicon = $this->getFavicon();
         $logo = $this->getLogo();
         $breadcrumb_image = $this->getBreadcrumbImage();
         $contact = $this->getContact();
         $aboutsection = $this->getAboutSection();
         $faq = $this->getFaq();

        $settings = SiteSettings::first();
        

        View::share([
            'favicon' => $favicon,
            'logo' => $logo,
            'breadcrumb_image' => $breadcrumb_image,
            'contact' => $contact,
            'aboutsection' => $aboutsection,
            'faq' => $faq,
            
            'mainslider' => MainSlider::all(),
            'servicessection' => ServicesSection::take(3)->get(),
            'projects' => Projects::take(6)->get(),
            'aboutsection' => AboutSection::first(),
            'causes' => Causes::latest()->paginate(3),
            'events' => Events::all(),
            'volunters' => Volunters::take(4)->get(),
            'gallery' => Gallery::all(),
            'testimonial' => Testimonial::all(),
            'faq' => FAQ::all()
        ]);

        return $next($request);
    }

 private function getFavicon()
    {
        $settings = SiteSettings::first();
        return $settings ? $settings->favicon : null;
    }

    private function getLogo()
    {
        $settings = SiteSettings::first();
        return $settings ? $settings->logo : null;
    }

    private function getBreadcrumbImage()
    {
        $settings = SiteSettings::first();
        return $settings ? $settings->breadcrumb_image : null;
    }

    private function getContact()
    {
        return ContactUs::first();
    }

    private function getAboutSection()
    {
        return AboutSection::first();
    }

    private function getFaq()
    {
        return FAQ::all();
    }
}