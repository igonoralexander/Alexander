<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\SiteSettings;


class SiteSettingsManager extends Component
{
    use WithFileUploads;

    // Image fields
    public $logo, $favicon, $breadcrumb_image;
    public $about_section_image, $contact_section_image;
    public $services_section_image, $projects_section_image, $testimonials_section_image;

    // Temporary file storage for uploads
    public $newLogo, $newFavicon, $newBreadcrumbImage;
    public $newAboutSectionImage, $newContactSectionImage;
    public $newServicesSectionImage, $newProjectsSectionImage, $newTestimonialsSectionImage;

    // Text fields
    public $site_title, $meta_description, $meta_keywords;

    protected $rules = [
        'newLogo' => 'nullable|image|max:1024',
        'newFavicon' => 'nullable|image|max:512',
        'newBreadcrumbImage' => 'nullable|image|max:2048',
        'site_title' => 'nullable|string|max:255',
    ];

    public function mount()
    {
        $settings = SiteSettings::first();

        if ($settings) {
            $this->logo = $settings->logo;
            $this->favicon = $settings->favicon;
            $this->breadcrumb_image = $settings->breadcrumb_image;
            $this->about_section_image = $settings->about_section_image;
            $this->contact_section_image = $settings->contact_section_image;
            $this->services_section_image = $settings->services_section_image;
            $this->projects_section_image = $settings->projects_section_image;
            $this->testimonials_section_image = $settings->testimonials_section_image;
            $this->site_title = $settings->site_title;
        }
    }

    public function save()
    {
        $this->validate();

        // Store new uploads if they exist
        $this->logo = $this->newLogo ? $this->newLogo->store('settings', 'public') : $this->logo;
        $this->favicon = $this->newFavicon ? $this->newFavicon->store('settings', 'public') : $this->favicon;
        $this->breadcrumb_image = $this->newBreadcrumbImage ? $this->newBreadcrumbImage->store('settings', 'public') : $this->breadcrumb_image;
        $this->about_section_image = $this->newAboutSectionImage ? $this->newAboutSectionImage->store('settings', 'public') : $this->about_section_image;
        $this->contact_section_image = $this->newContactSectionImage ? $this->newContactSectionImage->store('settings', 'public') : $this->contact_section_image;
        $this->services_section_image = $this->newServicesSectionImage ? $this->newServicesSectionImage->store('settings', 'public') : $this->services_section_image;
        $this->projects_section_image = $this->newProjectsSectionImage ? $this->newProjectsSectionImage->store('settings', 'public') : $this->projects_section_image;
        $this->testimonials_section_image = $this->newTestimonialsSectionImage ? $this->newTestimonialsSectionImage->store('settings', 'public') : $this->testimonials_section_image;

        // Save to database
        SiteSettings::updateOrCreate(
            ['id' => 1], // assuming there's only one row for settings
            [
                'logo' => $this->logo,
                'favicon' => $this->favicon,
                'breadcrumb_image' => $this->breadcrumb_image,
                'about_section_image' => $this->about_section_image,
                'contact_section_image' => $this->contact_section_image,
                'services_section_image' => $this->services_section_image,
                'projects_section_image' => $this->projects_section_image,
                'testimonials_section_image' => $this->testimonials_section_image,
                'site_title' => $this->site_title,
            ]
        );

        session()->flash('message', 'Settings updated successfully.');
    }

    public function render()
    {
        return view('livewire.site-settings-manager');
    }
}
