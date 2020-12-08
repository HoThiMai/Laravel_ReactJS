<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailCheckout extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $products;
    public $name_cus;
    public $total_price;
    public function __construct($products,$name_cus,$total_price)
    {
        //
        $this->products = $products;
        $this->name_cus = $name_cus;
        $this->total_price = $total_price;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Check out successfully")->view('page.mailCheckout');
    }
}
