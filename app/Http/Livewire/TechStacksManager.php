<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\TechStack;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TechStacksManager extends Component
{

    use WithFileUploads;
    
    public $selectedId;
    
    public $name, $image;
    public $data, $existingImage;
    
    protected $messages = [
        'name.required' => 'Enter name',
        'image.required' => 'Upload image',
    ];

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:tech_stacks,name,' . $this->selectedId,
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    
    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = TechStack::all();
    }

    public function resetForm()
    {
        $this->selectedId = null;
        $this->name = '';
        $this->image = null;
    }


     // Submit function for Add/Edit
     public function submit()
     {
          $this->validate();
  
          if ($this->selectedId) {
              $techstacks = TechStack::findOrFail($this->selectedId);
  
              if ($this->image) {
                  if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
                      Storage::disk('public')->delete($this->existingImage);
                  }
  
                  $folder = 'techstacks';
                  $imageName = time() . '.' . $this->image->getClientOriginalExtension();
                  $file = $this->image->storeAs($folder, $imageName, 'public');
                  $techstacks->image = 'storage/' . $file;
              }
  
              $techstacks->name = $this->name;
              $techstacks->save();
  
              $this->resetForm();
              $this->load();

              session()->flash('message', 'Updated successfull!');
              
          } else {

                $this->validate([
                    'name' => 'required|string|max:255|unique:tech_stacks,name',
                    'image' => 'required|image|max:2048',
                ]);
        
              $folder = 'techstacks';
              $imageName = time() . '.' . $this->image->getClientOriginalExtension();
              $file = $this->image->storeAs($folder, $imageName, 'public');
  
              $techstacks = new TechStack();
              $techstacks->name = $this->name;
              $techstacks->image = 'storage/' . $file;
              $techstacks->save();
  
              $this->resetForm();
              $this->load();

              session()->flash('message', 'Added successfully!');
          }
     }

    
    public function edit($id)
    {
        $techstacks = TechStack::findOrFail($id);
        $this->selectedId = $techstacks->id;
        $this->name = $techstacks->name;
        $this->existingImage = $techstacks->image;
    }

    public function delete($id)
    {
        $techstacks = TechStack::findOrFail($id);

        if ($techstacks->image && Storage::disk('public')->exists($techstacks->image)) {
            Storage::disk('public')->delete($techstacks->image);
        }

        $techstacks->delete();
        $this->resetForm();
        $this->load();
        
        session()->flash('message', 'Delete successful!');
    }
    
    public function render()
    {
        return view('livewire.tech-stacks-manager');
    }
}
