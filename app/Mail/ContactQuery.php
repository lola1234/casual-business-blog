<?php

namespace App\Mail;

use App\Contact;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactQuery extends Mailable
{
    use Queueable, SerializesModels;

	
	protected $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($con)
    {
        $this->contact = $con;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.email.contactemail')
					->with([
						'name' => $this->contact->name,
						'details' => $this->contact->message,					
					]);
    }
}
