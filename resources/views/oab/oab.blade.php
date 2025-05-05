@extends('menu')

@section ('title', 'Parceiro EstBank: OAB')

@section('conteudo')


<section class="section-one oab-hero">

    <div class="container py-1 py-md-5">
       <div class="row d-flex align-items-center">
          <div class=" container-fluid col-12 col-md-6 col-lg-5 justify-content-center offset-lg-1 title-conta-digital-pf">
             <h2 class="text-light text-center text-md-left  text-lg-left text-xl-left">Parceria EstBank e OAB</h2>
             <p class="text-light text-center text-md-left  text-lg-left  text-xl-left">A advocacia passa a contar com diversas facilidades para a emissão de boletos no parcelamento de honorários advocatícios e custas judiciais aos seus clientes.</p>
        {{-- <div style="opacity: 1; width:100%;" class="justify-content-center justify-content-lg-start d-flex" >
               <div style="opacity: 1; min-width: 100%;"><a onclick='ga("send", "event", "category", "action", "label");' data-home="simular-operacao-cambio" title="Simular operação de câmbio"  class="btn button-open-account-extra-white btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center"  href="https://oabce.org.br/" target="_blank"> Conheça nosso parceiro </a></div>
        </div> --}}

        <div class="py-2"><img src="/img/OAB/logoOABEs.svg" alt="logo estbank e oab" width="400px"></div>
          </div>
       </div>
    </div>

 </section>



