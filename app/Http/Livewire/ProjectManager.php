<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Storage;

class ProjectManager extends Component
{

    use WithFileUploads;
    
    public $selectedId = null;

    public $name, $description, $image;
    public $category_id;
    public $existingImage, $project, $projectCategories;
    

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:projects,name,' . $this->selectedId,
            'description' => 'nullable|string',
            'link' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Image validation
        ];
    }
    protected $messages = [
        'name.required' => 'Enter Project name',
        'description.required' => 'Enter description',
        'image.required' => 'Upload image',
    ];

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = Project::with('projectcategory')->get();
        $this->projectCategories = ProjectCategory::all();
    }

        // Submit function for Add/Edit
    public function submit()
    {
            $this->validate();
    
            if ($this->selectedId) {
                // Update existing project
                $project = Project::findOrFail($this->selectedId);
    
                if ($this->image) {
                    if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
                        Storage::disk('public')->delete($this->existingImage);
                    }
    
                    $folder = 'projects_section';
                    $imageName = time() . '.' . $this->image->getClientOriginalExtension();
                    $file = $this->image->storeAs($folder, $imageName, 'public');
                    $project->image = 'storage/' . $file;
                }
    
                $project->name = $this->name;
                $project->category_id = $this->category_id;
                $project->link = $this->link;
                $project->description = $this->description;
                $project->save();
    
                $this->resetForm();
                $this->load();

                session()->flash('message', 'Project updated successfully!');
            } else {

                $this->validate([
                    'name' => 'required|string|max:255|unique:projects,name',
                    'description' => 'nullable|string',
                    'link' => 'nullable|string',
                    'image' => 'required|image|max:2048',
                ]);

                // Add new project
                $folder = 'projects_section';
                $imageName = time() . '.' . $this->image->getClientOriginalExtension();
                $file = $this->image->storeAs($folder, $imageName, 'public');
    
                $project = new Project();
                $project->name = $this->name;
                $project->category_id = $this->category_id;
                $project->link = $this->link;
                $project->description = $this->description;
                $project->image = 'storage/' . $file;
                $project->save();
    
                $this->resetForm();
                $this->load();

                session()->flash('message', 'Project added successfully!');
            }
    }

    
        public function resetForm()
    {
        $this->selectedId = null;
        $this->name = '';
        $this->link = '';
        $this->description = '';
        $this->image = null;
        $this->existingImage = null;
    }

    // Load data for editing
    public function edit($id)
    {
        $project = Project::with('projectcategory')->findOrFail($id);
       
        if (!$project->projectcategory) {
            $this->category_id = null; // No category assigned
        } else {
            $this->category_id = $project->projectcategory->id;
        }
        
        $this->selectedId = $project->id;
        $this->name = $project->name;
        $this->link = $project->link;
        $this->description = $project->description;
        $this->existingImage = $project->image;
    }

    public function delete($id)
    {
         $project = Project::findOrFail($id);
 
         if ($project->image && Storage::disk('public')->exists($project->image)) {
             Storage::disk('public')->delete($project->image);
         }
 
         $project->delete();
         $this->resetForm();
         $this->load();

         session()->flash('message', 'Project deleted successfully!');
    }

     
    public function render()
    {
        return view('livewire.project-manager');
    }
}
