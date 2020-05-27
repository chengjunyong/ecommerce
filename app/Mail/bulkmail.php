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
    public function __construct($path)
    {
        $this->path = $path->fullpath;
        $this->subject = $path->title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $content = Storage::get($this->path);

      return $this->from('promotion@homeu.com')
                  ->subject($this->subject)
                  ->markdown('email.bulkmail',compact("content"));
    }
}
