<?php

namespace App\Mail;

use App\Models\ConsultationRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConsultationRequestReceived extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public ConsultationRequest $consultationRequest
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Новая заявка с сайта ORLOV & PARTNERS',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.consultation-request',
        );
    }
}