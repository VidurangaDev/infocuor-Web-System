<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class BudgetReportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $filePath;

    /**
     * Create a new message instance.
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Budget Report Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: ('emails.budget-report'),
        );
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


    public function build()
    {
        // Check if the file exists before attaching
    if (Storage::exists($this->filePath)) {
        $fullPath = Storage::path($this->filePath); // Get the full path of the file

        return $this->subject('Your Budget Report')
                    ->view('emails.budget-report')
                    ->attach($fullPath);
    } else {
        // Handle the case where the file does not exist
        \Log::error('File not found: ' . $this->filePath); // Log the error for debugging
        return $this->subject('Budget Report Error')
                    ->view('emails.budget-error'); // You can create an error view if necessary
    }
    }
}
