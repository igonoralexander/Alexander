<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\FAQ;

class FAQSManager extends Component
{

    use WithFileUploads;

    public $selectedId = null;
    
    public $question, $answer;

    public $data;

    protected function rules()
    {
        return [
            'question' => 'required|string|unique:f_a_q_s,question,' . $this->selectedId,
            'answer' => 'required|string',
        ];
    }
    protected $messages = [
        'question.required' => 'Enter question',
        'answer.required' => 'Enter answer',
    ];

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = FAQ::all();
    }

    public function submit()
    {
        $this->validate();

        if ($this->selectedId) {
            // Update existing answer
            $faq = FAQ::findOrFail($this->selectedId);
            $faq->question = $this->question;
            $faq->answer = $this->answer;
            $faq->save();
    
            $this->resetForm();
            $this->load();

            session()->flash('message', 'Update successfull!');

        } else {
            // Add new
            $faq = new FAQ();
            $faq->question = $this->question;
            $faq->answer = $this->answer;
            $faq->save();
            
            $this->resetForm();
            $this->load();

            session()->flash('message', 'Saved successfully!');
        }
    }


    public function edit($id)
    {
        $faq = FAQ::findOrFail($id);
        $this->selectedId = $faq->id;
        $this->question = $faq->question;
        $this->answer = $faq->answer;
    }

    // Delete
    public function delete($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();

        $this->resetForm();
        $this->load();

        session()->flash('message', 'Delete successfull!');
    }

    public function resetForm()
    {
        $this->selectedId = null;
        $this->question = '';
        $this->answer = '';
    }
    public function render()
    {
        return view('livewire.f-a-q-s-manager');
    }
}
