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
               <a onclick='ga("send", "event", "category", "action", "label");' data-home="abrir-conta-digital-PJ" title="Abra sua conta no Estbank" class="btn button-open-account-extra-white btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="https://estbank.zendesk.com/hc/pt-br/articles/4404548776603-Como-criar-uma-conta-EstBank" target="_blank"> Abra sua conta </a>
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

    <<div class="container-fluid cards py-3">
    <div class="container">
        <div class="py-2">
            <p class="tag-cards py-2">No EstBank você tem:</p>
        </div>

        <div class="owl-carousel owl-theme">
            <!-- Card TED -->
            <div class="item items item-01">
                <div class="title-card">
                    <div class="title-icon-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#a03234" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14h2V5h14v14h2V5c0-1.1-.9-2-2-2z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="title-text-card">
                        <span>TED</span>
                    </div>
                    <p class="text-card">Transfira com segurança e rapidez com o EstBank.</p>
                </div>
            </div>

            <!-- Card PIX -->
            <div class="item items item-01">
                <div class="title-card">
                    <div class="title-icon-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#a03234" viewBox="0 0 24 24">
                            <path d="M12 4l1.41 1.41L7.83 11H20v2H7.83l5.58 5.59L12 20l-8-8z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="title-text-card">
                        <span>PIX</span>
                    </div>
                    <p class="text-card">Receba e faça PIX com taxas acessíveis.</p>
                </div>
            </div>

            <!-- Card Empréstimo -->
            <div class="item items item-01">
                <div class="title-card">
                    <div class="title-icon-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#a03234" viewBox="0 0 24 24">
                            <path d="M12 7V3L8 7h3v4h2V7h3l-4-4zM4 13h16v2H4z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="title-text-card">
                        <span>Empréstimo</span>
                    </div>
                    <p class="text-card">Temos condições especiais para você.</p>
                </div>
            </div>

            <!-- Card Folha de Pagamento -->
            <div class="item items item-01">
                <div class="title-card">
                    <div class="title-icon-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#a03234" viewBox="0 0 24 24">
                            <path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zm0-8v2h14V9H7z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="title-text-card">
                        <span>Folha de Pagamento</span>
                    </div>
                    <p class="text-card">Facilite o pagamento dos seus funcionários.</p>
                </div>
            </div>

            <!-- Card Boletos -->
            <div class="item items item-01">
                <div class="title-card">
                    <div class="title-icon-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#a03234" viewBox="0 0 24 24">
                            <path d="M21 11H6.83l5.58-5.59L11 4l-8 8 8 8 1.41-1.41L6.83 13H21v-2z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="title-text-card">
                        <span>Boletos</span>
                    </div>
                    <p class="text-card">Boletos para suas cobranças pessoais e pagamentos de contas.</p>
                </div>
            </div>

            <!-- Card Cartão Físico -->
            <div class="item items item-01">
                <div class="title-card">
                    <div class="title-icon-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#a03234" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-2 .9-2 2v3h20V6c0-1.1-.9-2-2-2zm0 13H4v-5h16v5zm0-7H4v-2h16v2z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="title-text-card">
                        <span>Cartão Físico</span>
                    </div>
                    <p class="text-card">Peça já seu cartão físico EstBank com uso internacional.</p>
                </div>
            </div>

            <!-- Card Recargas -->
            <div class="item items item-01">
                <div class="title-card">
                    <div class="title-icon-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#a03234" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.41 4.42 3 7.5 3c2.54 0 4.87 1.61 5.5 4.09C13.63 4.61 15.96 3 18.5 3 21.58 3 24 5.41 24 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="title-text-card">
                        <span>Recargas</span>
                    </div>
                    <p class="text-card">Recarregue seu celular com facilidade e praticidade.</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1.7,
                        loop: true,
                        nav: false,
                        indicator: true,
                        rewind: true,
                        slideBy: true,
                        dots: true,
                        autoplayHoverPause: true,
                    },

                    600: {
                        items: 3.1,
                        loop: false,
                        indicator: true,
                        dots: true,
                        autoplayHoverPause: true,
                    },

                    700: {
                        items: 4,
                    },

                    1200: {
                        items: 6,
                        loop: false,
                        nav: false,
                        indicator: true,
                        rewind: true,
                        slideBy: true,
                        dots: true,
                    },
                },

                center: false,
            });
        });
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