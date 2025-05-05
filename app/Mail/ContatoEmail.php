<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class ContatoEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $dados;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

 

    public function build(){

        return $this-> from($this->dados->email, $this->dados->nome)
                    ->subject("Contato Do Site - Adquirência")
                    ->view('emailcontato');
    }



    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    // public function envelope() 
    // {
    //     return new Envelope(
    //          subject: 'Contato Email',
    //      );
    // }




    /**
     * Get the message content definition.
    //  *
    //  * @return \Illuminate\Mail\Mailables\Content
    //  */
    // public function content()
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
