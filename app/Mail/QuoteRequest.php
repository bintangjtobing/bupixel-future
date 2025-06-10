<?php
// app/Mail/QuoteRequest.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $quoteData;

    public function __construct($quoteData)
    {
        $this->quoteData = $quoteData;
    }

    public function build()
    {
        return $this->subject('New Quote Request - BU Pixel Future')
                    ->view('emails.quote-request')
                    ->with('data', $this->quoteData);
    }
}
