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
    public $small_title, $big_title, $description;
    public $image_path, $location_name, $address, $phone, $email;
    public $facebook_link, $twitter_link, $instagram_link, $youtube_link;
    public $data, $existingImage;

    protected $messages = [
        'big_title.required' => 'Contact title required',
        'image_path.required' => 'Upload image',
    ];

    protected function rules()
    {
        return [
            'big_title' => 'nullable|string|max:255|unique:contact_us,big_title,' . $this->selectedId,
            'small_title' => 'nullable|string',
            'description' => 'nullable|string',
            'location_name' => 'nullable|string',
            'address' => 'nullable|string',
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
        $this->big_title = '';
        $this->small_title = '';
        $this->description = '';
        $this->address = '';
        $this->location_name = '';
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

                 $contact->small_title = $this->small_title;
                 $contact->big_title = $this->big_title;
                 $contact->description = $this->description;
                 $contact->address = $this->address;
                 $contact->location_name = $this->location_name;
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
                    'big_title' => 'required|string|max:255|unique:contact_us,big_title,' . $this->selectedId,
                    'small_title' => 'nullable|string',
                    'description' => 'nullable|string',
                    'address' => 'nullable|string',
                    'location_name' => 'nullable|string',
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
                 $contact->small_title = $this->small_title;
                 $contact->big_title = $this->big_title;
                 $contact->description = $this->description;
                 $contact->address = $this->address;
                 $contact->location_name = $this->location_name;
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
        $this->small_title = $contact->small_title;
        $this->big_title = $contact->big_title;
        $this->description = $contact->description;
        $this->address = $contact->address;
        $this->location_name = $contact->location_name;
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
