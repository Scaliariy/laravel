<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $order;

    /**
     * @param $name
     * @param Order $order
     */
    public function __construct($name, Order $order)
    {
        $this->name = $name;
        $this->order = $order;
        $this->locale = App::currentLocale();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $fullSum = $this->order->getFullSum();
        return $this->view('mail.order_created', [
            'name' => $this->name,
            'fullSum' => $fullSum,
            'order' => $this->order
        ]);
    }
}
