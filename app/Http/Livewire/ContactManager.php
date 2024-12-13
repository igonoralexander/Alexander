<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ContactUs;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ContactManager extends Component
{

    use WithFileUploads;
    
    public $selectedId = null;
    public $title, $description;
    public $image_path, $github, $linkedin, $phone, $email;
    public $facebook_link, $twitter_link, $instagram_link, $youtube_link;
    public $data, $existingImage;

    protected $messages = [
        'title.required' => 'Contact title required',
        'image_path.required' => 'Upload image',
    ];

    protected function rules()
    {
        return [
            'title' => 'nullable|string|max:255|unique:contact_us,title,' . $this->selectedId,
            'description' => 'nullable|string',
            'github' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|string',
            'facebook_link' => 'nullable|string',
            'twitter_link' => 'nullable|string',
            'instagram_link' => 'nullable|string',
            'youtube_link' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = ContactUs::all();
    }

    public function resetForm()
    {
        $this->selectedId = null;
        $this->title = '';
        $this->description = '';
        $this->linkedin = '';
        $this->github = '';
        $this->phone = '';
        $this->email = '';
        $this->facebook_link = '';
        $this->twitter_link = '';
        $this->instagram_link = '';
        $this->youtube_link = '';
        $this->image_path = null;
    }

    // Submit function for Add/Edit
    public function submit()
        {
             $this->validate();
     
             if ($this->selectedId) {
                 $contact = ContactUs::findOrFail($this->selectedId);
     
                 if ($this->image_path) {
                     if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
                         Storage::disk('public')->delete($this->existingImage);
                     }
     
                     $folder = 'contact_section';
                     $imageName = time() . '.' . $this->image_path->getClientOriginalExtension();
                     $file = $this->image_path->storeAs($folder, $imageName, 'public');
                     $contact->image_path = 'storage/' . $file;
                 }

                 $contact->title = $this->title;
                 $contact->description = $this->description;
                 $contact->linkedin = $this->linkedin;
                 $contact->github = $this->github;
                 $contact->phone = $this->phone;
                 $contact->email = $this->email;
                 $contact->facebook_link = $this->facebook_link;
                 $contact->twitter_link = $this->twitter_link;
                 $contact->instagram_link = $this->instagram_link;
                 $contact->youtube_link = $this->youtube_link;

                 $contact->save();
     
                 $this->resetForm();
                 $this->load();
 
                 session()->flash('message', 'Updated successfully!');
             } else {
 
               $this->validate([
                    'title' => 'required|string|max:255|unique:contact_us,title,' . $this->selectedId,
                    'description' => 'nullable|string',
                    'linkedin' => 'nullable|string',
                    'github' => 'nullable|string',
                    'phone' => 'nullable|string',
                    'email' => 'nullable|string',
                    'facebook_link' => 'nullable|string',
                    'twitter_link' => 'nullable|string',
                    'instagram_link' => 'nullable|string',
                    'youtube_link' => 'nullable|string',
                    'image_path' => 'required|image|max:2048',
               ]);

                 $folder = 'contact_section';
                 $imageName = time() . '.' . $this->image_path->getClientOriginalExtension();
                 $file = $this->image_path->storeAs($folder, $imageName, 'public');
     
                 $contact = new ContactUs();
                 $contact->title = $this->title;
                 $contact->description = $this->description;
                 $contact->linkedin = $this->linkedin;
                 $contact->github = $this->github;
                 $contact->phone = $this->phone;
                 $contact->email = $this->email;
                 $contact->facebook_link = $this->facebook_link;
                 $contact->twitter_link = $this->twitter_link;
                 $contact->instagram_link = $this->instagram_link;
                 $contact->youtube_link = $this->youtube_link;

                 $contact->image_path = 'storage/' . $file;
                 $contact->save();
     
                 $this->resetForm();
                 $this->load();
 
                 session()->flash('message', 'Saved successfully!');
             }
        }
      
    
    public function edit($id)
    {
        $contact = ContactUs::findOrFail($id);
        $this->selectedId = $contact->id;
        $this->title = $contact->title;
        $this->description = $contact->description;
        $this->linkedin = $contact->linkedin;
        $this->github = $contact->github;
        $this->phone = $contact->phone;
        $this->email = $contact->email;
        $this->facebook_link = $contact->facebook_link;
        $this->instagram_link = $contact->instagram_link;
        $this->twitter_link = $contact->twitter_link;
        $this->youtube_link = $contact->youtube_link;
        $this->existingImage = $contact->image_path;
    }

    public function delete($id)
    {
         $contact = ContactUs::findOrFail($id);
 
         if ($contact->image_path && Storage::disk('public')->exists($contact->image_path)) {
             Storage::disk('public')->delete($contact->image_path);
         }
 
         $contact->delete();
         $this->resetForm();
         $this->load();
         
         session()->flash('message', 'Deleted successfully!');
    }

    public function render()
    {
        return view('livewire.contact-manager');
    }
}
