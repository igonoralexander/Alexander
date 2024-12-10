<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\AboutUs;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AboutManager extends Component
{

    use WithFileUploads;
    
    public $selectedAboutId = null;
    public $main_title, $who_we_are, $brief_history, $aim_and_objectives;
    public $focus_areas, $meta_title, $meta_description, $founder, $featured_image;
    public $data, $existingImage;

    protected $messages = [
        'main_title.required' => 'About title required',
        'featured_image.required' => 'Upload image',
    ];

    protected function rules()
    {
        return [
            'main_title' => 'nullable|string|max:255|unique:about_us,main_title,' . $this->selectedAboutId,
            'who_we_are' => 'nullable|string',
            'brief_history' => 'nullable|string',
            'aim_and_objectives' => 'nullable|string',
            'focus_areas' => 'nullable|string',
            'founder' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = AboutUs::all();
    }

    public function resetForm()
    {
        $this->selectedAboutId = null;
        $this->who_we_are = '';
        $this->main_title = '';
        $this->brief_history = '';
        $this->aims_and_objectives = '';
        $this->focus_areas = '';
        $this->founder = '';
        $this->meta_title = '';
        $this->meta_description = '';
        $this->featured_image = null;
    }

    // Submit function for Add/Edit
    public function submit()
        {
             $this->validate();
     
             if ($this->selectedAboutId) {
                 $about = AboutUs::findOrFail($this->selectedAboutId);
     
                 if ($this->featured_image) {
                     if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
                         Storage::disk('public')->delete($this->existingImage);
                     }
     
                     $folder = 'about_section';
                     $imageName = time() . '.' . $this->featured_image->getClientOriginalExtension();
                     $file = $this->featured_image->storeAs($folder, $imageName, 'public');
                     $about->featured_image = 'storage/' . $file;
                 }

                 $about->main_title = $this->main_title;
                 $about->who_we_are = $this->who_we_are;
                 $about->brief_history = $this->brief_history;
                 $about->aim_and_objectives = $this->aim_and_objectives;
                 $about->focus_areas = $this->focus_areas;
                 $about->founder = $this->founder;
                 $about->meta_title = $this->meta_title;
                 $about->meta_description = $this->meta_description;

                 $about->save();
     
                 $this->resetForm();
                 $this->load();
 
                 session()->flash('message', 'About section updated successfully!');
             } else {
 
               $this->validate([
                    'main_title' => 'required|string|max:255|unique:about_us,main_title,' . $this->selectedAboutId,
                    'who_we_are' => 'nullable|string',
                    'brief_history' => 'nullable|string',
                    'aim_and_objectives' => 'nullable|string',
                    'focus_areas' => 'nullable|string',
                    'founder' => 'nullable|string',
                    'meta_title' => 'nullable|string',
                    'meta_description' => 'nullable|string',
                   'featured_image' => 'required|image|max:2048',
               ]);

                 $folder = 'about_section';
                 $imageName = time() . '.' . $this->featured_image->getClientOriginalExtension();
                 $file = $this->featured_image->storeAs($folder, $imageName, 'public');
     
                 $about = new AboutUs();
                 $about->main_title = $this->main_title;
                 $about->who_we_are = $this->who_we_are;
                 $about->brief_history = $this->brief_history;
                 $about->aim_and_objectives = $this->aim_and_objectives;
                 $about->focus_areas = $this->focus_areas;
                 $about->founder = $this->founder;
                 $about->meta_title = $this->meta_title;
                 $about->meta_description = $this->meta_description;

                 $about->featured_image = 'storage/' . $file;
                 $about->save();
     
                 $this->resetForm();
                 $this->load();
 
                 session()->flash('message', 'Saved successfully!');
             }
        }
      
    
    public function edit($id)
    {
        $about = AboutUs::findOrFail($id);
        $this->selectedAboutId = $about->id;
        $this->main_title = $about->main_title;
        $this->who_we_are = $about->who_we_are;
        $this->brief_history = $about->brief_history;
        $this->aim_and_objectives = $about->aim_and_objectives;
        $this->focus_areas = $about->focus_areas;
        $this->founder = $about->founder;
        $this->meta_title = $about->meta_title;
        $this->meta_description = $about->meta_description;
        $this->existingImage = $about->featured_image;
    }

    public function delete($id)
    {
         $about = AboutUs::findOrFail($id);
 
         if ($about->featured_image && Storage::disk('public')->exists($about->featured_image)) {
             Storage::disk('public')->delete($about->featured_image);
         }
 
         $about->delete();
         $this->resetForm();
         $this->load();
         
         session()->flash('message', 'Deleted successfully!');
    }

    public function render()
    {
        return view('livewire.about-manager');
    }
}
