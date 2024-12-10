<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ClientsManager extends Component
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
            'name' => 'required|string|max:255|unique:clients,name,' . $this->selectedId,
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    
    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = Client::all();
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
              $clients = Client::findOrFail($this->selectedId);
  
              if ($this->image) {
                  if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
                      Storage::disk('public')->delete($this->existingImage);
                  }
  
                  $folder = 'clients';
                  $imageName = time() . '.' . $this->image->getClientOriginalExtension();
                  $file = $this->image->storeAs($folder, $imageName, 'public');
                  $clients->image = 'storage/' . $file;
              }
  
              $clients->name = $this->name;
              $clients->save();
  
              $this->resetForm();
              $this->load();

              session()->flash('message', 'Updated successfull!');
              
          } else {

                $this->validate([
                    'name' => 'required|string|max:255|unique:clients,name',
                    'image' => 'required|image|max:2048',
                ]);
        
              $folder = 'clients';
              $imageName = time() . '.' . $this->image->getClientOriginalExtension();
              $file = $this->image->storeAs($folder, $imageName, 'public');
  
              $clients = new Client();
              $clients->name = $this->name;
              $clients->image = 'storage/' . $file;
              $clients->save();
  
              $this->resetForm();
              $this->load();

              session()->flash('message', 'Services added successfully!');
          }
     }

    
    public function edit($id)
    {
        $clients = Client::findOrFail($id);
        $this->selectedId = $clients->id;
        $this->name = $clients->name;
        $this->existingImage = $clients->image;
    }

    public function delete($id)
    {
        $clients = Client::findOrFail($id);

        if ($clients->image && Storage::disk('public')->exists($clients->image)) {
            Storage::disk('public')->delete($clients->image);
        }

        $clients->delete();
        $this->resetForm();
        $this->load();
        
        session()->flash('message', 'Delete successful!');
    }
    

    public function render()
    {
        return view('livewire.clients-manager');
    }
}
