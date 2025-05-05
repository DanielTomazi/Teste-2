@extends ('menu')

@section('title', 'Conta Digital : EstBank')


@section('conteudo')

<section class="py-5" style="background: #BA2E31">
    <div class="container py-2 py-md-5">
        <div class="row align-items-center">

            <div class=" container col-12 col-md-6 col-lg-4 justify-content-center offset-lg-1 title-conta-digital-pf">
                <h3 style="opacity: 1;"
                    class=" fs-24 lh-30 fs-lg-32 fs-xl-40 lh-lg-40 lh-xl-50 text-center text-md-left  text-lg-left  text-xl-left d-flex hero-text-title">
                    Sua conta digital, feita do jeito que você precisa.</h3>
                <p style="opacity: 1;"
                    class="fs-18 lh-22 text-grayscale--400 mt-4 text-center text-md-left  text-lg-left  text-xl-left d-flex">
                    Economize tempo com o aplicativo do EstBank e tenha tudo na palma da sua mão.</p>
                <div style="opacity: 1; width:100%;" class="justify-content-center d-flex">
                    <a onclick='ga("send", "event", "category", "action", "label");' data-home="abra-sua-conta"
                        title="Abra sua conta no Estbank"
                        class="btn button-open-account-extra-white btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center"
                        href="https://estbank.idez.com.br/app/signup" target="_blank"> Abra sua conta </a>
                </div>
            </div>

            <div class=" container col-12 col-md-6 col-xl-5 order-first order-md-last order-lg-last order-xl-last ">


                <div class="d-flex" style="position: relative; overflow: hidden; max-width: 400px; max-height: 514px;">


                    <div aria-hidden="true" style="width:100%;padding-bottom:90.57971014492753%"></div>
                    <picture>
                        <source srcset="/img/HOME/heroAccount01.png 138w,
                        /img/HOME/heroAccount03.png 275w,
                        /img/HOME/heroAccount02.png 550w" sizes="(max-width: 550px) 100vw, 550px">



                        <img sizes="(max-width: 550px) 100vw, 550px" srcset="/img/HOME/heroAccount01.png 138w,
                        /img/HOME/heroAccount03.png 275w,
                        /img/HOME/heroAccount02.png 550w" src="/img/HOME/heroAccount03.png"
                            alt="Celular com o aplicativo do Estbank aberto" loading="lazy"
                            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                    </picture>
                    <noscript>
                        <picture>
                            <source srcset="/img/HOME/heroAccount01.png 138w,
                            /img/HOME/heroAccount03.png 275w,
                            /img/HOME/heroAccount02.png 550w" sizes="(max-width: 550px) 100vw, 550px" />
                            <img loading="lazy" sizes="(max-width: 550px) 100vw, 550px" srcset="/img/HOME/heroAccount01.png 138w,
                            /img/HOME/heroAccount03.png 275w,
                            /img/HOME/heroAccount02.png 550w" src="/img/HOME/heroAccount03.png"
                                alt="Celular com o aplicativo do Estbank aberto"
                                style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
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


                <div class="container-fluid mb-2">

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
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                                                height="32">
                                                <path fill="none" d="M0 0H24V24H0z" />
                                                <path
                                                    d="M5 3v16h16v2H3V3h2zm15.293 3.293l1.414 1.414L16 13.414l-3-2.999-4.293 4.292-1.414-1.414L13 7.586l3 2.999 4.293-4.292z"
                                                    fill="rgba(160,50,52,1)" />
                                            </svg>
                                    </div>
                                </div>
                                <div>
                                    <div class="title-text-card">
                                        <span> Rendimento </span>
                                    </div>

                                    <p class="text-card-pf">Aproveite os lucros do CDI com o EstBank. <b
                                            class="vermelho"> Até 100% do CDI </b>, sem esforço!</p>

                                </div>
                            </div>
                            <!-- Card TED -->
                            <div class="item-pf items item-01">
                                <div class="title-card">
                                    <div class="title-icon-card">
                                        <picture>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                                                height="32">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M5.373 4.51A9.962 9.962 0 0 1 12 2c5.523 0 10 4.477 10 10a9.954 9.954 0 0 1-1.793 5.715L17.5 12H20A8 8 0 0 0 6.274 6.413l-.9-1.902zm13.254 14.98A9.962 9.962 0 0 1 12 22C6.477 22 2 17.523 2 12c0-2.125.663-4.095 1.793-5.715L6.5 12H4a8 8 0 0 0 13.726 5.587l.9 1.902zM8.5 14H14a.5.5 0 1 0 0-1h-4a2.5 2.5 0 1 1 0-5h1V7h2v1h2.5v2H10a.5.5 0 1 0 0 1h4a2.5 2.5 0 1 1 0 5h-1v1h-2v-1H8.5v-2z"
                                                    fill="rgba(160,50,52,1)" />
                                            </svg>
                                    </div>
                                </div>
                                <div>
                                    <div class="title-text-card">
                                        <span> Transferências </span>
                                    </div>

                                    <p class="text-card-pf">Fácil Transferência com o EstBank - <b class="vermelho">
                                            Receba e Envie dinheiro com agilidade. </b></p>
                                </div>
                            </div>
                            <!-- Card Boleto -->
                            <div class="item-pf items item-01">
                                <div class="title-card">
                                    <div class="title-icon-card">
                                        <picture>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                                                height="32">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M19 22H5a3 3 0 0 1-3-3V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12h4v4a3 3 0 0 1-3 3zm-1-5v2a1 1 0 0 0 2 0v-2h-2zm-2 3V4H4v15a1 1 0 0 0 1 1h11zM6 7h8v2H6V7zm0 4h8v2H6v-2zm0 4h5v2H6v-2z"
                                                    fill="rgba(160,3,35,1)" />
                                            </svg>
                                    </div>
                                </div>
                                <div>
                                    <div class="title-text-card">
                                        <span> Pagamentos </span>
                                    </div>

                                    <p class="text-card-pf">Economize tempo com pagamentos de boletos no EstBank: <b
                                            class="vermelho">Pague sem sair de casa!</b></p>
                                </div>
                            </div>
                            <!-- Card Cartão virtual -->
                            <div class="item-pf items item-01">
                                <div class="title-card">
                                    <div class="title-icon-card">
                                        <picture>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                                                height="32">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M11 2l7.298 2.28a1 1 0 0 1 .702.955V7h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1l-3.22.001c-.387.51-.857.96-1.4 1.33L11 22l-5.38-3.668A6 6 0 0 1 3 13.374V5.235a1 1 0 0 1 .702-.954L11 2zm0 2.094L5 5.97v7.404a4 4 0 0 0 1.558 3.169l.189.136L11 19.58 14.782 17H10a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h7V5.97l-6-1.876zM11 12v3h9v-3h-9zm0-2h9V9h-9v1z"
                                                    fill="rgba(160,50,52,1)" />
                                            </svg>
                                        </picture>
                                    </div>
                                </div>
                                <div>
                                    <div class="title-text-card">
                                        <span> Cartão Virtual </span>
                                    </div>

                                    <p class="text-card-pf">Comprar com segurança no EstBank: <b class="vermelho">
                                            Cartão virtual gerado automaticamente </b> para cada operação.</p>
                                </div>
                            </div>
                            <!-- Card recargas  -->
                            <div class="item-pf items item-01">
                                <div class="title-card">
                                    <div class="title-icon-card">
                                        <picture>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                                                height="32">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M7 4v16h10V4H7zM6 2h12a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm6 15a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                                                    fill="rgba(160,50,52,1)" />
                                            </svg>
                                        </picture>
                                    </div>

                                </div>
                                <div>
                                    <div class="title-text-card">
                                        <span> Recargas </span>
                                    </div>

                                    <p class="text-card-pf">Recarregue seu celular <b class="vermelho">sem sair de
                                            casa</b> com o aplicativo do EstBank.</p>
                                </div>
                            </div>

                            <!-- Card Emprestimo -->
                            <div class="item-pf items item-01">
                                <div class="title-card">
                                    <div class="title-icon-card">
                                        <picture>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                                                height="32">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M5 9a1 1 0 0 1 1 1 6.97 6.97 0 0 1 4.33 1.5h2.17c1.333 0 2.53.58 3.354 1.5H19a5 5 0 0 1 4.516 2.851C21.151 18.972 17.322 21 13 21c-2.79 0-5.15-.603-7.06-1.658A.998.998 0 0 1 5 20H2a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h3zm1.001 3L6 17.022l.045.032C7.84 18.314 10.178 19 13 19c3.004 0 5.799-1.156 7.835-3.13l.133-.133-.12-.1a2.994 2.994 0 0 0-1.643-.63L19 15h-2.111c.072.322.111.656.111 1v1H8v-2l6.79-.001-.034-.078a2.501 2.501 0 0 0-2.092-1.416L12.5 13.5H9.57A4.985 4.985 0 0 0 6.002 12zM4 11H3v7h1v-7zm14-6a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-7-5a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                                                    fill="rgba(160,50,52,1)" />
                                            </svg>
                                        </picture>
                                    </div>
                                </div>
                                <div>
                                    <div class="title-text-card ">
                                        <span class="text-card-title"> Empréstimo </span>
                                    </div>
                                    <p class="text-card-pf"> Crédito sem complicações com o EstBank: <b
                                            class="vermelho">solicitação fácil e taxas acessíveis.</b>
                                    </p>
                                </div>
                            </div>


                            <!-- Card Doação -->
                            <div class="item-pf items item-01">
                                <div class="title-card">
                                    <div class="title-icon-card">
                                        <picture>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                                                height="32">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M15 2a4 4 0 0 1 3.464 6.001L23 8v2h-2v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V10H1V8l4.536.001A4 4 0 0 1 12 3.355 3.983 3.983 0 0 1 15 2zm-4 8H5v9h6v-9zm8 0h-6v9h6v-9zM9 4a2 2 0 0 0-.15 3.995L9 8h2V6a2 2 0 0 0-1.697-1.977l-.154-.018L9 4zm6 0a2 2 0 0 0-1.995 1.85L13 6v2h2a2 2 0 0 0 1.995-1.85L17 6a2 2 0 0 0-2-2z"
                                                    fill="rgba(160,50,52,1)" />
                                            </svg>
                                        </picture>
                                    </div>
                                </div>
                                <div>
                                    <div class="title-text-card ">
                                        <span class="text-card-title"> Doação </span>
                                    </div>
                                    <p class="text-card-pf"> Faça doações diretamente pelo aplicativo e <b
                                            class="vermelho"> contribua para as instituições parceiras.</b></p>
                                </div>
                            </div>


                            <!-- Card Depósito -->
                            <div class="item-pf items item-01">
                                <div class="title-card">
                                    <div class="title-icon-card">
                                        <picture>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                                                height="32">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M10 20H6v2H4v-2H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7V1.59a.5.5 0 0 1 .582-.493l10.582 1.764a1 1 0 0 1 .836.986V6h1v2h-1v7h1v2h-1v2.153a1 1 0 0 1-.836.986L20 20.333V22h-2v-1.333l-7.418 1.236A.5.5 0 0 1 10 21.41V20zm2-.36l8-1.334V4.694l-8-1.333v16.278zM16.5 14c-.828 0-1.5-1.12-1.5-2.5S15.672 9 16.5 9s1.5 1.12 1.5 2.5-.672 2.5-1.5 2.5z"
                                                    fill="rgba(160,50,52,1)" />
                                            </svg>
                                        </picture>
                                    </div>
                                </div>
                                <div>
                                    <div class="title-text-card ">
                                        <span class="text-card-title"> Depósito </span>
                                    </div>
                                    <p class="text-card-pf">
                                        Invista em sua conta depositando dinheiro e <b class="vermelho">obtenha lucro
                                            com seu saldo.</b></p>
                                </div>
                            </div>





                        </div>
                    </div>
                </div>
                <div class="custom-navigation">
                    <button class="owl-prev">
                        <span aria-label="Previous">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z"
                                    fill="rgba(160,50,52,1)" />
                            </svg>
                        </span>
                    </button>
                    <button class="owl-next">
                        <span aria-label="Next">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"
                                    fill="rgba(160,50,52,1)" />
                            </svg>
                        </span>
                    </button>
                </div>

                <script>
                $(document).ready(function() {
                    var owl = $(".owl-carousel").owlCarousel({
                        loop: true,
                        dots: false,
                        responsive: {
                            0: {
                                items: 1.3,
                                loop: true,
                                nav: false,
                                indicator: true,
                                rewind: true,
                                slideBy: true,
                                dots: false,
                                autoplayHoverPause: true,
                            },

                            600: {
                                items: 3,
                                loop: false,
                                indicator: true,
                                dots: false,
                                autoplayHoverPause: true,
                            },

                            700: {
                                items: 3.1,
                                loop: true,
                                indicator: true,
                                dots: false,
                                nav: false,


                            },

                            1200: {
                                items: 5.1,
                                loop: true,
                                nav: false,
                                indicator: true,
                                rewind: true,
                                slideBy: true,
                                autoplayHoverPause: true,
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
                        <div class="mb-4"
                            style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                            <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>
                            <img aria-hidden="true" alt=""
                                style="position: absolute; border-radius:15px; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                            <picture>
                                <source srcset="/img/CONTAPF/mulher-conta.webp 160w,
                            /img/CONTAPF/mulher-conta-pf.webp 320w,
                            /img/CONTAPF/mulher-conta-pf.webp 640w" sizes="(max-width: 500px) 100vw, 500px">
                                <img sizes="(max-width: 500px) 100vw, 500px" srcset="/img/CONTAPF/mulher-conta-pf.webp 160w,
                            /img/CONTAPF/mulher-conta-pf.webp 320w,
                            /img/CONTAPF/mulher-conta-pf.webp 640w" src="/img/EMPRESTIMO/FGTSMan" loading="lazy"
                                    style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;"
                                    alt="Mulher sentada segurando um celular e sorrindo">
                            </picture>
                            <noscript>
                                <picture>
                                    <source srcset="/img/EMPRESTIMO/FGTSMan 160w,
                                /img/CONTAPF/mulher-conta-pf.webp 320w,
                                /img/CONTAPF/mulher-conta-pf.webp 640w" sizes="(max-width: 500px) 100vw, 500px" />
                                    <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="/img/CONTAPF/mulher-conta-pf.webp 160w,
                                /img/CONTAPF/mulher-conta-pf.webp 320w,
                                /img/CONTAPF/mulher-conta-pf.webp 640w" src="/img/CONTAPF/mulher-conta.webp"
                                        style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px"
                                        alt="Mulher sentada segurando um celular e sorrindo" />
                                </picture>
                            </noscript>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                        <h2 style="opacity: 1;"
                            class=" title-abra-sua-conta fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50"><span
                                class="d-block d-md-inline">Abra sua conta no EstBank e desfrute de facilidades.</span>
                        </h2>
                        <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4"> Abra sua conta no
                            EstBank e tenha acesso a todos os nossos serviços e vantagens. Tudo para tornar sua vida
                            mais fácil. </p>
                        <div style="opacity: 1;"><a onclick='ga("send", "event", "category", "action", "label");'
                                data-home="abra-sua-conta" title="Abra sua conta no Estbank"
                                class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center"
                                href="https://estbank.idez.com.br/app/signup" target="_blank"> Abra sua conta </a></div>

                        <div class="baixe-o-app mt-5 d-flex justify-content-center justify-content-md-start">
                            <img class="d-none"
                                src="https://play-lh.googleusercontent.com/ufwUy4SGVTqCs8fcp6Ajxfpae0bNImN1Rq2cXUjWI7jlmNMCsXgQE5C3yUEzBu5Gadkz"
                                alt="" style="width:100px;">
                            <div class="stores">
                                <a href="https://apps.apple.com/br/app/estbank/id1615822147"
                                    onclick='ga("send", "event", "category", "action", "label");' target="_blank"
                                    rel="noreferrer" title="Baixe na App Store" aria-label="App Store"
                                    data-footer="download-app-store" class="nav-svg"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="undefined icon icon--social fill-undefined"
                                        style="width:150px;height:45px" viewBox="0 0 143 42">
                                        <g fill-rule="evenodd" clip-rule="evenodd">
                                            <path
                                                d="M.5 9A8.5 8.5 0 019 .5h125a8.5 8.5 0 018.5 8.5v24a8.5 8.5 0 01-8.5 8.5H9A8.5 8.5 0 01.5 33V9zM9 1.5A7.5 7.5 0 001.5 9v24A7.5 7.5 0 009 40.5h125a7.5 7.5 0 007.5-7.5V9a7.5 7.5 0 00-7.5-7.5H9z">
                                            </path>
                                            <path
                                                d="M37.974 19.869c-.025-2.581 2.126-3.837 2.225-3.896-1.218-1.767-3.104-2.008-3.769-2.027-1.584-.164-3.123.945-3.933.945-.823 0-2.065-.927-3.404-.898-1.728.024-3.342 1.018-4.227 2.558-1.824 3.143-.463 7.76 1.285 10.3.878 1.245 1.9 2.635 3.24 2.586 1.308-.054 1.797-.83 3.378-.83 1.567 0 2.025.83 3.391.8 1.408-.024 2.292-1.252 3.137-2.507 1.01-1.425 1.42-2.83 1.433-2.903-.032-.009-2.727-1.031-2.756-4.128zM36.447 9c-1.02.045-2.296.7-3.03 1.557-.648.757-1.23 1.993-1.08 3.156 1.146.084 2.323-.575 3.056-1.436.706-.876 1.187-2.067 1.054-3.277zM52.427 22.246l1.748-5.112h.049l1.747 5.112h-3.544zm.807-7.05L49 26.848h1.891l1.076-3.15h4.47l1.07 3.15h1.926L55.2 15.195h-1.965zM64.514 25.459c-1.342 0-2.243-1.145-2.243-2.859 0-1.694.901-2.85 2.243-2.85 1.365 0 2.261 1.13 2.261 2.85 0 1.738-.896 2.859-2.261 2.859zm.462-7.195c-1.193 0-2.234.59-2.722 1.502h-.032v-1.414h-1.698V29.66h1.754v-4.207h.041c.504.943 1.472 1.485 2.69 1.485 2.146 0 3.569-1.695 3.569-4.337 0-2.633-1.43-4.336-3.602-4.336zM73.925 25.459c-1.342 0-2.243-1.145-2.243-2.859 0-1.694.901-2.85 2.243-2.85 1.365 0 2.261 1.13 2.261 2.85 0 1.738-.897 2.859-2.261 2.859zm.462-7.195c-1.193 0-2.234.59-2.722 1.502h-.033v-1.414h-1.699V29.66h1.756v-4.207h.04c.505.943 1.473 1.485 2.691 1.485 2.146 0 3.569-1.695 3.569-4.337 0-2.633-1.43-4.336-3.602-4.336zM88.003 20.266l-1.292-.314c-1.512-.373-2.13-.857-2.13-1.68 0-1.035.97-1.745 2.381-1.745 1.414 0 2.382.702 2.489 1.865h1.771C91.167 16.382 89.466 15 86.988 15c-2.504 0-4.269 1.382-4.269 3.392 0 1.625 1.003 2.627 3.154 3.143l1.52.364c1.52.37 2.162.913 2.162 1.817 0 1.041-1.064 1.801-2.544 1.801-1.543 0-2.672-.76-2.8-1.914h-1.8c.114 2.108 1.87 3.44 4.471 3.44 2.78 0 4.53-1.366 4.53-3.547 0-1.703-1.004-2.663-3.41-3.23zM95.197 16.34h-1.764v2.013h-1.24v1.38h1.24v4.872c0 1.646.675 2.293 2.406 2.293.39 0 .78-.033.975-.082v-1.37a6.37 6.37 0 01-.577.038c-.712 0-1.04-.338-1.04-1.066v-4.684h1.626v-1.381h-1.626v-2.012zM101.819 25.517c-1.423 0-2.267-1.075-2.267-2.918 0-1.823.844-2.915 2.267-2.915s2.271 1.083 2.271 2.915c0 1.843-.848 2.918-2.271 2.918zm0-7.269c-2.47 0-4.055 1.68-4.055 4.351 0 2.682 1.569 4.356 4.055 4.356 2.487 0 4.057-1.674 4.057-4.356 0-2.67-1.578-4.35-4.057-4.35zM109.037 19.798h-.039v-1.446h-1.676v8.497h1.755V21.81c0-1.196.7-1.955 1.83-1.955.341 0 .649.049.787.105v-1.632a2.746 2.746 0 00-.6-.064c-1.006 0-1.786.572-2.057 1.534zM113.854 21.817c.09-1.284.966-2.155 2.177-2.155 1.219 0 2.057.856 2.097 2.155h-4.274zm2.177-3.57c-2.403 0-3.958 1.731-3.958 4.393 0 2.658 1.545 4.316 4.032 4.316 1.935 0 3.446-1.06 3.682-2.601h-1.665c-.238.735-1.001 1.193-1.976 1.193-1.381 0-2.3-.952-2.3-2.407v-.104h6.038v-.598c0-2.578-1.487-4.191-3.853-4.191z">
                                            </path>
                                        </g>
                                    </svg></a>
                                <a href="https://play.google.com/store/apps/details?id=br.com.idez.estbank"
                                    onclick='ga("send", "event", "category", "action", "label");' target="_blank"
                                    rel="noreferrer" title="Baixe no Google Play" aria-label="Google Play"
                                    data-footer="download-google-play" class="nav-svg"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="undefined icon icon--social fill-undefined"
                                        style="width:150px;height:45px" viewBox="0 0 143 42">
                                        <g fill-rule="evenodd" clip-rule="evenodd">
                                            <path
                                                d="M.5 9A8.5 8.5 0 019 .5h125a8.5 8.5 0 018.5 8.5v24a8.5 8.5 0 01-8.5 8.5H9A8.5 8.5 0 01.5 33V9zM9 1.5A7.5 7.5 0 001.5 9v24A7.5 7.5 0 009 40.5h125a7.5 7.5 0 007.5-7.5V9a7.5 7.5 0 00-7.5-7.5H9z">
                                            </path>
                                            <path
                                                d="M52.281 19.617v1.688h4.047c-.122.949-.438 1.64-.921 2.123-.59.586-1.511 1.235-3.126 1.235-2.492 0-4.439-2.004-4.439-4.488 0-2.484 1.947-4.488 4.44-4.488 1.343 0 2.322.527 3.048 1.205l1.195-1.19C55.51 14.738 54.168 14 52.28 14 48.87 14 46 16.772 46 20.175s2.869 6.175 6.281 6.175c1.84 0 3.23-.602 4.318-1.733 1.118-1.114 1.465-2.68 1.465-3.947 0-.39-.03-.752-.09-1.053h-5.693zM71.393 24.783c-1.208 0-2.25-.994-2.25-2.41 0-1.43 1.042-2.409 2.25-2.409s2.252.978 2.252 2.41c0 1.415-1.044 2.41-2.252 2.41zm0-6.384c-2.203 0-4.002 1.67-4.002 3.975 0 2.29 1.8 3.975 4.002 3.975 2.204 0 4.003-1.686 4.003-3.975 0-2.304-1.799-3.975-4.003-3.975zM62.664 24.783c-1.208 0-2.25-.994-2.25-2.41 0-1.43 1.042-2.409 2.25-2.409s2.252.978 2.252 2.41c0 1.415-1.044 2.41-2.252 2.41zm0-6.384c-2.203 0-4.002 1.67-4.002 3.975 0 2.29 1.799 3.975 4.002 3.975 2.204 0 4.003-1.686 4.003-3.975 0-2.304-1.799-3.975-4.003-3.975zM80.1 24.783c-1.208 0-2.22-1.008-2.22-2.395 0-1.4 1.012-2.424 2.22-2.424 1.193 0 2.13 1.024 2.13 2.424 0 1.387-.937 2.395-2.13 2.395zm2.01-5.498h-.061c-.394-.465-1.147-.886-2.1-.886-1.991 0-3.82 1.746-3.82 3.99 0 2.228 1.829 3.96 3.82 3.96.953 0 1.706-.422 2.1-.903h.06v.57c0 1.523-.816 2.336-2.13 2.336-1.071 0-1.735-.77-2.008-1.415l-1.524.632c.436 1.055 1.599 2.35 3.532 2.35 2.053 0 3.79-1.206 3.79-4.144v-7.137h-1.66v.647zM84.977 26.11h1.75V14.423h-1.75V26.11zM89.311 22.252c-.045-1.534 1.193-2.316 2.083-2.316.695 0 1.284.345 1.481.842l-3.564 1.474zm5.435-1.324c-.333-.889-1.342-2.53-3.413-2.53-2.052 0-3.758 1.61-3.758 3.974 0 2.229 1.691 3.978 3.956 3.978 1.827 0 2.882-1.116 3.323-1.763l-1.36-.903c-.454.661-1.073 1.098-1.963 1.098-.892 0-1.526-.405-1.933-1.205l5.331-2.197-.183-.452zM102.998 20.055h-2.489v-4.006h2.489c1.306 0 2.05 1.08 2.05 2.002 0 .906-.744 2.004-2.05 2.004zm-.045-5.632h-4.192v11.685h1.748v-4.427h2.444c1.938 0 3.843-1.4 3.843-3.63s-1.905-3.628-3.843-3.628zM107.761 26.11h1.748V14.423h-1.748V26.11zM113.594 24.78c-.574 0-1.37-.284-1.37-.992 0-.903.993-1.248 1.852-1.248.769 0 1.131.165 1.599.393a2.117 2.117 0 01-2.081 1.847zm.211-6.405c-1.267 0-2.578.557-3.121 1.792l1.553.645c.331-.645.951-.858 1.599-.858.903 0 1.823.542 1.839 1.504v.12c-.316-.18-.995-.45-1.823-.45-1.675 0-3.376.915-3.376 2.63 0 1.564 1.368 2.57 2.906 2.57 1.176 0 1.825-.525 2.234-1.142h.059v.903h1.689v-4.48c0-2.075-1.554-3.234-3.559-3.234zM121.508 23.698h-.06l-2.082-5.065h-1.881l3.118 7.08-1.778 3.94h1.823l4.811-11.02h-1.945l-2.006 5.065zM17.495 9.137a1 1 0 01.994-.01l18.946 10.629c1.362.764 1.362 2.724 0 3.488L18.489 33.872A1 1 0 0117 33V10a1 1 0 01.495-.863zm6.06 5.126l5.662 5.805 1.657-1.7-7.32-4.105zm9.125 5.119L30.614 21.5l2.066 2.118 3.776-2.118-3.776-2.118zm-1.806 5.25l-1.657-1.7-5.662 5.805 7.32-4.106zM19 30.541V12.458l8.82 9.043L19 30.543z">
                                            </path>
                                        </g>
                                    </svg></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
</section>
</div>
</section>










@endsection