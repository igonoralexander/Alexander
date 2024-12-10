<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PrivacyPolicy;

class PrivacyPolicyManager extends Component
{

    use WithFileUploads;

    public $selectedId = null;
    
    public $content;

    public $data;

    protected function rules()
    {
        return [
            'content' => 'required|string|unique:privacy_policies,content,' . $this->selectedId,
        ];
    }
    protected $messages = [
        'content.required' => 'Enter content',
    ];

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = PrivacyPolicy::all();
    }

    public function submit()
    {
        $this->validate();

        if ($this->selectedId) {
            // Update existing content
            $PrivacyPolicy = PrivacyPolicy::findOrFail($this->selectedId);
            $PrivacyPolicy->content = $this->content;
            $PrivacyPolicy->save();
    
            $this->resetForm();
            $this->load();

            session()->flash('message', 'Update successfull!');

        } else {
            // Add new
            $PrivacyPolicy = new PrivacyPolicy();
            $PrivacyPolicy->content = $this->content;
            $PrivacyPolicy->save();
            
            $this->resetForm();
            $this->load();

            session()->flash('message', 'Saved successfully!');
        }
    }


    public function edit($id)
    {
        $PrivacyPolicy = PrivacyPolicy::findOrFail($id);
        $this->selectedId = $PrivacyPolicy->id;
        $this->content = $PrivacyPolicy->content;
    }

    // Delete
    public function delete($id)
    {
        $PrivacyPolicy = PrivacyPolicy::findOrFail($id);
        $PrivacyPolicy->delete();

        $this->resetForm();
        $this->load();

        session()->flash('message', 'Delete successfull!');
    }

    public function resetForm()
    {
        $this->selectedId = null;
        $this->content = '';
    }
    public function render()
    {
        return view('livewire.privacy-policy-manager');
    }
}
