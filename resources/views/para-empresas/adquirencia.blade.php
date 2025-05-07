@extends('menu')

@section('title', 'Adquirência : EstBank')

@section ('conteudo')

 
<section class="section-one adquirencia-hero d-flex justify-content-center">
    <div class="container py-2 justify-content-center d-flex">
       <div class="row align-items-center">
          <div class=" container col-12 col-md-6 col-lg-5 justify-content-center offset-lg-1 title-conta-digital-pf">
               <h3 style="opacity: 1;" class=" fs-24 lh-30 fs-lg-32 fs-xl-40 lh-lg-40 lh-xl-50 text-center text-md-left hero-text-title  text-lg-left  text-xl-left mt-4">Transforme suas vendas</h3>
             <p style="opacity: 1;" class="fs-18 lh-22 text-grayscale--400 mt-4 text-center text-md-left  text-lg-left  text-xl-left d-flex"> Adquirência é a solução ideal para PF e PJ que buscam aumentar suas vendas e melhorar a experiência de compra de seus clientes.</p>
             <div style="opacity: 1; width:100%;" class="justify-content-center justify-content-md-start d-flex" >
               <a onclick='ga("send", "event", "category", "action", "label");' data-home="solicitar-avaliacao-de-maquininha" title="Solicitar maquininha" class="btn button-open-account-extra-white btn--lg rounded-4 fs-14 fw-600 text-none mt-4 mb-4 text-md-center" href="/adquira"> Solicite uma avaliação </a>
            </div>
          </div> 

     
       </div>
    </div>
 </section>



 <section class="py-5" style="background-color: #fafafa;">
   <div class="container">
      <section class="py-3">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-md-6 offset-lg-1 order-md-last">
                  <div class="mb-4"  style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                     <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>
                     <img aria-hidden="true" alt="mulher segurando uma máquininha de cartão" style="position: absolute; border-radius:15px; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                     <picture>
                        <source srcset="/img/ADQUIRENCIA/abra-sua-conta-homem.webp 160w,
                            /img/ADQUIRENCIA/abra-sua-conta-homem.webp  320w,
                            /img/ADQUIRENCIA/abra-sua-conta-homem.webp  640w" sizes="(max-width: 500px) 100vw, 500px">
                        <img sizes="(max-width: 500px) 100vw, 500px" srcset="/img/ADQUIRENCIA/abra-sua-conta-homem.webp  160w,
                            /img/ADQUIRENCIA/abra-sua-conta-homem.webp  320w,
                            /img/ADQUIRENCIA/abra-sua-conta-homem.webp  640w" src="/img/EMPRESTIMO/FGTSMan" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Homem sentado com uma mulher de frente para um computador">
                    </picture>
                    <noscript>
                        <picture>
                            <source srcset="/img/EMPRESTIMO/FGTSMan 160w,
                                /img/ADQUIRENCIA/abra-sua-conta-homem.webp  320w,
                                /img/ADQUIRENCIA/abra-sua-conta-homem.webp  640w" sizes="(max-width: 500px) 100vw, 500px" />
                            <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="/img/ADQUIRENCIA/abra-sua-conta-homem.webp  160w,
                                /img/ADQUIRENCIA/abra-sua-conta-homem.webp  320w,
                                /img/ADQUIRENCIA/abra-sua-conta-homem.webp  640w" src="/img/ADQUIRENCIA/abra-sua-conta-homem.webp " style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px" alt="Homem sentado com uma mulher de frente para um computador"/>
                        </picture>
                    </noscript>
                  </div>

               </div>
               <div class="col-12 col-md-6 col-lg-5">
                <h2 style="opacity: 1;" class=" title-abra-sua-conta fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50"><span class="d-block d-md-inline">Abra sua conta PJ e garanta a praticidade no seu dia a dia. </span></h2>
                  <p  class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4"> O EstBank tem aplicações exclusivas para conta PJ, abra sua conta e economize tempo nos processos do dia a dia. </p>
                  <div style="opacity: 1;"><a onclick='ga("send", "event", "category", "action", "label");' data-home="abrir-conta-estbank" title="Abra sua conta no Estbank" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="https://estbank.zendesk.com/hc/pt-br/articles/4404548776603-Como-criar-uma-conta-EstBank" target="_blank"> Abra sua conta </a></div>
               </div>
               </div>
            </div>
         </div>
      </section>
   </div>
 </section>
 


{{-- Receba a POS em 1 dia --}}

