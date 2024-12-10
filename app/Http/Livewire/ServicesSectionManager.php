<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ServicesSection;
use Illuminate\Support\Facades\Storage;

class ServicesSectionManager extends Component
{

    use WithFileUploads;
    
    public $selectedId = null;

    public $title, $description, $icon;

    public $data;
    

    protected $messages = [
        'title.required' => 'Enter Service title',
        'description.required' => 'Enter description',
        'icon.required' => 'Enter Icon name',
    ];

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255|unique:services_sections,title,' . $this->selectedId,
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
        ];
    }
    
    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = ServicesSection::all();
    }

   // Submit function for Add/Edit
   public function submit()
    {
              $this->validate();
      
              if ($this->selectedId) {
                  $service = ServicesSection::findOrFail($this->selectedId);
      
                  $service->icon = $this->icon;
                  $service->title = $this->title;
                  $service->description = $this->description;
                  $service->save();
      
                  $this->resetForm();
                  $this->load();
  
                  session()->flash('message', 'Services updated successfully!');
              } else {
  
                $this->validate([
                    'title' => 'required|string|max:255|unique:services_sections,title',
                    'description' => 'required|nullable|string',
                    'icon' => 'required|string',
                ]);
      
                  $service = new ServicesSection();
                  $service->icon = $this->icon;
                  $service->title = $this->title;
                  $service->description = $this->description;
                
                  $service->save();
      
                  $this->resetForm();
                  $this->load();
  
                  session()->flash('message', 'Services added successfully!');
              }
        }

    
    // Load for editing
    
    public function edit($id)
    {
        $services = ServicesSection::findOrFail($id);
        $this->selectedId = $services->id;
        $this->icon = $services->icon;
        $this->title = $services->title;
        $this->description = $services->description;
    }


    public function delete($id)
    {
         $service = ServicesSection::findOrFail($id);
 
         $service->delete();
         $this->resetForm();
         $this->load();
         
         session()->flash('message', 'Project deleted successfully!');
    }


    public function resetForm()
    {
        $this->selectedId = null;
        $this->icon = '';
        $this->title = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.services-section-manager');
    }
}
