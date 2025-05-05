@extends ('menu')
@section('title', 'EstAssist : EstBank')
@section('conteudo') 


{{-- Cards dos botões para uso --}}
<section class="py-5 section-one assist-hero align-items-center">
    <div class="container-fluid">
        <section>
            <div class="container">

                <!-- Card Ativar beneficio -->
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-12 col-md-6 col-lg-6 col-xs-7">
                            <div class=" col-sm-12 col-md-120 col-lg-8 col-xl-8 py-5">
                                <h3 class="assist-hero-text py-3">Assistência Saúde e Odonto Familiar</h3>
                                <p class="assist-hero-text font-weight-bold">
                                    Oferecemos atendimento médico e odontológico de qualidade com profissionais capacitados. Proteja a saúde da sua família, faça parte do EstBank agora!
                                </p>
                            </div>
                        </div>
                        <div class="col col-sm-12 col-md-6 col-ls-6 col-xs-6">
                            <div class="span ml-2 assist-hero-text"><b>Fácil acesso a serviços:</b> </div>
                            <div class="owl-carousel assist-owl-carousel owl-theme py-2">
                                <a href="https://app.temsaude.com/est/login" target="_blank" class="link-card-assist" style="margin-right: 50px">
                                    <div class="item-assist items-assist item-02 ">
                                        <div class="title-card-assist">
                                            <div class="title-icon-card-assist">
                                                <picture>
                                                    <img class="img" src="https://img.icons8.com/ios/50/000000/doorbell.png" alt="" style="width: 24px; height: 24px;">
                                                </picture>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="title-text-card-assist" data-home="ativar-beneficio" title="ativar-beneficio"> 
                                                <span  class="vermelho font-weight-bold">Já sou cliente </span>
                                            </div>
                                            <p class="text-card-assist">Acesse os benefícios contratados.</p>
                                        </div>
                                    </div>
                                </a>
                                
                                {{-- Card ainda não é cliente --}}
                                <a href="https://app.temsaude.com/est/login" target="_blank" class="link-card-assist">
                                    <div class="item-assist items-assist item-02 ">
                                        <div class="title-card-assist">
                                            <div class="title-icon-card-assist">
                                                <picture>
                                                    <img class="img" src="https://img.icons8.com/ios/50/null/user--v1.png" alt="" style="width: 24px; height: 24px;">
                                                </picture>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="title-text-card-assist" data-home="ja-sou-cliente" title="ja-sou-cliente"> 
                                                <span class="vermelho font-weight-bold">Ainda não sou cliente</span>
                                            </div>
                                            <p class="text-card-assist"> Clique para ativar seus benefícios ou ligue: <b >0800 942 7594</b>  </p>
                                        </div>
                                    </div>
                                </a>
                                
                                {{-- Card Telemedicina --}}
                                <a href="https://app.temsaude.com/ScheduleAllTime?partner=est"  target="_blank"  class="link-card-assist">
                                    <div class="item-assist items-assist item-02 ">
                                        <div class="title-card-assist">
                                            <div class="title-icon-card-assist">
                                                <picture>
                                                    <img class="img" src="https://www.svgrepo.com/show/339589/telemedicine-mobile.svg" alt="Um telefone" style="width: 24px; height: 24px;">
                                                </picture>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="title-text-card-assist"> 
                                                <span  class="vermelho font-weight-bold">Telemedicina</span>
                                            </div>
                                            <p class="text-card-assist">Fale com um médico agora mesmo. Pronto atendimento 24 horas.</p>
                                        </div>
                                    </div>
                                </a>
                                {{-- Card Rede de farmácias --}}
                                <a href="https://app.temsaude.com/est/benefits/discount-medicines/search" target="_blank" class="link-card-assist">
                                    <div class="item-assist items-assist item-02 ">
                                        <div class="title-card-assist">
                                            <div class="title-icon-card-assist">
                                                <picture>
                                                    <img class="img" src="https://img.icons8.com/external-others-cattaleeya-thongsriphong/64/null/external-Pharmacy-pharmacy-outline-others-cattaleeya-thongsriphong-2.png" alt="" style="width: 24px; height: 24px;">
                                                </picture>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="title-text-card-assist"> 
                                                <span  class="vermelho font-weight-bold">Rede de farmácias</span>
                                            </div>
                                            <p class="text-card-assist">Encontre farmácias perto de você e garanta descontos.</p>
                                        </div>
                                    </div>
                                </a>
                                {{-- Card Rede médica --}}
                                <a href="https://app.temsaude.com/est/schedule-appointment" target="_blank" class="link-card-assist">
                                    <div class="item-assist items-assist item-02 ">
                                        <div class="title-card-assist">
                                            <div class="title-icon-card-assist">
                                                <picture>
                                                    <img class="img" src="https://img.icons8.com/ios/50/null/hospital-3.png" alt="" style="width: 24px; height: 24px;">
                                                </picture>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="title-text-card-assist"> 
                                                <span  class="vermelho font-weight-bold">Rede médica</span>
                                            </div>
                                            <p class="text-card-assist">Encontre redes médicas por perto.</p>
                                        </div>
                                    </div>
                                </a>
                                {{-- Card Saiba mais --}}
                                <a href="/estassist-termos"  class="link-card-assist">
                                    <div class="item-assist items-assist item-02 ">
                                        <div class="title-card-assist">
                                            <div class="title-icon-card-assist">
                                                <picture>
                                                    <img class="img" src="https://img.icons8.com/ios/50/null/term.png" alt="" style="width: 24px; height: 24px;">
                                                </picture>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="title-text-card-assist"> 
                                                <span  class="vermelho font-weight-bold">Termos e condições</span>
                                            </div>
                                            <p class="text-card-assist">Veja as condições gerais dos produtos.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="custom-navigation">
                                <button class="owl-prev">
                                    <span aria-label="Previous">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36">
                                            <path fill="none" d="M0 0h24v24H0z"/>
                                            <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" fill="rgba(160,50,52,1)"/>
                                        </svg>
                                    </span>
                                </button>
                                <button class="owl-next">
                                    <span aria-label="Next">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36">
                                            <path fill="none" d="M0 0h24v24H0z"/>
                                            <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" fill="rgba(160,50,52,1)"/>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    var owl = $(".owl-carousel").owlCarousel({
                                      loop:true,
                                     dots:false,
                                     responsive:{
                                         0 : {
                                              items : 1.5,
                                              loop:true,
                                              nav:false,
                                              indicator:true,
                                              rewind: true,
                                              slideBy:true,
                                              dots:false,                 
                                              autoplayHoverPause:true,
                                         },
                                
                                         600 : {
                                             items : 1.5,
                                             loop:false,
                                             indicator:true,
                                             dots:false,
                                             autoplayHoverPause:true,
                                         },
                                
                                         1200 : {
                                             items : 3.1,
                                              loop:true,
                                              nav:false,
                                              indicator:true,
                                              rewind: true,
                                              slideBy:true,
                                               autoplayHoverPause:true,
                                         }, 
                                
                                     },
                                    });
                                
                                    $('.owl-next').click(function() {
                                        owl.trigger('next.owl.carousel');
                                    });
                                    $('.owl-prev').click(function() {
                                        owl.trigger('prev.owl.carousel');
                                    });
                                });
                            </script>
                        </div>
        </section>
        </div>
        </div>
        </div>
