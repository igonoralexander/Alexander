<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\WhyChooseUs;

class WhyChooseUsManager extends Component
{

    use WithFileUploads;

    public $selectedId = null;
    
    public $icon, $title, $content;

    public $data;

    protected function rules()
    {
        return [
            'icon' => 'required|string|max:50',
            'title' => 'nullable|string|max:50|unique:why_choose_us,title,' . $this->selectedId,
            'content' => 'required|string',
        ];
    }
    protected $messages = [
        'icon.required' => 'Enter icon',
        'title.required' => 'Enter title',
        'content.required' => 'Enter content',
    ];

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = WhyChooseUs::all();
    }

    public function submit()
    {
        $this->validate();

        if ($this->selectedId) {
            // Update existing content
            $contents = WhyChooseUs::findOrFail($this->selectedId);
            $contents->icon = $this->icon;
            $contents->title = $this->title;
            $contents->content = $this->content;
            $contents->save();
    
            $this->resetForm();
            $this->load();

            session()->flash('message', 'content updated successfully!');

        } else {
            // Add new content
            $contents = new WhyChooseUs();
            $contents->icon = $this->icon;
            $contents->title = $this->title;
            $contents->content = $this->content;
            $contents->save();
            
            $this->resetForm();
            $this->load();

            session()->flash('message', 'content added successfully!');
        }
    }


    public function edit($id)
    {
        $content = WhyChooseUs::findOrFail($id);
        $this->selectedId = $content->id;
        $this->icon = $content->icon;
        $this->title = $content->title;
        $this->content = $content->content;
    }

    // Delete content
    public function delete($id)
    {
        $contents = WhyChooseUs::findOrFail($id);
        $contents->delete();

        $this->resetForm();
        $this->load();

        session()->flash('message', 'content deleted successfully!');
    }

    public function resetForm()
    {
        $this->selectedId = null;
        $this->icon = '';
        $this->title = '';
        $this->content = '';
    }

    public function render()
    {
        return view('livewire.why-choose-us-manager');
    }
}
