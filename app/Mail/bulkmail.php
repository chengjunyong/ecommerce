<?php

namespace App\Mail;

use Illuminate\Support\Facades\Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class bulkmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      // need 1 global function to identify which template to send
      $content = Storage::get('test/test.html');

      return $this->markdown('email.bulkmail',compact("content"));

    }
}