</section>

   <div class="container py-5">
   <div class="container"> 
   <div class="container">
   <h4 class="font-weight-bold mb-0"> Conheça todas as assistências do EstBank:</h4>
   </div>  
   </div>
   </div>
   <section style="max-width: 100%; justify-content-sm-center d-flex">
   <div class="container beneficios-container">
   <div class=" row d-flex justify-content-center">    
   <div class="d-flex justify-content-md-center col-11 col-sm-11 col-md-6 col-lg-4 col-xl-11 itens-assist-demais desemprego ">
   <div class="titulo titulo-desemprego">
   <span>Odontologia Familiar</span>
   </div>
   <div class="col"></div>
   <div class="botao">
   <a href="tel:08009427594"  data-home="assistencia-desemprego" title=" Já sou cliente da assistência desemprego">Já sou cliente</a>
   <button  data-home="assistencia-residencial" title="Termos e condições da assistência Residencial" type="button" class="botao-card-saiba-mais  btn-primary" data-toggle="modal" data-target="#modal-odontologia-familiar">
    Saiba mais
  </button> 


   
   </div>
   </div>
   </div>


      {{-- Modal Odontologia Familia --}}
<div class="modal fade section-one py-5" id="modal-odontologia-familiar">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Odontologia Familiar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Assistência dental de emergência.
            Medicina bucal.
            Exame clínico, diagnóstico, prognóstico e plano de tratamento.
            Cirurgia - exodontias simples ou extrações.
            Radiografias periapicais e coronais.
            Manejo da dor (Analgésicos).
            Envio de medicamentos em domicílio derivados da consulta.
            Lembrete de consultas, exames e ingesta de medicamentos.
            Consulta odontológica telefônica.
            Indicação de dentistas a nível nacional.
            Indicação de farmácias e centros de saúde.
            Indicação de centros e clínicas odontológicas.
            Desconto em farmácias.
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
      </div>
    </div>
  </div>
