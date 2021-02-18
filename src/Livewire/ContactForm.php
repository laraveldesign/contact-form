<?php
namespace Laraveldesign\ContactForm\Livewire;

use Illuminate\Support\Facades\Mail;
use Laraveldesign\ContactForm\Models\Contact;
use Livewire\Component;

class ContactForm extends Component {

    protected $rules = [
        'name'=>'required',
        'email'=>'email|required',
        'message'=>'required'
    ];

    public $name;
    public $email;
    public $message;

    public $thanks = false;

    public function send() {
        $this->validate();
        $contact = Contact::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'message'=>$this->message
        ]);

        Mail::to(config('contact-form.from_email'))->send(new \Laraveldesign\ContactForm\Mail\Contact($contact));

        $this->thanks = true;
    }

    public function render() {
        return view('contact-form::livewire.contact-form');
    }
}
