@extends ('menu')

@section('title', 'Conta Digital : EstBank')


@section('conteudo')

<section class="py-5" style="background: #BA2E31">
    <div class="container py-2 py-md-5">
       <div class="row d-flex align-items-center">

          <div class=" container col-12 col-md-6 col-lg-4 justify-content-center offset-lg-1 title-conta-digital-pf">
               <h3 style="opacity: 1;" class=" fs-24 lh-30 fs-lg-32 fs-xl-40 lh-lg-40 lh-xl-50 text-center text-md-left  text-lg-left  text-xl-left d-flex hero-text-title">Sua conta digital, feita do jeito que você precisa</h3>
             <p style="opacity: 1;" class="fs-18 lh-22 text-grayscale--400 mt-4 text-center text-md-left  text-lg-left  text-xl-left d-flex">Economize tempo com o aplicativo do EstBank e tenha tudo na palma da sua mão</p>
             <div style="opacity: 1; width:100%;" class="justify-content-center d-flex" >
               <a onclick='ga("send", "event", "category", "action", "label");' data-home="abrir-conta-digital-PJ" title="Abra sua conta no Estbank" class="btn button-open-account-extra-white btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="https://estbank.idez.com.br/app/signup" target="_blank"> Abra sua conta </a>
            </div>
          </div> 

          <div class=" container col-12 col-md-6 col-xl-5 order-first order-md-last order-lg-last order-xl-last ">
            <div class="d-flex" style="position: relative; overflow: hidden; max-width: 400px; max-height: 514px;">
               <div aria-hidden="true" style="width: 100%; padding-bottom: 113.158%;"></div>
               <picture>
                  <source srcset="/img/CONTAPJ/heroPjAccount01.png 138w,
                  /img/CONTAPJ/heroPjAccount02.png 275w,
                     /img/CONTAPJ/heroPjAccount03.png 550w" sizes="(max-width: 550px) 100vw, 550px">
                  
                  
                  
                     <img sizes="(max-width: 550px) 100vw, 550px" srcset="/img/CONTAPJ/heroPjAccount01.png 138w,
                     /img/CONTAPJ/heroPjAccount02.png 275w,
                     /img/CONTAPJ/heroPjAccount03.png" src=" /img/CONTAPJ/heroPjAccount02.png" alt="" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
               </picture>
               <noscript>
                  <picture>
                     <source srcset="/img/CONTAPJ/heroPjAccount01.png 138w,
                         /img/CONTAPJ/heroPjAccount02.png 275w,
                        /img/CONTAPJ/heroPjAccount03.png" sizes="(max-width: 550px) 100vw, 550px"/>
                     <img loading="lazy" sizes="(max-width: 550px) 100vw, 550px" srcset="/img/CONTAPJ/heroPjAccount01.png 138w,
                         /img/CONTAPJ/heroPjAccount02.png 275w,
                        /img/CONTAPJ/heroPjAccount03.png" src="/img/CONTAPJ/heroPjAccount03.png" alt="" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center"/>
                  </picture>
               </noscript>
            </div>
         </div>
       </div>
    </div>
 </section>



 {{-- Cards --}}

 
 <section class="py-4" style="background-color: #fafafa">
   <div class="container">
      <section class="py-3">
         <div class="container">


