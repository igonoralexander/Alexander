<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ParallaxSection;

class ParallaxSectionManager extends Component
{
    use WithFileUploads;
    
    public $selectedId;
    
    public $heading, $highlight, $video_url, $description, $image;
    public $data, $existingImage;
    
    protected $messages = [
        'heading.required' => 'Enter heading',
        'description.required' => 'Enter description',
        'image.required' => 'Upload image',
    ];

    protected function rules()
    {
        return [
            'heading' => 'required|string|max:255|unique:parallax_sections,heading,' . $this->selectedId,
            'description' => 'nullable|string',
            'highlight' => 'nullable|string',
            'video_url' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    
    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = ParallaxSection::all();
    }

    public function resetForm()
    {
        $this->selectedId = null;
        $this->heading = '';
        $this->video_url = '';
        $this->highlight = '';
        $this->description = '';
        $this->image = null;
    }


     // Submit function for Add/Edit
     public function submit()
     {
          $this->validate();
  
          if ($this->selectedId) {
              $hero = ParallaxSection::findOrFail($this->selectedId);
  
              if ($this->image) {
                  if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
                      Storage::disk('public')->delete($this->existingImage);
                  }
  
                  $folder = 'parallax_section';
                  $imageName = time() . '.' . $this->image->getClientOriginalExtension();
                  $file = $this->image->storeAs($folder, $imageName, 'public');
                  $hero->image = 'storage/' . $file;
              }
  
              $hero->heading = $this->heading;
              $hero->highlight = $this->highlight;
              $hero->video_url = $this->video_url;
              $hero->description = $this->description;
              $hero->save();
  
              $this->resetForm();
              $this->load();

              session()->flash('message', 'Updated successfull!');
              
          } else {

                $this->validate([
                    'heading' => 'required|string|max:255|unique:parallax_sections,heading',
                    'description' => 'required|nullable|string',
                    'highlight' => 'required|nullable|string',
                    'video_url' => 'required|nullable|string',
                    'image' => 'required|image|max:2048',
                ]);
        
              $folder = 'parallax_section';
              $imageName = time() . '.' . $this->image->getClientOriginalExtension();
              $file = $this->image->storeAs($folder, $imageName, 'public');
  
              $hero = new ParallaxSection();
              $hero->heading = $this->heading;
              $hero->highlight = $this->highlight;
              $hero->video_url = $this->video_url;
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
        $hero = ParallaxSection::findOrFail($id);
        $this->selectedId = $hero->id;
        $this->heading = $hero->heading;
        $this->video_url = $hero->video_url;
        $this->highlight = $hero->highlight;
        $this->description = $hero->description;
        $this->existingImage = $hero->image;
    }

    public function delete($id)
    {
        $hero = ParallaxSection::findOrFail($id);

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
        return view('livewire.parallax-section-manager');
    }
}
