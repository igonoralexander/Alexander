<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Testimonial;

class TestimonialSectionManager extends Component
{
    use WithFileUploads;

    public $selectedTestimonialId = null;
    
    public $name, $title, $testimonial;

    public $data;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:50|unique:testimonials,name,' . $this->selectedTestimonialId,
            'title' => 'nullable|string|max:50',
            'testimonial' => 'required|string',
        ];
    }
    protected $messages = [
        'name.required' => 'Enter name',
        'title.required' => 'Enter title',
        'testimonial.required' => 'Enter testimonial',
    ];

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = Testimonial::all();
    }

    public function submit()
    {
        $this->validate();

        if ($this->selectedTestimonialId) {
            // Update existing testimonial
            $testimonials = Testimonial::findOrFail($this->selectedTestimonialId);
            $testimonials->name = $this->name;
            $testimonials->title = $this->title;
            $testimonials->testimonial = $this->testimonial;
            $testimonials->save();
    
            $this->resetForm();
            $this->load();

            session()->flash('message', 'Testimonial updated successfully!');

        } else {
            // Add new testimonial
            $testimonials = new Testimonial();
            $testimonials->name = $this->name;
            $testimonials->title = $this->title;
            $testimonials->testimonial = $this->testimonial;
            $testimonials->save();
            
            $this->resetForm();
            $this->load();

            session()->flash('message', 'Testimonial added successfully!');
        }
    }


    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $this->selectedTestimonialId = $testimonial->id;
        $this->name = $testimonial->name;
        $this->title = $testimonial->title;
        $this->testimonial = $testimonial->testimonial;
    }

    // Delete testimonial
    public function delete($id)
    {
        $testimonials = Testimonial::findOrFail($id);
        $testimonials->delete();

        $this->resetForm();
        $this->load();

        session()->flash('message', 'Testimonial deleted successfully!');
    }

    public function resetForm()
    {
        $this->selectedTestimonialId = null;
        $this->name = '';
        $this->title = '';
        $this->testimonial = '';
    }

    public function render()
    {
       return view('livewire.testimonial-section-manager');
    }
}
