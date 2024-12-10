<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\MainSlider;
use Illuminate\Support\Facades\Storage;

class HeroSectionManager extends Component
{

    use WithFileUploads;
    
    public $selectedId;
    
    public $title, $button_title, $button_link, $description, $image;
    public $data, $existingImage;
    
    protected $messages = [
        'title.required' => 'Enter title',
        'description.required' => 'Enter description',
        'image.required' => 'Upload image',
    ];

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255|unique:main_sliders,title,' . $this->selectedId,
            'description' => 'nullable|string',
            'button_title' => 'nullable|string',
            'button_link' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ];
    }

    
    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = MainSlider::all();
    }

    public function resetForm()
    {
        $this->selectedId = null;
        $this->title = '';
        $this->button_link = '';
        $this->button_title = '';
        $this->description = '';
        $this->image = null;
    }


     // Submit function for Add/Edit
     public function submit()
     {
          $this->validate();
  
          if ($this->selectedId) {
              $hero = MainSlider::findOrFail($this->selectedId);
  
              if ($this->image) {
                  if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
                      Storage::disk('public')->delete($this->existingImage);
                  }
  
                  $folder = 'main_slider';
                  $imageName = time() . '.' . $this->image->getClientOriginalExtension();
                  $file = $this->image->storeAs($folder, $imageName, 'public');
                  $hero->image = 'storage/' . $file;
              }
  
              $hero->title = $this->title;
              $hero->button_title = $this->button_title;
              $hero->button_link = $this->button_link;
              $hero->description = $this->description;
              $hero->save();
  
              $this->resetForm();
              $this->load();

              session()->flash('message', 'Updated successfull!');
              
          } else {

                $this->validate([
                    'title' => 'required|string|max:255|unique:main_sliders,title',
                    'description' => 'required|nullable|string',
                    'button_title' => 'required|nullable|string',
                    'button_link' => 'required|nullable|string',
                    'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
                ]);
        
              $folder = 'main_slider';
              $imageName = time() . '.' . \Str::random(10) . '.' . $this->image->getClientOriginalExtension();
              $file = $this->image->storeAs($folder, $imageName, 'public');
  
              $hero = new MainSlider();
              $hero->title = $this->title;
              $hero->button_title = $this->button_title;
              $hero->button_link = $this->button_link;
              $hero->description = $this->description;
              $hero->image = 'storage/' . $file;
              $hero->save();
  
              $this->resetForm();
              $this->load();

              session()->flash('message', 'Services added successfully!');
          }
     }

    
    public function edit($id)
    {
        $hero = MainSlider::findOrFail($id);
        $this->selectedId = $hero->id;
        $this->title = $hero->title;
        $this->button_link = $hero->button_link;
        $this->button_title = $hero->button_title;
        $this->description = $hero->description;
        $this->existingImage = $hero->image;
    }

    public function delete($id)
    {
        $hero = MainSlider::findOrFail($id);

        if ($hero->image && Storage::disk('public')->exists($hero->image)) {
            Storage::disk('public')->delete($hero->image);
        }

        $hero->delete();
        $this->resetForm();
        $this->load();
        
        session()->flash('message', 'Delete successful!');
    }
    
    public function render()
    {
        return view('livewire.hero-section-manager');
    }
}