{{-- Inicio dos Cards --}}

 
<div class="container-fluid ">
   
   <div class="container">
      <div class="container mb-3">
         <p class="tag-cards-pf ">Conheça os benefícios: </p>
      </div>

 
      <!-- Card PIX -->
      <div class="owl-carousel owl-theme">
         <div class="item-pf items item-01">
            <div class="title-card">
               <div class="title-icon-card">
                  <picture>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0H24V24H0z"/><path d="M5 3v16h16v2H3V3h2zm15.293 3.293l1.414 1.414L16 13.414l-3-2.999-4.293 4.292-1.414-1.414L13 7.586l3 2.999 4.293-4.292z" fill="rgba(160,50,52,1)"/></svg>
               </div>
            </div>
            <div>
              <div class="title-text-card"> 
                  <span> Rendimento </span>
               </div>

               <p class="text-card-pf">No EstBank seu saldo pode render até <b class="vermelho"> 100%   do CDI automaticamente.</b></p> 

               </div>
         </div>
         <!-- Card TED -->
         <div class="item-pf items item-01">
            <div class="title-card">
               <div class="title-icon-card">
                  <picture>
                     <picture><img src="https://i.ibb.co/Br1G1Mx/Group-2.png" style="max-width: 30px; max-height: 30px;" alt=""></picture>
                  </div>
            </div>
            <div>
              <div class="title-text-card"> 
                  <span> PIX </span>
               </div>

               <p class="text-card-pf"> No EstBank você recebe e faz PIX com <b class="vermelho"> taxas que cabem no seu bolso. </b></p>
            </div>
         </div>
         <!-- Card Boleto -->
         <div class="item-pf items item-01">
            <div class="title-card">
               <div class="title-icon-card">
                  <picture>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M19 22H5a3 3 0 0 1-3-3V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12h4v4a3 3 0 0 1-3 3zm-1-5v2a1 1 0 0 0 2 0v-2h-2zm-2 3V4H4v15a1 1 0 0 0 1 1h11zM6 7h8v2H6V7zm0 4h8v2H6v-2zm0 4h5v2H6v-2z" fill="rgba(160,3,35,1)"/></svg>      
                           </div>
            </div>
            <div>
              <div class="title-text-card"> 
                  <span> Pagamentos </span>
               </div>

               <p class="text-card-pf"> <b class="vermelho"> Economize tempo </b> pagando boletos através do aplicativo do EstBank.
               </p>
            </div>
         </div>
          
         <!-- Card Emprestimo -->
         <div class="item-pf items item-01">
            <div class="title-card">
               <div class="title-icon-card">
                  <picture>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path d="M5 9a1 1 0 0 1 1 1 6.97 6.97 0 0 1 4.33 1.5h2.17c1.333 0 2.53.58 3.354 1.5H19a5 5 0 0 1 4.516 2.851C21.151 18.972 17.322 21 13 21c-2.79 0-5.15-.603-7.06-1.658A.998.998 0 0 1 5 20H2a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h3zm1.001 3L6 17.022l.045.032C7.84 18.314 10.178 19 13 19c3.004 0 5.799-1.156 7.835-3.13l.133-.133-.12-.1a2.994 2.994 0 0 0-1.643-.63L19 15h-2.111c.072.322.111.656.111 1v1H8v-2l6.79-.001-.034-.078a2.501 2.501 0 0 0-2.092-1.416L12.5 13.5H9.57A4.985 4.985 0 0 0 6.002 12zM4 11H3v7h1v-7zm14-6a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-7-5a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" fill="rgba(160,50,52,1)"/>
                     </svg>
                  </picture>
               </div>
            </div>
            <div>
               <div class="title-text-card "> 
                  <span  class="text-card-title"> Empréstimo </span>
               </div>
               <p class="text-card-pf"> 
                  Precisando de dinheiro?
                  O <b class="vermelho">EstBank tem condições 
                  especiais para você.</b>       
               </p>
            </div>
         </div>


         <!-- Card Doação -->
         <div class="item-pf items item-01">
            <div class="title-card">
               <div class="title-icon-card">
                  <picture>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM8 9h8v2H8V9zm0 4h8v2H8v-2z" fill="rgba(160,50,52,1)"/></svg>                  
                  </picture>
               </div>
            </div>
            <div>
               <div class="title-text-card "> 
                  <span  class="text-card-title"> Folha de Pagamento </span>
               </div>
               <p class="text-card-pf"> 
                 <b class="vermelho">Facilite o pagamento dos seus funcionários </b>  com o módulo folha de pagamento. </p>
            </div>
         </div>


      </div>
   </div>
</div>

<script>
   $(document).ready(function(){
       $(".owl-carousel").owlCarousel({
   
           loop:true,
           dots:false,
           responsive:{
               0 : {
                    items : 1.2,
                    loop:true,
                    nav:false,
                    indicator:true,
                    rewind: true,
                    slideBy:true,
                    dots:true,                 
                    autoplayHoverPause:true,
               },
   
               600 : {
                   items : 3,
                   loop:false,
                   indicator:true,
                   dots:false,
                   autoplayHoverPause:true,
               },

               700: 
               {
                  items: 3.1,
                  loop:true,
                   indicator:true,
                   dots:false,
                   nav:true,


               },
   
               1200 : {
                    items : 5.1,
                    loop:false,
                    nav:true,
                    indicator:true,
                    rewind: true,
                    slideBy:true,
                    dots:false,
                    autoplay:true,
                    autoplayHoverPause:true,
                },           
               
               
           },
   
           center:false,
         
        
   
   
       })
   })
</script>

