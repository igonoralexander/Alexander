<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{

    public $name, $email, $phone, $subject, $content, $terms_agreement;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string',
        'subject' => 'required|string',
        'terms_agreement' => 'accepted',
        'content' => 'nullable|string',
    ];


    public function submit()
    {
        $this->validate();

        // try {
                // Send an email
                Mail::send('emails.contact', [
                    'name' => $this->name,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'subject' => $this->subject,
                    'content' => $this->content,
                ], function ($mail) {
                    $mail->to('contact@igsoftware.com.ng')
                        ->subject('New Message');
                });

                // Save the contact form data to the database
                Contact::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'subject' => $this->subject,
                    'content' => $this->content,
                ]);

                // Clear form fields
                $this->reset();

                session()->flash('message', 'Your message has been sent successfully.');

            // } catch (\Exception $e) {
            //     // Handle email delivery failure
            //     return back()->withErrors(['message' => 'Failed to send message. Please try again later.']);
            // }
    }

    public function delete($id)
    {
         $contact = Contact::findOrFail($id);
 
         $contact->delete();
         $this->resetForm();
         $this->load();
         
         session()->flash('message', 'Deleted successfully!');
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}