<section class="py-5 ">
   <div class="container-fluid">
      <section>
         <div class="container">
            <div class="correspondente-box">
               <div class="correspondente-content-box">

                  <div class="correspondente-texts"> 
                     <div class="fundo-branco">
                  <span class="correspondente-span">MAQUININHA DE CARTÃO</span>
                 
                    <div class="content-box-body py-5">
                         <div class="content-box-title">
                           <h2 class="correspondente-h2">Receba suas vendas em 1 dia útil.</h2>
                        </div>
                        <div class="content-box-text mb-3">
                           <p class="correspondente-p">Aceite débito e crédito  na maquininha, parcele em até 21x, antecipe suas vendas e receba em um dia útil.</p>
                   </div>  
                   <div style="opacity: 1;"><a onclick='ga("send", "event", "category", "action", "label");' data-home="solicitar-maquininha" title="Solicitar maquininha" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-2 text-md-center" href="/adquira"> Solicitar maquininha </a></div>
               </div>
            </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</section>





 {{-- Modelos de POS --}}


<section class="py-5">
   <div class="container py-4">
      <h3 style="text-align: center; font-family:'Inter',sans-serif;">Nossas máquinas</h3>
   </div>

   <div class="container justify-content-center d-flex cards-box-content py-3">

      <div class="card-box  mb-3 mr-md-4 mr-lg-4 mr-xl-4">
         <img src="/img/ADQUIRENCIA/S920.webp" alt="Imagem do modelo de S920 de maquininha" style="max-width: 300px">
         <div class="cards-texts">
            <h2>S920</h2>
           <ul class="list-unstyled">
            <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="none" d="M0 0h24v24H0z"/><path d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM8 9h8v2H8V9zm0 4h8v2H8v-2z" fill="rgba(160,50,52,1)"/></svg>Comprovante impresso</p></li>
            <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="none" d="M0 0h24v24H0z"/><path d="M.69 6.997A17.925 17.925 0 0 1 12 3c4.285 0 8.22 1.497 11.31 3.997l-1.256 1.556A15.933 15.933 0 0 0 12 5C8.191 5 4.694 6.33 1.946 8.553L.69 6.997zm3.141 3.89A12.946 12.946 0 0 1 12 8c3.094 0 5.936 1.081 8.169 2.886l-1.257 1.556A10.954 10.954 0 0 0 12 10c-2.618 0-5.023.915-6.912 2.442l-1.257-1.556zm3.142 3.89A7.967 7.967 0 0 1 12 13c1.904 0 3.653.665 5.027 1.776l-1.257 1.556A5.975 5.975 0 0 0 12 15c-1.428 0-2.74.499-3.77 1.332l-1.257-1.556zm3.142 3.89A2.987 2.987 0 0 1 12 18c.714 0 1.37.25 1.885.666L12 21l-1.885-2.334z" fill="rgba(160,50,52,1)"/></svg>Com conectividade Wi-fi</p></li>
            <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 12a1 1 0 0 1 1 1v9h-2v-8H8v8H6v-9a1 1 0 0 1 1-1h10zm-5 4v2h-2v-2h2zm0-10a6 6 0 0 1 5.368 3.316l-1.79.895a4 4 0 0 0-7.157 0l-1.789-.895A6 6 0 0 1 12 6zm0-4a10 10 0 0 1 8.946 5.527l-1.789.895A8 8 0 0 0 12 4a8 8 0 0 0-7.157 4.422l-1.79-.895A10 10 0 0 1 12 2z" fill="rgba(160,50,52,1)"/></svg>Receba por aproximação</p></li>
            <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="none" d="M0 0h24v24H0z"/><path d="M5 2h10l4.707 4.707a1 1 0 0 1 .293.707V21a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm3 10v6h8v-6H8z" fill="rgba(160,50,52,1)"/></svg>Com chip 4G</p></li>
           </ul>
         </div>
      </div>

      <div class="card-box mb-3 mr-md-4 mr-lg-4 mr-xl-4">
         <img src="/img/ADQUIRENCIA/D195.webp" alt="Imagem do modelo de D195 de maquininha"  style="max-width: 310px">
         <div class="cards-texts">
            <h2>D195</h2>
            <ul class="list-unstyled">
             <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17.841 15.659l.176.177.178-.177a2.25 2.25 0 0 1 3.182 3.182l-3.36 3.359-3.358-3.359a2.25 2.25 0 0 1 3.182-3.182zM12 14v2a6 6 0 0 0-6 6H4a8 8 0 0 1 7.75-7.996L12 14zm0-13c3.315 0 6 2.685 6 6a5.998 5.998 0 0 1-5.775 5.996L12 13c-3.315 0-6-2.685-6-6a5.998 5.998 0 0 1 5.775-5.996L12 1zm0 2C9.79 3 8 4.79 8 7s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4z" fill="rgba(160,50,52,1)"/></svg> Cabe no seu bolso</p></li>
            <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="none" d="M0 0h24v24H0z"/><path d="M.69 6.997A17.925 17.925 0 0 1 12 3c4.285 0 8.22 1.497 11.31 3.997l-1.256 1.556A15.933 15.933 0 0 0 12 5C8.191 5 4.694 6.33 1.946 8.553L.69 6.997zm3.141 3.89A12.946 12.946 0 0 1 12 8c3.094 0 5.936 1.081 8.169 2.886l-1.257 1.556A10.954 10.954 0 0 0 12 10c-2.618 0-5.023.915-6.912 2.442l-1.257-1.556zm3.142 3.89A7.967 7.967 0 0 1 12 13c1.904 0 3.653.665 5.027 1.776l-1.257 1.556A5.975 5.975 0 0 0 12 15c-1.428 0-2.74.499-3.77 1.332l-1.257-1.556zm3.142 3.89A2.987 2.987 0 0 1 12 18c.714 0 1.37.25 1.885.666L12 21l-1.885-2.334z" fill="rgba(160,50,52,1)"/></svg>Com conectividade Wi-fi</p></li>
            <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 12a1 1 0 0 1 1 1v9h-2v-8H8v8H6v-9a1 1 0 0 1 1-1h10zm-5 4v2h-2v-2h2zm0-10a6 6 0 0 1 5.368 3.316l-1.79.895a4 4 0 0 0-7.157 0l-1.789-.895A6 6 0 0 1 12 6zm0-4a10 10 0 0 1 8.946 5.527l-1.789.895A8 8 0 0 0 12 4a8 8 0 0 0-7.157 4.422l-1.79-.895A10 10 0 0 1 12 2z" fill="rgba(160,50,52,1)"/></svg>Receba por aproximação</p></li>
            <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="none" d="M0 0h24v24H0z"/><path d="M5 2h10l4.707 4.707a1 1 0 0 1 .293.707V21a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm3 10v6h8v-6H8z" fill="rgba(160,50,52,1)"/></svg>Com chip 4G</p></li>
         </ul>
         </div>
      </div>

      
      <div class="card-box mb-3 mr-md-4 mr-lg-4 mr-xl-4">
         <img src="/img/ADQUIRENCIA/A910.webp"  alt="Imagem do modelo de D195 de maquininha" style="max-width: 310px">
         <div class="cards-texts">
            <h2>A910</h2>
            <ul class="list-unstyled">
            <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="none" d="M0 0h24v24H0z"/><path d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM8 9h8v2H8V9zm0 4h8v2H8v-2z" fill="rgba(160,50,52,1)"/></svg>Comprovante impresso</p></li>
            <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="none" d="M0 0h24v24H0z"/><path d="M.69 6.997A17.925 17.925 0 0 1 12 3c4.285 0 8.22 1.497 11.31 3.997l-1.256 1.556A15.933 15.933 0 0 0 12 5C8.191 5 4.694 6.33 1.946 8.553L.69 6.997zm3.141 3.89A12.946 12.946 0 0 1 12 8c3.094 0 5.936 1.081 8.169 2.886l-1.257 1.556A10.954 10.954 0 0 0 12 10c-2.618 0-5.023.915-6.912 2.442l-1.257-1.556zm3.142 3.89A7.967 7.967 0 0 1 12 13c1.904 0 3.653.665 5.027 1.776l-1.257 1.556A5.975 5.975 0 0 0 12 15c-1.428 0-2.74.499-3.77 1.332l-1.257-1.556zm3.142 3.89A2.987 2.987 0 0 1 12 18c.714 0 1.37.25 1.885.666L12 21l-1.885-2.334z" fill="rgba(160,50,52,1)"/></svg>Com conectividade Wi-fi</p></li>
            <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 12a1 1 0 0 1 1 1v9h-2v-8H8v8H6v-9a1 1 0 0 1 1-1h10zm-5 4v2h-2v-2h2zm0-10a6 6 0 0 1 5.368 3.316l-1.79.895a4 4 0 0 0-7.157 0l-1.789-.895A6 6 0 0 1 12 6zm0-4a10 10 0 0 1 8.946 5.527l-1.789.895A8 8 0 0 0 12 4a8 8 0 0 0-7.157 4.422l-1.79-.895A10 10 0 0 1 12 2z" fill="rgba(160,50,52,1)"/></svg>Receba por aproximação</p></li>
            <li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="none" d="M0 0h24v24H0z"/><path d="M5 2h10l4.707 4.707a1 1 0 0 1 .293.707V21a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm3 10v6h8v-6H8z" fill="rgba(160,50,52,1)"/></svg>Com chip 4G</p></li>
           </ul>
         </div>
      </div>
    </div>
 </section>



 {{-- Card de máquininhas --}}

 



@endsection