{{-- FIM DOS CARDS --}}
         
            </div>
            </div>
         </div>
      </section>
   </div>

 </section>




 <section class="py-5">
   
   <div class="container">
      <section class="py-3">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-md-6 offset-lg-1 order-md-last">
                  <div class="mb-4"  style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                     <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>
                     <img aria-hidden="true" alt="" style="position: absolute; border-radius:15px; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                     <picture>
                        <source srcset="/img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp 160w,
                            /img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp 320w,
                            /img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp 640w" sizes="(max-width: 500px) 100vw, 500px">
                        <img sizes="(max-width: 500px) 100vw, 500px" srcset="/img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp 160w,
                            /img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp 320w,
                            /img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp 640w" src="/img/EMPRESTIMO/FGTSMan" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Dois homens em pé olhando para tela de um celular">
                    </picture>
                    <noscript>
                        <picture>
                            <source srcset="/img/EMPRESTIMO/FGTSMan 160w,
                                /img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp 320w,
                                /img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp 640w" sizes="(max-width: 500px) 100vw, 500px" />
                            <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="/img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp 160w,
                                /img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp 320w,
                                /img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp 640w" src="/img/CONTAPJ/homens-conversando-sobre-abrir-a-conta.webp" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px" alt="Dois homens em pé olhando para tela de um celular"/>
                        </picture>
                    </noscript>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-5">
                <h2 style="opacity: 1;" class=" title-abra-sua-conta fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50"><span class="d-block d-md-inline">Abra sua conta PJ e garanta a praticidade no seu dia a dia. </span></h2>
                  <p  class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4"> O EstBank tem aplicações exclusivas para conta PJ, abra sua conta e economize tempo nos processos do dia a dia. </p>
                  <div style="opacity: 1;"><a  onclick='ga("send", "event", "category", "action", "label");' data-home="abrir-conta-digital-PJ" title="Abra sua conta no Estbank"  class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="https://estbank.idez.com.br/app/signup" target="_blank"> Abra sua conta </a></div>
               </div>

               </div>
            </div>
         </div>
      </section>
   </div>
 </section> 





{{-- Empréstimo para funcionários --}}




<section class="py-5">
   
   <div class="container">
      <section class="py-3">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-md-6 offset-lg-1 order-md-last">
                  <div class="mb-4"  style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                     <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>
                     <img aria-hidden="true" alt="" style="position: absolute; border-radius:15px; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                     <picture>
                        <source srcset="/img/CONTAPJ/funcionarios-emprestimo.webp 160w,
                            /img/CONTAPJ/funcionarios-emprestimo.webp 320w,
                            /img/CONTAPJ/funcionarios-emprestimo.webp 640w" sizes="(max-width: 500px) 100vw, 500px">
                        <img sizes="(max-width: 500px) 100vw, 500px" srcset="/img/CONTAPJ/funcionarios-emprestimo.webp 160w,
                            /img/CONTAPJ/funcionarios-emprestimo.webp 320w,
                            /img/CONTAPJ/funcionarios-emprestimo.webp 640w" src="/img/EMPRESTIMO/FGTSMan" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Quatro pessoas olhando para tela de um computador">
                    </picture>
                    <noscript>
                        <picture>
                            <source srcset="/img/EMPRESTIMO/FGTSMan 160w,
                                /img/CONTAPJ/funcionarios-emprestimo.webp 320w,
                                /img/CONTAPJ/funcionarios-emprestimo.webp 640w" sizes="(max-width: 500px) 100vw, 500px" />
                            <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="/img/CONTAPJ/funcionarios-emprestimo.webp 160w,
                                /img/CONTAPJ/funcionarios-emprestimo.webp 320w,
                                /img/CONTAPJ/funcionarios-emprestimo.webp 640w" src="/img/CONTAPJ/funcionarios-emprestimo.webp" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px" alt="Quatro pessoas olhando para tela de um computador"/>
                        </picture>
                    </noscript>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-5">
                <h2 style="opacity: 1;" class=" title-abra-sua-conta fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50"><span class="d-block d-md-inline"> Empréstimo consignado para colaboradores. </span></h2>
                  <p  class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4"> Torne-se uma empresa parceira e ofereça empréstimo consignado para seus funcionários. </p>
                  <div style="opacity: 1;"><a onclick='ga("send", "event", "category", "action", "label");' data-home="ser-parceiro" title="Quero ser um empresa parceira" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" id="mostrarModal" style="color:#FFF"> Quero ser parceiro </a></div>
               </div>

               </div>
            </div>
         </div>
      </section>
   </div>

    

      <!-- Modal -->

      <div class="modal" tabindex="-1" role="dialog" id="showModal">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title">Torne-se nosso parceiro! </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
               <p>Entre em contato através do CHAT ou mande um e-mail para: <b>operadores@estbank.com.br</b></p>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
           </div>
         </div>
       </div>     

      <script> 
         const btn = document.querySelector('#mostrarModal');

         btn.addEventListener('click', function(e){
            const el = e.target;
            const modal = document.querySelector('#showModal');

            
            $(modal).modal('show');
           

         })
      
      </script> 

 </section>

 

@endsection