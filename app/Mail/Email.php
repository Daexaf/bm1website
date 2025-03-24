<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $emailMessage;
    /**
     * Create a new message instance.
     * @param $name
     * @param $email
     * @param $subject
     * @param $message
     */
    public function __construct($name, $email, $subject, $emailMessage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->emailMessage = $emailMessage;
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Email',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'emails.template_email',
    //     );
    // }

    public function build()
    {
        return $this->from($this->email)
                    ->subject($this->subject)
                    ->view('emails.contact')
                    ->with([
                        'name' => $this->name,
                        'subject' => $this->subject,
                        'email' => $this->email,
                        'message' => is_string($this->emailMessage) ? $this->emailMessage : (string) $this->emailMessage,
                    ]);
    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
