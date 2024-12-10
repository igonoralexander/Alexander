<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\BlogCategory;

class BlogCategoryManager extends Component
{

    use WithFileUploads;

    public $selectedId = null;
    
    public $name, $data;

    protected function rules()
    {
        return [
            'name' => 'required|string|unique:blog_categories,name,' . $this->selectedId,
        ];
    }
    protected $messages = [
        'name.required' => 'Enter Blog category name',
    ];

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = BlogCategory::all();
    }

    public function submit()
    {
        $this->validate();

        if ($this->selectedId) {
            // Update existing category
            $blogCategory = BlogCategory::findOrFail($this->selectedId);
            $blogCategory->name = $this->name;
            $blogCategory->slug = \Str::slug($this->name); // Generate slug from name
            $blogCategory->save();
    
            $this->resetForm();
            $this->load();

            session()->flash('message', 'Blog Category updated successfully!');

        } else {
            // Add new category
            $blogCategory = new BlogCategory();
            $blogCategory->name = $this->name;
            $blogCategory->slug = \Str::slug($this->name); // Generate slug from name
            $blogCategory->save();
            
            $this->resetForm();
            $this->load();

            session()->flash('message', 'Blog Category added successfully!');
        }
    }


    public function edit($id)
    {
        $blogCategory = BlogCategory::findOrFail($id);
        $this->selectedId = $blogCategory->id;
        $this->name = $blogCategory->name;
    }

    // Delete category
    public function delete($id)
    {
        $blogCategory = BlogCategory::findOrFail($id);
        $blogCategory->delete();

        $this->resetForm();
        $this->load();

        session()->flash('message', 'category deleted successfully!');
    }

    public function resetForm()
    {
        $this->selectedId = null;
        $this->name = '';
    }

    public function render()
    {
        return view('livewire.blog-category-manager');
    }
}
