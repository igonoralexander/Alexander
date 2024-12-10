<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ChangePassword extends Component
{

    use WithFileUploads;
    
    public $selectedId = null;
    public $old_password, $new_password;
    public $data;

    protected $messages = [
        'old_password.required' => 'Please fill this field',
        'new_password.required' => 'Please fill this field',
    ];

    protected function rules()
    {
        return [
            'old_password' => 'required',
            'new_password' => 'required|min:8',
        ];
    }

    public function mount()
    {
        $this->load();
    }

    public function load()
    {
        $this->data = Admin::all();
    }

    public function resetForm()
    {
        $this->old_password = '';
        $this->new_password = '';
    }

    // Submit function for Add/Edit
    public function submit()
    {
        $this->validate();

        // Fetch the admin's current password from the database
        $admin = Admin::find(session('AdmLogId'));
    

        // Check if old password is correct
        if (!Hash::check($this->old_password, $admin->password)) {
            session()->flash('message', 'The current password is incorrect.');
            return;
        }

        // Check if new password is different from old password
        if ($this->old_password === $this->new_password) {
            session()->flash('error', 'The new password cannot be the same as the old password.');
            return;
        }

         // Update the password and save to the database
        $admin->password = Hash::make($this->new_password);
        $admin->save();
     
        $this->resetForm();
        $this->load();
        session()->flash('message', 'Saved successfully!');
    }

    public function delete($id)
    {
         $change_password = Admin::findOrFail($id);
 
         $change_password->delete();
         $this->resetForm();
         $this->load();
         
         session()->flash('message', 'Deleted successfully!');
    }

    public function render()
    {
        return view('livewire.change-password');
    }
}
