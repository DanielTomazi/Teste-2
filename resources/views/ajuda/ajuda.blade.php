@extends('menu')

@section ('title' , 'Estbank - AJUDA')


@section ('conteudo')


<section class="py-5">
    <div class="container-fluid py-5">
        <div class="container justify-content-center d-flex mb-3 mt-5">
            <h2>Como podemos te ajudar?</h2>

        </div>


        <div class="container py-5 cx-contents-list">

            <div class="cards-cx">
                <ul>
                    <li>
                        <a  onclick='ga("send", "event", "category", "action", "label");' href="https://estbank.zendesk.com/hc/pt-br" target="_blank"  class="cx-card-title">
                            <div class="">
                                <div class=" cx-title"><span>Leia nossos artigos</span> <span>                                       
                                </span>
                                <div class="icon-help">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" fill="rgba(160,50,52,1)"/></svg>                                    </div>
                                </div>
                            </div>                        
                            </div>
                         </a>
                  </li>
                </ul>                
            </div>


            
            
   
            <div class="accordion" id="accordionExample">
                <div class="card-email">
                  <div class="card-header" id="headingOne">
           
                        <a  onclick='ga("send", "event", "category", "action", "label");' href="#"  class="cx-card-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <div class="icon-help">
                                <div class=" cx-title"><span>Entre em contato</span> <span>                                       
                                </span>
                                <div class="">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" fill="rgba(160,50,52,1)"/></svg>                                    </div>
                                </div>
                            </div>                        
                            </div>
                         </a>



                   </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">

                        <div class="email mb-2">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z" fill="rgba(160,50,52,1)"/></svg> 
                            <p>E-mail: operadores@estbank.com.br</p>
                        </div>

                        <div class="telefone">
                           
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path fill="none" d="M0 0h24v24H0z"/><path d="M9.366 10.682a10.556 10.556 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296 11.422 11.422 0 0 0 4.583 1.364 1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995c-.53.055-1.064.082-1.602.082C9.94 21 3 14.06 3 5.5c0-.538.027-1.072.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.422 11.422 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294l-1.238.884zm-2.522-.657l1.9-1.357A13.41 13.41 0 0 1 7.647 5H5.01c-.006.166-.009.333-.009.5C5 12.956 11.044 19 18.5 19c.167 0 .334-.003.5-.01v-2.637a13.41 13.41 0 0 1-3.668-1.097l-1.357 1.9a12.442 12.442 0 0 1-1.588-.75l-.058-.033a12.556 12.556 0 0 1-4.702-4.702l-.033-.058a12.442 12.442 0 0 1-.75-1.588z" fill="rgba(160,50,52,1)"/></svg>
                            <p>Central de Atendimento | Todas as localidades:  <a onclick='ga("send", "event", "category", "action", "label");' href="tel:08009427594" style="text-decoration: none; color:black;"><strong>0800 942 7594</strong></a></p>
                        </div>
                    </div>
                  </div>
                </div>


                
                
                <div class="card-email" id="chat">
                  <div class="card-header" id="headingTwo">
 
                    <a onclick='ga("send", "event", "category", "action", "label");' href="#"  class="cx-card-title " data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo>
                        <div class="">
                            <div class=" cx-title"><span> Mande uma mensagem no CHAT </span> <span>                                       
                            </span>
                            <div class="">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" fill="rgba(160,50,52,1)"/></svg>                                    </div>
                                </div>
                            </div>
                        </div>                        
                        </div>
                     </a>

                </div>
            </div>

            <script>
                document.querySelector('#chat').addEventListener('click', () => zE('webWidget', 'open'));
            </script>

        
 
                 
    
</section>



@endsection