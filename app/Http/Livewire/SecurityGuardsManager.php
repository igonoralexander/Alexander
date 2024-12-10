<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Volunters;
use Illuminate\Support\Facades\Storage;

class SecurityGuardsManager extends Component
{

    use WithFileUploads;
    
    public $selectedId = null;

    public $name, $title, $image;

    public $existingImage, $data;
    

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:volunters,name,' . $this->selectedId,
            'title' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
    protected $messages = [
        'name.required' => 'Enter name',
        'title.required' => 'Enter title',
        'image.required' => 'Upload image',
    ];

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = volunters::all();
    }

    // Submit function for Add/Edit
    public function submit()
        {
            $this->validate();
    
            if ($this->selectedId) {
                $volunter = volunters::findOrFail($this->selectedId);
    
                if ($this->image) {
                    if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
                        Storage::disk('public')->delete($this->existingImage);
                    }
    
                    $folder = 'volunters';
                    $imageName = time() . '.' . $this->image->getClientOriginalExtension();
                    $file = $this->image->storeAs($folder, $imageName, 'public');
                    $volunter->image = 'storage/' . $file;
                }
    
                $volunter->name = $this->name;
                $volunter->title = $this->title;
                $volunter->save();
    
                $this->resetForm();
                $this->load();

                session()->flash('message', 'Team member updated successfully!');
            } else {

                $this->validate([
                    'name' => 'required|string|max:255|unique:volunters,name',
                    'title' => 'required|nullable|string',
                    'image' => 'required|image|max:2048',
                ]);

                // Add new volunter
                $folder = 'volunters';
                $imageName = time() . '.' . $this->image->getClientOriginalExtension();
                $file = $this->image->storeAs($folder, $imageName, 'public');
    
                $volunter = new volunters();
                $volunter->name = $this->name;
                $volunter->title = $this->title;
                $volunter->image = 'storage/' . $file;
                $volunter->save();
    
                $this->resetForm();
                $this->load();

                session()->flash('message', 'Team member added successfully!');
            }
        }

    public function resetForm()
    {
        $this->selectedvolunterId = null;
        $this->name = '';
        $this->title = '';
        $this->image = null;
        $this->existingImage = null;
    }

    // Load data for editing
    public function edit($id)
    {
        $volunter = volunters::findOrFail($id);
        $this->selectedId = $volunter->id;
        $this->name = $volunter->name;
        $this->title = $volunter->title;
        $this->existingImage = $volunter->image;
    }

    public function delete($id)
    {
         $volunter = volunters::findOrFail($id);
 
         if ($volunter->image && Storage::disk('public')->exists($volunter->image)) {
             Storage::disk('public')->delete($volunter->image);
         }
 
         $volunter->delete();
         $this->resetForm();
         $this->load();

         session()->flash('message', 'volunter deleted successfully!');
    }
    public function render()
    {
        return view('livewire.security-guards-manager');
    }
}
