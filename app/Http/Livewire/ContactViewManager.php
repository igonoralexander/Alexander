<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ContactViewManager extends Component
{

    use WithFileUploads;
    
    public $selectedId = null;
    public $data;

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = Contact::all();
    }

    public function delete($id)
    {
         $contact = Contact::findOrFail($id);
 
         $contact->delete();
         $this->load();
         
         session()->flash('message', 'Deleted successfully!');
    }

    public function render()
    {
        return view('livewire.contact-view-manager');
    }
}
