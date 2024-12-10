<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;
use App\Models\AboutSection;
use Illuminate\Support\Facades\Storage;

class AboutSectionManager extends Component
{
    use WithFileUploads;
    
    public $selectedId = null;
    public $small_title, $big_title, $mission_statement, $vision, $description, $image;
    public $data, $existingImage;

    protected $messages = [
       'small_title.required' => 'Enter Small title',
        'big_title.required' => 'Enter Big title',
        'description.required' => 'Enter description',
        'image.required' => 'Upload image',
    ];

    protected function rules()
    {
        return [
            'small_title' => 'required|string|max:255|',
            'big_title' => 'required|string|max:255|unique:about_sections,big_title,' . $this->selectedId,
            'description' => 'nullable|string',
            'mission_statement' => 'nullable|string',
            'vision' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ];
    }

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = AboutSection::all();
    }

    public function resetForm()
    {
        $this->selectedId = null;
        $this->small_title = '';
        $this->big_title = '';
        $this->description = '';
        $this->mission_statement = '';
        $this->vision = '';
        $this->image = null;
    }

    // Submit function for Add/Edit
    public function submit()
        {
             $this->validate();
     
             if ($this->selectedId) {
                 $about = AboutSection::findOrFail($this->selectedId);
     
                 if ($this->image) {
                     if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
                         Storage::disk('public')->delete($this->existingImage);
                     }
     
                     $folder = 'about_section';
                     $imageName = time() . '.' . $this->image->getClientOriginalExtension();
                     $file = $this->image->storeAs($folder, $imageName, 'public');
                     $about->image = 'storage/' . $file;
                 }
     
                 $about->small_title = $this->small_title;
                 $about->big_title = $this->big_title;
                 $about->description = $this->description;
                 $about->mission_statement = $this->mission_statement;
                 $about->vision = $this->vision;
                 $about->save();
     
                 $this->resetForm();
                 $this->load();
 
                 session()->flash('message', 'About section updated successfully!');
             } else {
 
               $this->validate([
                    'small_title' => 'required|string|max:255',   
                    'big_title' => 'required|string|max:255|unique:about_sections,big_title',
                    'description' => 'required|nullable|string',
                    'mission_statement' => 'required|nullable|string',
                    'vision' => 'required|nullable|string',
                    'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
               ]);

                 $folder = 'about_section';
                 $imageName = time() . '.' . $this->image->getClientOriginalExtension();
                 $file = $this->image->storeAs($folder, $imageName, 'public');
     
                 $about = new AboutSection();
                 $about->small_title = $this->small_title;
                 $about->big_title = $this->big_title;
                 $about->description = $this->description;
                 $about->mission_statement = $this->mission_statement;
                 $about->vision = $this->vision;
                 $about->image = 'storage/' . $file;
                 $about->save();
     
                 $this->resetForm();
                 $this->load();
 
                 session()->flash('message', 'Services added successfully!');
             }
        }

      
    public function edit($id)
    {
        $about = AboutSection::findOrFail($id);
        $this->selectedId = $about->id;
        $this->small_title = $about->small_title;
        $this->big_title = $about->big_title;
        $this->description = $about->description;
        $this->mission_statement = $about->mission_statement;
        $this->vision = $about->vision;
        $this->existingImage = $about->image;
    }

    public function delete($id)
    {
         $about = AboutSection::findOrFail($id);
 
         if ($about->image && Storage::disk('public')->exists($about->image)) {
             Storage::disk('public')->delete($about->image);
         }
 
         $about->delete();
         $this->resetForm();
         $this->load();
         
         session()->flash('message', 'Services deleted successfully!');
    }

    public function render()
    {
        return view('livewire.about-section-manager');
    }
}
