<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;
use App\Models\form;
use App\Http\Requests\StoreUpdateUserFormRequest;



class ContatoController extends Controller
{
    
    public function enviaContato(StoreUpdateUserFormRequest $request)
    {
        try {
            $contato = new form;
            $contato->nome = $request->nome;
            $contato->telefone = $request->telefone;
            $contato->email = $request->email;
            $contato->faturamento = $request->faturamento;
    
            $contato->save();
    
            $this->sendEmail($contato);
    
            session()->flash("msg", "Sua mensagem foi enviada com sucesso, logo entraremos em contato!");
    
            return redirect ('/adquira');
            
        } catch (\Exception $e) {
            session()->flash("erro", "Desculpe, mas não foi possível registrar sua solicitação. Por favor, tente novamente mais tarde ou entre em contato pelo CHAT.");
    
            return redirect ('/adquira');
        }
    }
    


//Enviando email

public function sendEmail($contato)
{
    

    Mail::to('fabianaivo684@gmail.com')->send(new ContatoEmail($contato));


}

}
