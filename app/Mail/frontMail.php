<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class frontMail extends Mailable
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
      if($this->data->type == "receipt")
      {
        $transaction = $this->data->transaction;
        $user = $this->data->user;
        $transaction_detail = $this->data->transaction_detail;

        $this->from(env('MAIL_USERNAME'), 'HomeU')->subject($this->data->subject)->view('front.order_receipt')->with(['user'=> $user, 'transaction' => $transaction, 'transaction_detail' => $transaction_detail]);
      }
      else
      {
        $template = 'front.mail.default';
        $this->from(env('MAIL_USERNAME'), 'HomeU')->subject($this->data->subject)->view($template)->with('data', $this->data);
      }
    }
}