{{-- Primeira section de informações --}}
 <section class="section-one py-5">
  <div class="container">
    <div class="row align-items-center">
       <div class="col-12 col-md-6 offset-lg-1 order-md-last">
                     {{-- Rotulo da section para o celular --}}
      {{-- <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-3 fw-600 tag-section span-geral mb-2 order-sm-first d-sm-flex d-md-none d-lg-none d-xl-none order-first"> Vantagens </p> --}}

          <div class="mb-4"  style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px; min-height: 600px;  display:flex; justify-content:center;">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn video-btn position-absolute" data-toggle="modal" data-src="https://www.youtube.com/embed/-KH2gZeTwuQ" data-target="#myModal" style="z-index: 1000; width:100%; height: 100%; background-color: transparent; display: flex; flex-direction:column; justify-content: center; align-items:center">
                    <h4 style="color:white">Clique aqui e confira</h4>
                    <div style="display: flex; justify-content: center; align-items: center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="" style="width: 34px; height: 34px; color:white;">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm14.024-.983a1.125 1.125 0 010 1.966l-5.603 3.113A1.125 1.125 0 019 15.113V8.887c0-.857.921-1.4 1.671-.983l5.603 3.113z" clip-rule="evenodd" />
                          </svg>
                          <span style="color:white">Assista o video</span>
                    </div>
                </button>
             <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>


             <img aria-hidden="true" alt="" style="position: absolute; border-radius:15px; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;" alt="Homem sentado segurando um celular e sorrindo">
             <picture>
               <source srcset="/img/OAB/mulherSegurandoCelular.webp 160w,
                   /img/OAB/mulherSegurandoCelular.webp 320w,
                   /img/OAB/mulherSegurandoCelular.webp 640w" sizes="(max-width: 500px) 100vw, 500px">
               <img sizes="(max-width: 500px) 100vw, 500px" srcset="/img/OAB/mulherSegurandoCelular.webp 160w,
                   /img/OAB/mulherSegurandoCelular.webp 320w,
                   /img/OAB/mulherSegurandoCelular.webp 640w" src="/img/EMPRESTIMO/FGTSMan" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Homem sentado com uma mulher de frente para um computador">
           </picture>
           <noscript>
               <picture>
                   <source srcset="/img/EMPRESTIMO/FGTSMan 160w,
                       /img/OAB/mulherSegurandoCelular.webp 320w,
                       /img/OAB/mulherSegurandoCelular.webp 640w" sizes="(max-width: 500px) 100vw, 500px" />
                   <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="/img/OAB/mulherSegurandoCelular.webp 160w,
                       /img/OAB/mulherSegurandoCelular.webp 320w,
                       /img/OAB/mulherSegurandoCelular.webp 640w" src="/img/OAB/mulherSegurandoCelular.webp" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px" alt="Homem sentado com uma mulher de frente para um computador" alt="Homem sentado segurando um celular e sorrindo"/>
               </picture>
           </noscript>
          </div>
       </div>


       <div class="col-12 col-md-6 col-lg-5">
           {{-- <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-2 fw-600 tag-section span-geral mb-2 order-sm-first d-none d-md-flex"> Vantagens </p> --}}
           <h2 style="opacity: 1;" class="fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50 mb-4">
        <h2 style="opacity: 1;" class=" title-abra-sua-conta fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50">
            <span class="d-block d-md-inline">Vantagens</span></h2>
          <p  class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">As soluções financeiras apresentam opções flexíveis, com o pagamento no débito ou crédito à vista, ou com parcelamento em até 21 vezes e com até 4 cartões diferentes, inclusive de titularidade. <b>Assista ao vídeo e entenda como funciona:</b>
        </p>
          <div style="opacity: 1;"><a onclick='ga("send", "event", "category", "action", "label");' data-home="simular-operacao-OAB" title="Simular operação de câmbio"  class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center"  href="https://gwestbank.mobbuyapp.com/boleto" target="_blank"> Simular operação </a></div>
           </div>
       </div>
    </div>
 </div>



  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">


        <div class="modal-body">

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
            </div>

        </div>
      </div>
    </div>
  </div>

 </section>

{{-- Section de segurança --}}

<section class="mb-md-5">
    <div class="container">
        <section class="section-apresentation-content py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="style__ImgSize-sc-844pq-1 dWxXah col-12 col-md-6 offset-lg-1 order-md-last ">
                        {{-- Rotulo da section para o celular --}}
                        <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-3 fw-600 tag-section span-geral mb-2 order-sm-first d-sm-flex d-md-none d-lg-none d-xl-none order-first">
                            Segurança
                        </p>

                        <div class="mb-4" style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                            <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>

                            <picture>
                                <source srcset="/img/OAB/pagamentoSeguro.jpg 160w,
                                    /img/OAB/pagamentoSeguro.jpg 320w,
                                    /img/OAB/pagamentoSeguro.jpg 640w" sizes="(max-width: 500px) 100vw, 500px">
                                <img sizes="(max-width: 500px) 100vw, 500px" srcset="/img/OAB/pagamentoSeguro.jpg 160w,
                                    /img/OAB/pagamentoSeguro.jpg 320w,
                                    /img/OAB/pagamentoSeguro.jpg 640w" src="/img/HOME/mulher-segurando-pos" webpading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Homem segurando uma máquina de cartão">
                            </picture>
                            <noscript>
                                <picture>
                                    <source srcset="/img/HOME/mulher-segurando-pos webpw,
                                        /img/OAB/pagamentoSeguro.jpg 320w,
                                        /img/OAB/pagamentoSeguro.jpg 640w" sizes="(max-width: 500px) 100vw, 500px" />
                                    <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="/img/OAB/pagamentoSeguro.jpg 160w,
                                        /img/OAB/pagamentoSeguro.jpg 320w,
                                        /img/OAB/pagamentoSeguro.jpg 640w" src="/img/OAB/pagamentoSeguro.jpg" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px" alt="Homem segurando uma máquina de cartão" />
                                </picture>
                            </noscript>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 mb-md-5">
                        <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-2 fw-600 tag-section span-geral mb-2 order-sm-first d-none d-md-flex">
                            Segurança</p>
                        <h2 style="opacity: 1;" class="fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50"><span class="d-block d-md-inline  title-products">Operações seguras</span></h2>
                        <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">O cliente sai com o boleto liquidado e o comprovante de pagamento, no ato da operação.</p>
                        <div style="opacity: 1;"><a onclick='ga("send", "event", "category", "action", "label");' data-home="simular-operacao-OAB" title="Simular operação de câmbio"  class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center"  href="https://gwestbank.mobbuyapp.com/boleto" target="_blank"> Simular operação </a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>







<section class="mb-md-5">
    <div class="container">
        <section class="section-apresentation-content py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="style__ImgSize-sc-844pq-1 dWxXah col-12 col-md-6 offset-lg-1 order-md-last ">
                        {{-- Rotulo da section para o celular --}}
                        <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-3 fw-600 tag-section span-geral mb-2 order-sm-first d-sm-flex d-md-none d-lg-none d-xl-none order-first">
                            Facilidade
                        </p>

                        <div class="mb-4" style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                            <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>

                            <picture>
                                <source srcset="/img/OAB/repassePagamento.jpg 160w,
                                    /img/OAB/repassePagamento.jpg 320w,
                                    /img/OAB/repassePagamento.jpg 640w" sizes="(max-width: 500px) 100vw, 500px">
                                <img sizes="(max-width: 500px) 100vw, 500px" srcset="/img/OAB/repassePagamento.jpg 160w,
                                    /img/OAB/repassePagamento.jpg 320w,
                                    /img/OAB/repassePagamento.jpg 640w" src="/img/HOME/mulher-segurando-pos" webpading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Homem segurando uma máquina de cartão">
                            </picture>
                            <noscript>
                                <picture>
                                    <source srcset="/img/HOME/mulher-segurando-pos webpw,
                                        /img/OAB/repassePagamento.jpg 320w,
                                        /img/OAB/repassePagamento.jpg 640w" sizes="(max-width: 500px) 100vw, 500px" />
                                    <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="/img/OAB/repassePagamento.jpg 160w,
                                        /img/OAB/repassePagamento.jpg 320w,
                                        /img/OAB/repassePagamento.jpg 640w" src="/img/OAB/repassePagamento.jpg" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px" alt="Homem segurando uma máquina de cartão" />
                                </picture>
                            </noscript>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 mb-md-5">
                        <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-2 fw-600 tag-section span-geral mb-2 order-sm-first d-none d-md-flex">
                            Facilidade</p>
                        <h2 style="opacity: 1;" class="fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50"><span class="d-block d-md-inline  title-products">Repasse de Valores</span></h2>
                        <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">Os repasses ao cartório serão efetuados em D+1 até as 09:30hrs da manhã</p>
                        <div style="opacity: 1;"><a onclick='ga("send", "event", "category", "action", "label");' data-home="simular-operacao-OAB" title="Simular operação de câmbio"  class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center"  href="https://gwestbank.mobbuyapp.com/boleto" target="_blank"> Simular operação </a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>





 <script>
    $(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);



// when the modal is opened autoplay it
$('#myModal').on('shown.bs.modal', function (e) {

// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");

})



// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc);
})




// document ready
});

 </script>


  @endsection