</div>
{{-- Fim modal Odontologia Familiar --}}


   <!-- Segunda linha -->
   <div class=" row d-flex justify-content-center">    
   <div class=" col-11 col-sm-11 col-md-6 col-lg-4 col-xl-6 itens-assist-demais residencial mr-md-1  mr-lg-1 mr-xl-1">
   <div class="titulo titulo-residencial">
   <span>Descontos em farmácias</span>
   </div>
   <div class="py-3"><p style="color:#FFF;"></p></div>
   <div class=""></div>
   <div class="col"></div>
   <div class="botao">
   <a href="tel:08009427594" data-home="assistencia-residencial" title=" Já sou cliente da assistência Residencial">Já sou cliente</a>
    <button  data-home="assistencia-residencial" title="Termos e condições da assistência Residencial" type="button" class="botao-card-saiba-mais  btn-primary" data-toggle="modal" data-target="#modal-farmacia">
    Saiba mais
  </button> 
 
   </div>
   
   </div>

{{--  ====================================================================== Modal descontos em farmácia  ======================================================================--}}

<div class="modal fade section-one py-5" id="modal-farmacia">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Descontos em farmácias</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Com a Assistência Desconto em Farmácias, você pode ter acesso a descontos exclusivos em medicamentos e produtos de saúde nas principais farmácias do país. Além de cuidar da sua saúde, você também poupa dinheiro na hora de comprar os produtos que precisa. Com a Assistência Desconto em Farmácias, você tem a tranquilidade de saber que está pagando o menor preço possível, sem abrir mão da qualidade dos produtos e serviços.
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
      </div>
    </div>
  </div>
</div>

{{--  ====================================================================== Fim modal descontos em farmácia  ======================================================================--}}


   <div class=" col-11 col-sm-11 col-md-5 col-lg-5 col-xl-5 itens-assist-demais eco">
   <div class="titulo titulo-eco">
   <span>Telemedicina</span>
   </div>
   <div class="col"></div>
   <div class="botao">
   <a href="tel:08009427594"  data-home="assistencia-eco" title=" Já sou cliente da assistência eco">Já sou cliente</a>
   <button  data-home="assistencia-residencial" title="Termos e condições da assistência Residencial" type="button" class="botao-card-saiba-mais  btn-primary" data-toggle="modal" data-target="#modal-telemedicina">
    Saiba mais
  </button> 
   </div>
   </div> 
   </div>

   
{{--  ====================================================================== Modal telemedicina  ======================================================================--}}
<div class="modal fade section-one py-5" id="modal-telemedicina">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Telemedicina</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Consultas realizadas a distância (por videoconferência), na especialidade clínico geral, para avaliação de condições clínicas de menor gravidade e/ou complexidade, com a finalidade de assistência, prevenção de doenças e lesões e promoção da saúde e do bem-estar.

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
      </div>
    </div>
  </div>
