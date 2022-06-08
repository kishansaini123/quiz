<?php

namespace App\Http\Livewire;

use App\Models\Inquiry;
use Livewire\Component;

class ContactFormComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $type;
    public $description;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'required|min:10|integer',
        'type' => 'required|string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function sendForm()
    {
        Inquiry::create([
            'name'  => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'inquiry_type'  => $this->type,
            'description'   => $this->description,
        ]);
        $this->reset(['name', 'email', 'phone', 'type', 'description']);
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'Contact Inquiry sent successfully.']);
    }
    
    public function render()
    {
        return view('livewire.contact-form-component');
    }
}
