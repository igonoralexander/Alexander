<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\SeoMeta;

class SeoMetaManager extends Component
{

    use WithFileUploads;

    public $selectedId = null;
    
    public $page_name, $meta_title, $meta_keywords, $meta_description;

    public $data;

    protected function rules()
    {
        return [
            'page_name' => 'required|string|unique:seo_metas,page_name,' . $this->selectedId,
            'meta_title' => 'required|string',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ];
    }
    protected $messages = [
        'page_name.required' => 'Enter Page name',
        'meta_title.required' => 'Enter Meta title for page',
    ];

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = SeoMeta::all();
    }

    public function submit()
    {
        $this->validate();

        if ($this->selectedId) {
            // Update existing meta_title
            $seometa = SeoMeta::findOrFail($this->selectedId);
            $seometa->page_name = $this->page_name;
            $seometa->meta_title = $this->meta_title;
            $seometa->meta_keywords = $this->meta_keywords;
            $seometa->meta_description = $this->meta_description;

            $seometa->save();
    
            $this->resetForm();
            $this->load();

            session()->flash('message', 'Update successfull!');

        } else {

            
            $this->validate([
                'page_name' => 'required|string|unique:seo_metas,page_name,' . $this->selectedId,
                'meta_title' => 'required|string',
                'meta_keywords' => 'required|string',
                'meta_description' => 'required|string',
            ]);

            // Add new
            $seometa = new SeoMeta();
            $seometa->page_name = $this->page_name;
            $seometa->meta_title = $this->meta_title;
            $seometa->meta_keywords = $this->meta_keywords;
            $seometa->meta_description = $this->meta_description;

            $seometa->save();
            
            $this->resetForm();
            $this->load();

            session()->flash('message', 'Saved successfully!');
        }
    }


    public function edit($id)
    {
        $seometa = SeoMeta::findOrFail($id);

        $this->selectedId = $seometa->id;
        $this->page_name = $seometa->page_name;
        $this->meta_title = $seometa->meta_title;
        $this->meta_keywords = $seometa->meta_keywords;
        $this->meta_description = $seometa->meta_description;
    }

    // Delete
    public function delete($id)
    {
        $seometa = SeoMeta::findOrFail($id);
        $seometa->delete();

        $this->resetForm();
        $this->load();

        session()->flash('message', 'Delete successfull!');
    }

    public function resetForm()
    {
        $this->selectedId = null;
        $this->page_name = '';
        $this->meta_title = '';
        $this->meta_keywords = '';
        $this->meta_description = '';
    }

    public function render()
    {
        return view('livewire.seo-meta-manager');
    }
}