</div>
{{--  ====================================================================== Fim modal telemedicina ====================================================================== --}}


   <!-- Fim da segunda linha -->
   <!-- Terceira linha da ROw -->
   <div class="row d-flex justify-content-center">    
   <div class="col-11 col-sm-11 col-md-6 col-lg-4 col-xl-7 itens-assist-demais pet  mr-md-1  mr-lg-1 mr-xl-1">
   <div class="titulo titulo-pet">
   <span>Assistência PET</span>
   </div>
   <div class="col"></div>
   <div class="botao">
   <a href="tel:08009427594"  data-home="assistencia-desemprego" title=" Já sou cliente da assistência Residencial" >Já sou cliente</a>
   <button  data-home="assistencia-residencial" title="Termos e condições da assistência Residencial" type="button" class="botao-card-saiba-mais  btn-primary" data-toggle="modal" data-target="#modal-pet">
    Saiba mais
  </button> 
   </div>
   </div>



   {{-- ====================================================================== Modal PET ====================================================================== --}}
<div class="modal fade section-one py-5" id="modal-pet">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Assistencia PET</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Cuide do melhor amigo de quatro patas com a Assistência Pet! Não importa a situação, seja uma consulta médica, um exame, ou até mesmo uma emergência, estamos aqui para oferecer suporte financeiro e ajudar na saúde do seu animal de estimação.
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
      </div>
    </div>
  </div>
</div>
{{-- ====================================================================== Fim modal PET  ======================================================================--}}



   <div class=" col-11 col-sm-11 col-md-5 col-lg-5 col-xl-4 itens-assist-demais funeral">
   <div class="titulo titulo-funeral">
   <span>Assistência Funeral</span>
   </div>
   <div class="col"></div>
   <div class="botao">
   <a href="tel:08009427594" data-home="assistencia-funeral" title=" Já sou cliente da assistência funeral" >Já sou cliente</a>
   <button  data-home="assistencia-residencial" title="Termos e condições da assistência Residencial" type="button" class="botao-card-saiba-mais  btn-primary" data-toggle="modal" data-target="#modal-funeral">
    Saiba mais
  </button>   </div>
   </div> 
   </div>


         {{-- ====================================================================== Modal funeral ====================================================================== --}}
<div class="modal fade section-one py-5" id="modal-funeral">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Assistência Funeral</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Procedimentos legais  necessários para o enterro  ou a cremação perante as  autoridades competentes; <br>
            Decoração das salas de  velamento com arranjos florais; <br>
            Salas de velamento por  até vinte e quatro (24)  horas na cidade requerida; <br>
            Translado para a sala de velamento e o cemitério  na cidade de destino; <br>
            Celebração do serviço religioso; <br>
            Serviço de tanatopraxia; <br>
            Serviço de sepultamento  ou cremação; <br>      

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
      </div>
    </div>
  </div>
</div>
{{-- ====================================================================== Fim modal funeral ====================================================================== --}}

   <!-- Fima da terceira linha -->
   </div>
   <!-- Fim da row --> 
   </div> 
   </section>



<section class="py-5 mt-5">
    <div class="contratar py-2">
        <div class="container">
            <div class="">
                <section>
                    <div class="container">
                        <section class="py-5">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 offset-lg-1 order-md-last">
                                        {{-- Rotulo da section para o celular --}}
                                             <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-3 fw-600 tag-section span-geral mb-2 order-sm-first d-sm-flex d-md-none d-lg-none d-xl-none order-first"> O que é o Estassist? </p>
                              
                              
                                               <div class="mb-4"  style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                                                  <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>
                                                  <picture>
                                                    <source srcset="img/ASSISTENCIA/o-que-e-assistencia.webp 160w,
                                                        img/ASSISTENCIA/o-que-e-assistencia.webp 320w,
                                                        img/ASSISTENCIA/o-que-e-assistencia.webp 640w" sizes="(max-width: 500px) 100vw, 500px">
                                                    <img sizes="(max-width: 500px) 100vw, 500px" srcset="img/ASSISTENCIA/o-que-e-assistencia.webp 160w,
                                                        img/ASSISTENCIA/o-que-e-assistencia.webp 320w,
                                                        img/ASSISTENCIA/o-que-e-assistencia.webp 640w" src="/img/EMPRESTIMO/FGTSMan" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Médico sentado de frente para um computador em uma chamada de vídeo">
                                                </picture>
                                                <noscript>
                                                    <picture>
                                                        <source srcset="/img/EMPRESTIMO/FGTSMan 160w,
                                                            img/ASSISTENCIA/o-que-e-assistencia.webp 320w,
                                                            img/ASSISTENCIA/o-que-e-assistencia.webp 640w" sizes="(max-width: 500px) 100vw, 500px" />
                                                        <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="img/ASSISTENCIA/o-que-e-assistencia.webp 160w,
                                                            img/ASSISTENCIA/o-que-e-assistencia.webp 320w,
                                                            img/ASSISTENCIA/o-que-e-assistencia.webp 640w" src="img/ASSISTENCIA/o-que-e-assistencia.webp" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px" alt="Médico sentado de frente para um computador em uma chamada de vídeo"/>
                                                    </picture>
                                                </noscript>
                                               </div>
                                            </div>                                          
                                            <div class="col-12 col-md-6 col-lg-5">
                                        <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-2 fw-600 tag-section span-geral mb-2 order-sm-first d-none d-md-flex"> O que é o Estassist?  </p>
                                        <h2 class="title-content-itens-assist" style="opacity: 1;" class="fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50 text-sm-md"><span class="d-block d-md-inline">O EstAssist é o  serviço  de </span>   <b class="vermelho"> assistências do EstBank.</b></h2>
                                        <p   class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4"> Tenha assistências completa para cuidar da saúde, da sua casa, do meio ambiente, do seu pet e do seu futuro.</p>
                                        {{-- <div style="opacity: 1;"><a data-home="contratar-o-assistencias" title="Contrate as assistências" class=" btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="/">Contrate o Estassist </a></div> --}}
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <section class="pb-5"  style="background-color: #FAFAFA">
        <div class="container py-5 ">
           <div class="container">
              <div class="container contratar " ><h4><b class="vermelho">Outras assistências:</b></h4>
              <p></p></div>
     
     
           </div>
        </div>
      <div class="container quadrado py-3">
     
     
        <div class="cartaozinho">
              <div class="itens-do-cartaozinho">
              <div class="um">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path fill="none" d="M0 0H24V24H0z"/><path d="M12 1l8.217 1.826c.457.102.783.507.783.976v9.987c0 2.006-1.003 3.88-2.672 4.992L12 23l-6.328-4.219C4.002 17.668 3 15.795 3 13.79V3.802c0-.469.326-.874.783-.976L12 1zm4.452 7.222l-4.95 4.949-2.828-2.828-1.414 1.414L11.503 16l6.364-6.364-1.415-1.414z" fill="rgba(160,50,52,1)"/></svg>                </h3></div>
              <div class="dois"><h6><b>Desemprego</b></h6></div>
              <div class="tres"><p>Nossa assistência de desemprego oferece suporte financeiro em caso de perda de emprego.</p></div>
           </div>
        </div>
     
           <div class="cartaozinho">
              <div class="itens-do-cartaozinho">
              <div class="um"><h3>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path fill="none" d="M0 0H24V24H0z"/><path d="M21 3v2c0 9.627-5.373 14-12 14H7.098c.212-3.012 1.15-4.835 3.598-7.001 1.204-1.065 1.102-1.68.509-1.327-4.084 2.43-6.112 5.714-6.202 10.958L5 22H3c0-1.363.116-2.6.346-3.732C3.116 16.974 3 15.218 3 13 3 7.477 7.477 3 13 3c2 0 4 1 8 0z" fill="rgba(160,50,52,1)"/></svg>                </h3></div>
              <div class="dois"><h6><b>Eco</b></h6></div>
              <div class="tres"><p> Com o EstBank, você tem a opção de cuidar do meio ambiente com a assistência eco. Juntos, podemos fazer a diferença!</p></div>
           </div>
        </div>
     
           <div class="cartaozinho">
              <div class="itens-do-cartaozinho">
              <div class="um">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path fill="none" d="M0 0h24v24H0z"/><path d="M20 20a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9zM7.5 13a4.5 4.5 0 1 0 9 0h-2a2.5 2.5 0 1 1-5 0h-2z" fill="rgba(160,50,52,1)"/></svg>                </h3></div>
              <div class="dois"><h6><b>Residencial</b></h6></div>
              <div class="tres"><p>Com o EstBank, você tem a tranquilidade de saber que sua casa, condomínio e negócio estão sempre protegidos. </p></div>
           </div>
        </div>
         </div>
     
     </section>    
</section>



<section class="" style="#FFF">
    <div class="py-2">
        <div class="container">
            <div class="">
                <section>
                    <div class="container">
                        <section class="">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 offset-lg-1 order-md-last">
                                        {{-- Rotulo da section para o celular --}}
                                             <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-3 fw-600 tag-section span-geral mb-2 order-sm-first d-sm-flex d-md-none d-lg-none d-xl-none order-first"> EstAssist Saúde</p>
                                               <div class="mb-4"  style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                                                  <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>
                                                  <picture>
                                                    <source srcset="img/ASSISTENCIA/redes-credenciadas.webp 160w,
                                                        img/ASSISTENCIA/redes-credenciadas.webp 320w,
                                                        img/ASSISTENCIA/redes-credenciadas.webp 640w" sizes="(max-width: 500px) 100vw, 500px">
                                                    <img sizes="(max-width: 500px) 100vw, 500px" srcset="img/ASSISTENCIA/redes-credenciadas.webp 160w,
                                                        img/ASSISTENCIA/redes-credenciadas.webp 320w,
                                                        img/ASSISTENCIA/redes-credenciadas.webp 640w" src="/img/EMPRESTIMO/FGTSMan" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Médico sentado de frente para um computador em uma chamada de vídeo">
                                                </picture>
                                                <noscript>
                                                    <picture>
                                                        <source srcset="/img/EMPRESTIMO/FGTSMan 160w,
                                                            img/ASSISTENCIA/redes-credenciadas.webp 320w,
                                                            img/ASSISTENCIA/redes-credenciadas.webp 640w" sizes="(max-width: 500px) 100vw, 500px" />
                                                        <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="img/ASSISTENCIA/redes-credenciadas.webp 160w,
                                                            img/ASSISTENCIA/redes-credenciadas.webp 320w,
                                                            img/ASSISTENCIA/redes-credenciadas.webp 640w" src="img/ASSISTENCIA/redes-credenciadas.webp" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px" alt="Médico sentado de frente para um computador em uma chamada de vídeo"/>
                                                    </picture>
                                                </noscript>
                                               </div>
                                            </div>                                          
                                            <div class="col-12 col-md-6 col-lg-5">
                                        <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-2 fw-600 tag-section span-geral mb-2 order-sm-first d-none d-md-flex"> EstAssist Saúde  </p>
                                        <h2 class="title-content-itens-assist" style="opacity: 1;" class="fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50 text-sm-md"><span class="d-block d-md-inline">Redes credenciadas em </span>  <b class="vermelho">todo o Brasil.</b></h2>
                                        <p   class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">Com o EstBank, você tem assistência completa para cuidar da saúde, da sua casa, do meio ambiente, do seu pet e do seu futuro.</p>
                                        <div style="opacity: 1;"><a data-home="contratar-o-assistencias" title="Contrate as assistências" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="https://app.temsaude.com/est/benefits/network" target="_blank">Consulte os lugares</a></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>


@endsection