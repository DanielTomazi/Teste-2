    @extends('menu') @section('conteudo')

    <section class="banner-estbank section-one">
    <img class="only-desktop" src="/img/HOME/empresa-banner.png" alt="Banner EstBank">
    </section>

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

    {{-- FIM DOS CARDS --}} {{-- Para empresas --}}
    <section>
    <div class="container">
        <section class="section-apresentation-content py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="style__ImgSize-sc-844pq-1 dWxXah col-12 col-md-6 offset-lg-1 order-md-last">
                        <div class="mb-4" style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                            <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>
                            <picture>
                                <source srcset="/img/HOME/man-loan.webp 160w,
                                                /img/HOME/man-loan.webp 320w,
                                                /img/HOME/man-loan.webp 640w"
                                        sizes="(max-width: 500px) 100vw, 500px">
                                <img sizes="(max-width: 500px) 100vw, 500px"
                                     srcset="/img/HOME/man-loan.webp 160w,
                                             /img/HOME/man-loan.webp 320w,
                                             /img/HOME/man-loan.webp 640w"
                                     src="/img/HOME/man-loan.webp"
                                     loading="lazy"
                                     style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;"
                                     alt="Homem com uma mulher olhando pc">
                            </picture>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5 mb-md-5">
                        <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-2 fw-600 tag-section span-geral mb-2 order-sm-first d-none d-md-flex">
                            Emprestimos
                        </p>
                        <h2 style="opacity: 1;" class="fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50">
                            Solução financeira completa com EstBank, oferecemos opções de crédito com taxas competitivas
                        </h2>
                        <p class="section-resumo-text fs-18 lh-22 mt-4" style="opacity: 1; margin-bottom: 16px;">
                        <strong>Emprestimo Consignado Publico:</strong> Simplifique suas finanças com um empréstimo descontado direto da folha, tendo facilidade e rapidez na contratação, taxas de juros atrativas e parcelas descontadas na folha de pagamento.
                        </p>
                        <p class="section-resumo-text fs-18 lh-22 mt-4" style="opacity: 1;">
                        <strong>Emprestimo Consignado Privado e adiantamento salarial:</strong> Simplifique suas finanças com um empréstimo descontado direto da folha com carteira assinada em uma empresa parceira, parcelas descontadas da folha de pagamento, taxas menores e facilidade na contratação.
                        </p>

                        <div style="opacity: 1;">
                            <a onclick='ga("send", "event", "category", "action", "label");' data-home="parceria-oab" title="Saiba mais sobre a parceria OAB" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="/emprestimo">
                                Consulte o serviço
                            </a>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</section>


    {{-- Adquirência --}}

    <section class="mb-md-5">
    <div class="container">
        <section class="section-apresentation-content py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="style__ImgSize-sc-844pq-1 dWxXah col-12 col-md-6 offset-lg-1 order-md-last">
                        <div class="mb-4" style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                            <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>
                            <picture>
                                <source srcset="/img/HOME/homem-segurando-pos.webp 160w,
                                                /img/HOME/homem-segurando-pos.webp 320w,
                                                /img/HOME/homem-segurando-pos.webp 640w"
                                        sizes="(max-width: 500px) 100vw, 500px">
                                <img sizes="(max-width: 500px) 100vw, 500px"
                                     srcset="/img/HOME/homem-segurando-pos.webp 160w,
                                             /img/HOME/homem-segurando-pos.webp 320w,
                                             /img/HOME/homem-segurando-pos.webp 640w"
                                     src="/img/HOME/homem-segurando-pos.webp"
                                     loading="lazy"
                                     style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;"
                                     alt="Homem segurando uma máquina de cartão">
                            </picture>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5 mb-md-5">
                        <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-2 fw-600 tag-section span-geral mb-2 order-sm-first d-none d-md-flex">
                            Adquirência
                        </p>
                        <h2 style="opacity: 1;" class="fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50">
                            Solução ideal para PF e PJ
                        </h2>
                        <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">
                        <strong>Gestão financeira descomplicada:</strong> Oferecemos segurança e praticidade na gestão financeira do seu negócio.
                        </p>
                        <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">
                        <strong>Receba em até 1 dia útil:</strong> Aceite subsídio e crédito na maquininha, parcele em até 21 vezes e receba o pagamento no próximo dia útil, até as 9h da manhã.
                        </p>
                        <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">
                        <strong>Parcelamento Flexível:</strong> Receba e parcele qualquer boleto de consumo em até 21 vezes, seja com cartões próprios ou de CPF's diferentes.
                        </p>
                        <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">
                        <strong>Sem custos de aluguel:</strong> Esqueça mensalidades, aluguel ou comodato.
                        </p>
                        <div style="opacity: 1;">
                            <a onclick='ga("send", "event", "category", "action", "label");' data-home="parceria-oab" title="Saiba mais sobre a parceria OAB" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="/adquirencia">
                                Saiba mais sobre a parceria
                            </a>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

    {{-- Assitencias --}}

    <section class="mb-md-5">
    <div class="container">
        <section class="section-apresentation-content py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="style__ImgSize-sc-844pq-1 dWxXah col-12 col-md-6 offset-lg-1 order-md-last">
                        <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-3 fw-600 tag-section span-geral mb-2 order-sm-first d-sm-flex d-md-none d-lg-none d-xl-none order-first">
                            EstBank & OAB
                        </p>
                        <div class="mb-4" style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                            <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>
                            <picture>
                                <source srcset="/img/HOME/advogado-oab.webp 160w,
                                    /img/HOME/advogado-oab.webp 320w,
                                    /img/HOME/advogado-oab.webp 640w" sizes="(max-width: 500px) 100vw, 500px">
                                <img sizes="(max-width: 500px) 100vw, 500px" srcset="/img/HOME/advogado-oab.webp 160w,
                                    /img/HOME/advogado-oab.webp 320w,
                                    /img/HOME/advogado-oab.webp 640w" src="/img/HOME/advogado-oab.webp" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Imagem relacionada a advogados e OAB">
                            </picture>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 mb-md-5">
                        <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-2 fw-600 tag-section span-geral mb-2 order-sm-first d-none d-md-flex">
                            EstBank & OAB
                        </p>
                        <h2 style="opacity: 1;" class="fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50">
                            Uma parceria de sucesso
                        </h2>
                        <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">
                            Com o EstBank, a Ordem dos Advogados do Brasil do Ceará (OAB-CE) agora oferece parcelamento de custas judiciais e honorários advocatícios, com exclusividade em todo o estado.
                        </p>
                        <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">
                            Nossos serviços proporcionam maior flexibilidade e praticidade aos profissionais de Direito, conforme destacado pelo presidente da entidade, Erinaldo Dantas.
                        </p>
                        <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">
                            Parcelamento em até 21x e até 4 cartões diferentes!
                        </p>
                        <div style="opacity: 1;">
                            <a onclick='ga("send", "event", "category", "action", "label");' data-home="parceria-oab" title="Saiba mais sobre a parceria OAB" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="https://pagamentos.estbank.com.br/advogados">
                                Saiba mais sobre a parceria
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>


    {{-- Emprestimo --}}
    <section>
        <div class="container">
            <section class="section-apresentation-content py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="style__ImgSize-sc-844pq-1 dWxXah col-12 col-md-6 offset-lg-1 order-md-last">
                            <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-3 fw-600 tag-section span-geral mb-2 order-sm-first d-sm-flex d-md-none d-lg-none d-xl-none order-first">
                                EstBank Empréstimos</p>
                            <div class="mb-4" style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                                <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>

                                <picture>
                                    <source srcset="/img/HOME/cartorio-home.webp 160w,
                                        /img/HOME/cartorio-home.webp 320w,
                                        /img/HOME/cartorio-home.webp 640w" sizes="(max-width: 500px) 100vw, 500px">
                                    <img sizes="(max-width: 500px) 100vw, 500px" srcset="/img/HOME/cartorio-home.webp 160w,
                                        /img/HOME/cartorio-home.webp 320w,
                                        /img/HOME/cartorio-home.webp 640w" src="/img/EMPRESTIMO/FGTSMan" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Homem sentado com uma mulher de frente para um computador">
                                </picture>
                                <noscript>
                                    <picture>
                                        <source srcset="/img/HOME/cartorio-home.webp 160w,
                                            /img/HOME/cartorio-home.webp.webp 320w,
                                            /img/HOME/cartorio-home.webp 640w" sizes="(max-width: 500px) 100vw, 500px" />
                                        <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="/img/HOME/cartorio-home.webp 160w,
                                            /img/HOME/cartorio-home.webp 320w,
                                            /img/HOME/cartorio-home.webp 640w" src="/img/HOME/man-loan.webp" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px" alt="Homem sentado com uma mulher de frente para um computador" />
                                    </picture>
                                </noscript>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 mb-md-5">
                            <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-2 fw-600 tag-section span-geral mb-2 order-sm-first d-none d-md-flex">
                                Parcelamento</p>
                            <h2 class="title-content-itens" style="opacity: 1;" class="fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50"><span class="d-block d-md-inline  title-products">Cartórios</span></h2>
                            <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">Agora, oferecemos a possibilidade de parcelamento em até 21 vezes mo cartão de crédito, diretamente na maquininha. Os clientes podem dividir os valores das custas e emulamentos cartorários de forma rápida, fácil e segura.
                            </p>
                            <div style="opacity: 1;">
                                <a onclick='ga("send", "event", "category", "action", "label");' data-home="conheca-o-emprestimo-estbank" title="Conheça o empréstimo Estbank" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="https://cartorio.estbank.com.br/">
                                    Conheça essa iniciativa
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    {{-- Emprestimo --}}
    <section>
        <div class="container">
            <section class="section-apresentation-content py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="style__ImgSize-sc-844pq-1 dWxXah col-12 col-md-6 offset-lg-1 order-md-last">
                            <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-3 fw-600 tag-section span-geral mb-2 order-sm-first d-sm-flex d-md-none d-lg-none d-xl-none order-first">
                                EstBank Transf. Lote</p>
                            <div class="mb-4" style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                                <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>

                                <picture>
                                    <source srcset="/img/HOME/folha-pagamento.webp 160w,
                                        /img/HOME/folha-pagamento.webp 320w,
                                        /img/HOME/folha-pagamento.webp 640w" sizes="(max-width: 500px) 100vw, 500px">
                                    <img sizes="(max-width: 500px) 100vw, 500px" srcset="/img/HOME/cartorio-home.webp 160w,
                                        /img/HOME/folha-pagamento.webp 320w,
                                        /img/HOME/folha-pagamento.webp 640w" src="/img/EMPRESTIMO/FGTSMan" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Homem sentado com uma mulher de frente para um computador">
                                </picture>
                                <noscript>
                                    <picture>
                                        <source srcset="/img/HOME/folha-pagamento.webp 160w,
                                            /img/HOME/folha-pagamento.webp.webp 320w,
                                            /img/HOME/folha-pagamento.webp 640w" sizes="(max-width: 500px) 100vw, 500px" />
                                        <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="/img/HOME/folha-pagamento.webp 160w,
                                            /img/HOME/folha-pagamento.webp 320w,
                                            /img/HOME/folha-pagamento.webp 640w" src="/img/HOME/folha-pagamento.webp" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px" alt="Homem sentado com uma mulher de frente para um computador" />
                                    </picture>
                                </noscript>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 mb-md-5">
                            <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-2 fw-600 tag-section span-geral mb-2 order-sm-first d-none d-md-flex">
                                Para sua empresa</p>
                            <h2 class="title-content-itens" style="opacity: 1;" class="fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50"><span class="d-block d-md-inline  title-products">Folha de pagamento</span></h2>
                            <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">A solução da EstBank para folha de pagamento oferece praticidade e segurança no processamento salarial e em outras demandas. Com integração direta à conta EstBank, permite o pagamento de colaboradores de forma automatizada, rápida e conforme a legislação vigente. Ideal para empresas que buscam agilidade, redução de erros e controle eficiente da gestão de pessoal.
                            </p>
                            <div style="opacity: 1;">
                                <a onclick='ga("send", "event", "category", "action", "label");' data-home="conheca-o-emprestimo-estbank" title="Conheça o empréstimo Estbank" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="https://estbank.idez.com.br/batch-transfers">
                                    Verificar produto
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    {{-- Cartão Beneficios --}}
    <section>
        <div class="container">
            <section class="section-apresentation-content py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="style__ImgSize-sc-844pq-1 dWxXah col-12 col-md-6 offset-lg-1 order-md-last">
                            <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-3 fw-600 tag-section span-geral mb-2 order-sm-first d-sm-flex d-md-none d-lg-none d-xl-none order-first">
                                EstBank Transf. Lote</p>
                            <div class="mb-4" style="position: relative; overflow: hidden; max-width: 500px; max-height: 478px;">
                                <div aria-hidden="true" style="width: 100%; padding-bottom: 75%;"></div>

                                <picture>
                                    <source srcset="/img/HOME/cart-beneficios.jpg 160w,
                                        /img/HOME/cart-beneficios.jpg 320w,
                                        /img/HOME/cart-beneficios.jpg 640w" sizes="(max-width: 500px) 100vw, 500px">
                                    <img sizes="(max-width: 500px) 100vw, 500px" srcset="/img/HOME/cart-beneficios.jpg 160w,
                                        /img/HOME/cart-beneficios.jpg 320w,
                                        /img/HOME/cart-beneficios.jpg 640w" src="/img/EMPRESTIMO/FGTSMan" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s; border-radius:15px;" alt="Homem sentado com uma mulher de frente para um computador">
                                </picture>
                                <noscript>
                                    <picture>
                                        <source srcset="/img/HOME/cart-beneficios.jpg 160w,
                                            /img/HOME/cart-beneficios.jpg 320w,
                                            /img/HOME/cart-beneficios.jpg 640w" sizes="(max-width: 500px) 100vw, 500px" />
                                        <img loading="lazy" sizes="(max-width: 640px) 100vw, 640px" srcset="/img/HOME/cart-beneficios.png 160w,
                                            /img/HOME/cart-beneficios.jpg 320w,
                                            /img/HOME/cart-beneficios.jpg 640w" src="/img/HOME/cart-beneficios.jpg" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center;  border-radius:15px" alt="Homem sentado com uma mulher de frente para um computador" />
                                    </picture>
                                </noscript>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 mb-md-5">
                            <p style="opacity: 1;" class="fs-16 fs-md-20 fs-xl-24 lh-20 lh-md-25 lh-xl-30 mt-4 mt-md-0 mb-2 fw-600 tag-section span-geral mb-2 order-sm-first d-none d-md-flex">
                                Para funcionários</p>
                            <h2 class="title-content-itens" style="opacity: 1;" class="fs-24 fs-lg-32 fs-xl-40 lh-30 lh-lg-40 lh-xl-50"><span class="d-block d-md-inline  title-products">Cartão de beneficios</span></h2>
                            <p class="section-resumo-text" style="opacity: 1;" class="fs-18 lh-22 mt-4">O Cartão de Benefícios EstBank é a solução completa e moderna para valorizar seus colaboradores com mais liberdade e praticidade. Diferente dos modelos tradicionais, nosso cartão é flexível e unificado, permitindo que o saldo seja utilizado de forma inteligente em diversas categorias: alimentação, refeição, mobilidade, cultura, saúde e bem-estar.
                            </p>
                            <div style="opacity: 1;">
                                <a onclick='ga("send", "event", "category", "action", "label");' data-home="conheca-o-emprestimo-estbank" title="Conheça o empréstimo Estbank" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="https://apps.apple.com/br/app/estcard/id6744946755">
                                    Baixe o aplicativo na App Store
                                </a>
                                <a onclick='ga("send", "event", "category", "action", "label");' data-home="conheca-o-emprestimo-estbank" title="Conheça o empréstimo Estbank" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="https://play.google.com/store/apps/details?id=br.com.idez.estcard">
                                    Baixe o aplicativo na Play Store
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>



    <section class="py-5">
        <div class="container py-2 py-md-2" style="background: #a03234; border-radius: 30px;">
            <div class="row d-flex align-items-center justify-content-center py-5">
                <div class="container col-12 col-md-6 col-lg-4 justify-content-center offset-lg-1 title-conta-digital-pf">
                    <h3 style="opacity: 1;" class="fs-24 lh-30 fs-lg-32 fs-xl-40 lh-lg-40 lh-xl-50 text-center text-md-left text-lg-left text-xl-left d-flex mockup-title font-weight-bold">
                        Abra sua conta hoje, e comece a usar!</h3>

                    <div style="opacity: 1; width: 100%;" class="d-flex justify-content-center justify-content-md-start">
                        <a onclick='ga("send", "event", "category", "action", "label");' data-home="conhecer-a-conta-digital-PJ" title="Abra sua conta" class="btn button-open-account-extra-white btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" data-name="Abra sua conta" href="https://estbank.zendesk.com/hc/pt-br/articles/4404548776603-Como-criar-uma-conta-EstBank" target="_b lank">
                            Abra sua conta
                        </a>
                    </div>

                    <p style="opacity: 1;" class="fs-18 lh-22 text-grayscale--400 mt-4 text-center text-md-left text-lg-left text-xl-left d-flex d-flex justify-content-md-start justify-content-center">
                        Ou baixe nosso aplicativo:</p>

                    <div class="mt-2 mb-5 d-flex justify-content-center justify-content-md-start">
                        <div class="google-play" style="margin-right: 10px;">
                            <a onclick='ga("send", "event", "category", "action", "label");' href="https://play.google.com/store/apps/details?id=br.com.idez.estbank&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" target="blank" title="Baixar o aplicativo para Android" data-name="baixar-para-android">
                                <svg xmlns="http://www.w3.org/2000/svg" width="142" height="41" viewBox="0 0 142 41">
                                    <g id="svgexport-19_1_" data-name="svgexport-19 (1)" transform="translate(-0.5 -0.5)">
                                        <path id="Caminho_3" data-name="Caminho 3" d="M.5,9A8.5,8.5,0,0,1,9,.5H134A8.5,8.5,0,0,1,142.5,9V33a8.5,8.5,0,0,1-8.5,8.5H9A8.5,8.5,0,0,1,.5,33ZM9,1.5A7.5,7.5,0,0,0,1.5,9V33A7.5,7.5,0,0,0,9,40.5H134a7.5,7.5,0,0,0,7.5-7.5V9A7.5,7.5,0,0,0,134,1.5Z" fill="#fff" fill-rule="evenodd" />
                                        <path id="Caminho_4" data-name="Caminho 4" d="M52.281,19.617v1.688h4.047a3.525,3.525,0,0,1-.921,2.123,4.157,4.157,0,0,1-3.126,1.235,4.488,4.488,0,0,1,0-8.976,4.316,4.316,0,0,1,3.048,1.205l1.195-1.19A5.916,5.916,0,0,0,52.28,14a6.176,6.176,0,1,0,0,12.35A5.666,5.666,0,0,0,56.6,24.617a5.562,5.562,0,0,0,1.465-3.947,5.52,5.52,0,0,0-.09-1.053H52.281Zm19.112,5.166a2.415,2.415,0,1,1,2.252-2.409,2.3,2.3,0,0,1-2.252,2.409Zm0-6.384a3.975,3.975,0,1,0,4,3.975A3.924,3.924,0,0,0,71.393,18.4Zm-8.729,6.384a2.415,2.415,0,1,1,2.252-2.409,2.3,2.3,0,0,1-2.252,2.409Zm0-6.384a3.975,3.975,0,1,0,4,3.975A3.924,3.924,0,0,0,62.664,18.4ZM80.1,24.783a2.284,2.284,0,0,1-2.22-2.4,2.3,2.3,0,0,1,2.22-2.424,2.243,2.243,0,0,1,2.13,2.424A2.224,2.224,0,0,1,80.1,24.783Zm2.01-5.5h-.061a2.773,2.773,0,0,0-2.1-.886,3.978,3.978,0,0,0,0,7.95,2.726,2.726,0,0,0,2.1-.9h.06v.57a2.039,2.039,0,0,1-2.13,2.336,2.211,2.211,0,0,1-2.008-1.415l-1.524.632a3.793,3.793,0,0,0,3.532,2.35c2.053,0,3.79-1.206,3.79-4.144V18.638h-1.66v.647Zm2.867,6.825h1.75V14.423h-1.75Zm4.334-3.858a2.182,2.182,0,0,1,2.083-2.316,1.546,1.546,0,0,1,1.481.842l-3.564,1.474Zm5.435-1.324a3.7,3.7,0,0,0-3.413-2.53,3.781,3.781,0,0,0-3.758,3.974,3.9,3.9,0,0,0,3.956,3.978,3.976,3.976,0,0,0,3.323-1.763l-1.36-.9a2.283,2.283,0,0,1-1.963,1.1,2.024,2.024,0,0,1-1.933-1.2l5.331-2.2ZM103,20.055h-2.489V16.049H103a2,2,0,1,1,0,4.006Zm-.045-5.632H98.761V26.108h1.748V21.681h2.444a3.635,3.635,0,1,0,0-7.258Zm4.808,11.687h1.748V14.423h-1.748Zm5.833-1.33c-.574,0-1.37-.284-1.37-.992,0-.9.993-1.248,1.852-1.248a3.1,3.1,0,0,1,1.6.393,2.117,2.117,0,0,1-2.081,1.847Zm.211-6.405a3.284,3.284,0,0,0-3.121,1.792l1.553.645a1.663,1.663,0,0,1,1.6-.858,1.685,1.685,0,0,1,1.839,1.5v.12a3.881,3.881,0,0,0-1.823-.45c-1.675,0-3.376.915-3.376,2.63a2.7,2.7,0,0,0,2.906,2.57,2.475,2.475,0,0,0,2.234-1.142h.059v.9h1.689v-4.48C117.364,19.534,115.81,18.375,113.805,18.375Zm7.7,5.323h-.06l-2.082-5.065h-1.881l3.118,7.08-1.778,3.94h1.823l4.811-11.02h-1.945L121.508,23.7ZM17.5,9.137a1,1,0,0,1,.994-.01L37.435,19.756a2,2,0,0,1,0,3.488L18.489,33.872A1,1,0,0,1,17,33V10a1,1,0,0,1,.495-.863Zm6.06,5.126,5.662,5.805,1.657-1.7-7.32-4.1Zm9.125,5.119L30.614,21.5l2.066,2.118L36.456,21.5Zm-1.806,5.25-1.657-1.7-5.662,5.805,7.32-4.106ZM19,30.541V12.458L27.82,21.5,19,30.543Z" fill="#fff" fill-rule="evenodd" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="apple-store">
                            <a onclick='ga("send", "event", "category", "action", "label");' href="https://apps.apple.com/br/app/estbank/id1615822147" target="blank" title="Baixar o aplicativo para IOS" data-name="baixar-no-iphone-ipad">
                                <svg xmlns="http://www.w3.org/2000/svg" width="142" height="41" viewBox="0 0 142 41">
                                    <g id="svgexport-18" transform="translate(-0.5 -0.5)">
                                        <path id="Caminho_5" data-name="Caminho 5" d="M.5,9A8.5,8.5,0,0,1,9,.5H134A8.5,8.5,0,0,1,142.5,9V33a8.5,8.5,0,0,1-8.5,8.5H9A8.5,8.5,0,0,1,.5,33ZM9,1.5A7.5,7.5,0,0,0,1.5,9V33A7.5,7.5,0,0,0,9,40.5H134a7.5,7.5,0,0,0,7.5-7.5V9A7.5,7.5,0,0,0,134,1.5Z" fill="#fff" fill-rule="evenodd" />
                                        <path id="Caminho_6" data-name="Caminho 6" d="M37.974,19.869a4.638,4.638,0,0,1,2.225-3.9,4.79,4.79,0,0,0-3.769-2.027c-1.584-.164-3.123.945-3.933.945s-2.065-.927-3.4-.9a5.019,5.019,0,0,0-4.227,2.558c-1.824,3.143-.463,7.76,1.285,10.3.878,1.245,1.9,2.635,3.24,2.586,1.308-.054,1.8-.83,3.378-.83s2.025.83,3.391.8c1.408-.024,2.292-1.252,3.137-2.507A10.16,10.16,0,0,0,40.73,24a4.489,4.489,0,0,1-2.756-4.128ZM36.447,9a4.692,4.692,0,0,0-3.03,1.557,4.347,4.347,0,0,0-1.08,3.156,3.88,3.88,0,0,0,3.056-1.436A4.552,4.552,0,0,0,36.447,9Zm15.98,13.246,1.748-5.112h.049l1.747,5.112H52.427Zm.807-7.05L49,26.848h1.891l1.076-3.15h4.47l1.07,3.15h1.926L55.2,15.195H53.235Zm11.28,10.263c-1.342,0-2.243-1.145-2.243-2.859,0-1.694.9-2.85,2.243-2.85,1.365,0,2.261,1.13,2.261,2.85C66.775,24.338,65.879,25.459,64.514,25.459Zm.462-7.195a3.037,3.037,0,0,0-2.722,1.5h-.032V18.352h-1.7V29.66h1.754V25.453h.041a2.9,2.9,0,0,0,2.69,1.485c2.146,0,3.569-1.695,3.569-4.337s-1.43-4.336-3.6-4.336Zm8.949,7.195c-1.342,0-2.243-1.145-2.243-2.859,0-1.694.9-2.85,2.243-2.85,1.365,0,2.261,1.13,2.261,2.85C76.186,24.338,75.289,25.459,73.925,25.459Zm.462-7.195a3.037,3.037,0,0,0-2.722,1.5h-.033V18.352h-1.7V29.66h1.756V25.453h.04a2.907,2.907,0,0,0,2.691,1.485c2.146,0,3.569-1.695,3.569-4.337s-1.43-4.336-3.6-4.336Zm13.616,2-1.292-.314c-1.512-.373-2.13-.857-2.13-1.68,0-1.035.97-1.745,2.381-1.745s2.382.7,2.489,1.865h1.771C91.167,16.382,89.466,15,86.988,15c-2.5,0-4.269,1.382-4.269,3.392,0,1.625,1,2.627,3.154,3.143l1.52.364c1.52.37,2.162.913,2.162,1.817,0,1.041-1.064,1.8-2.544,1.8-1.543,0-2.672-.76-2.8-1.914h-1.8c.114,2.108,1.87,3.44,4.471,3.44,2.78,0,4.53-1.366,4.53-3.547,0-1.7-1-2.663-3.41-3.23ZM95.2,16.34H93.433v2.013h-1.24v1.38h1.24V24.6c0,1.646.675,2.293,2.406,2.293a4.805,4.805,0,0,0,.975-.082v-1.37q-.287.032-.577.038c-.712,0-1.04-.338-1.04-1.066V19.734h1.626V18.353H95.2V16.341Zm6.622,9.177c-1.423,0-2.267-1.075-2.267-2.918,0-1.823.844-2.915,2.267-2.915s2.271,1.083,2.271,2.915-.848,2.918-2.271,2.918Zm0-7.269c-2.47,0-4.055,1.68-4.055,4.351s1.569,4.356,4.055,4.356,4.057-1.674,4.057-4.356-1.578-4.35-4.057-4.35Zm7.218,1.55H109V18.352h-1.676v8.5h1.755V21.81a1.763,1.763,0,0,1,1.83-1.955,2.483,2.483,0,0,1,.787.1V18.328a2.746,2.746,0,0,0-.6-.064A2.04,2.04,0,0,0,109.037,19.8Zm4.817,2.019a2.157,2.157,0,0,1,2.177-2.155,2.049,2.049,0,0,1,2.1,2.155Zm2.177-3.57c-2.4,0-3.958,1.731-3.958,4.393s1.545,4.316,4.032,4.316c1.935,0,3.446-1.06,3.682-2.6h-1.665a1.938,1.938,0,0,1-1.976,1.193,2.219,2.219,0,0,1-2.3-2.407v-.1h6.038v-.6c0-2.578-1.487-4.191-3.853-4.191Z" fill="#fff" fill-rule="evenodd" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container col-12 col-md-5 col-xl-5 order-first justify-content-center order-md-last order-lg-last order-xl-last">
                    <div style="position: relative; overflow: hidden; max-width: 400px; max-height: 514px;">


                        <div class="" style="position:relative;overflow:hidden;max-width:550px;max-height:499px">

                            <div aria-hidden="true" style="width:100%;padding-bottom:90.57971014492753%"></div>
                            <img aria-hidden="true" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAASCAYAAABb0P4QAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFD0lEQVQ4y0WUCUyUVxDHZ78FI1VAPKpIi3hFiXgQLYoFRauo0ABW4wEWE0UarSAxXvVCUFMjxNoKkVhPJFZRdtldWEQU7IKWqlCkYlQuuVfOBVeg7H7z75M06SSTNy/5vl9m3vxniIThbiAhN4SQ4y98pWQuiJGgHk0oWE/IDBnDd0N28t2lAVxwgKCfRtCOIvywn6D2k3DHi3D9S2LtSho03CZqy4ukvuxA+ke3WMKtkdSrXi4+snNCQfBUvre1DOogsCYAnLsmFipy5MwRzhwXLoACluEr/llCnBr0HxAgNFyn1t9P2Fh+Ffe0oW6yblW6pSDCyDlrLLjkCb7oMIDfxoFV88H6UDNr1ncgw7+QM719kLGAcEckcnMpISuYKCFsGb2v1Ng25h0k+WeaZC7cY+yqMeB97nFYDg4Dn5RkvjIWnGzDnEwyrroBGd8CmVHgOyH9rJ7jwZlexOqvJPydRrTuMyW19YGKdKqprZWFZR0vBSwpsL9vB8n93xNb90vMh4kRR+AEEZ8j5vNDmFO9+pCxFZy58QJUYaL0DUqLfvtg1YqaqjexXa3NA919Mt4VZ1laNtuhO4y4d6eS+6II1j0CdlQCxyvAKaOYfxnCSCQrXxSZp/veM6cE0IdkPwWyPYneJG4bU3U/HZ1dJnT3dPd3mLrRUlPFNfEhbFxLMEcSeqMkDOwTwFgbIF7JfOpjpnaMJLLgPGHgnP3ugSQHsiQPU5J2BlHLrlnBr85u6W6rr4Kps9naWF+LuvoWfpFyHG82D0fnNgGOsUX/LgWsh5Sw/jQCOK2U5R9t0X52jrEl0de34cwKMp5ZKNHtZaR4F+VOmEpTHkZ/8aIsPwctxnb57csXqH1djbIbKXi8biJqgwmmCAHeM5Stu8hq2uuAiqOLc8STKatOe9PrBD+pPW0Z0aWvbaj8xKIhFeFEDw/TzNzo0TBcOcVVNXVcrM9G+T09nqlUeLg7FCUrJTSuJq7Y4iK/0V5Dc5Ox+mXlq4BB6QnX5dwgGsgWj/SIJLxVEPJnHuMHStSJDCoOB/HT4iK8flaK53otCq6nIjd2Hx7sCMSDC0lIS0qyNtS/xat8TbdqJjlpvYmeJH6nINb7K2DYR8g74Mw6117LCUK/vyT3zCNUb3fHX/dVeJxfCMPNNDzRZqI07z5XPS/j1HNnrfpDm2CMczeI5AilRO/jxoogy1NC3kIxowu9WTMRA3sdZbM/sWmxxKZ5xE2rP8HTy3EoKy1HWVERSv4o5hJDAV6cDLH0JjoDGo+ruDGd+PJ0JSrcBFDjomDNeKH0cS7QuvYh2xWWhJGWD6sVcucShdwxn2BcRPzsWChn3bjGaUejuXytK/dHCslcd4PltscK1nqK8XOX0DWJBEi4xksSLk7XeFZNBrLGwXpxJMzhQhZLSW5d5sgtPjZc5OOE53MV3DSDBhqW2OPDgWGViB47HPGfkmWvo4JvThAZfgRqXUTJ4kx3E/HcGFbPKId+Sr18y63LHDMC7/xtrY3eZG2cTXKtt4O12scOdb6OhraIBS49m0ZTxwZ7BXYLVoriY8n2Yr9NIOgmD7aetbNF1w/aWK+GOuLRrM9ZPbHEfMQZTWJVVq+fJhrlh7q1zueICskY5ELtoU6SKcyOxNT8b9AKYetmCdg0UbaHEoZYktWbCX+Kfadb4YSi5d8YI8cfqY+Y3lO3cXxkffgUMgnJtYaNkZqD7KnFz4a6T64aZP0LTZY0kpPfqVoAAAAASUVORK5CYII=" alt="" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                            <picture>
                                <source srcset="/img/HOME/appLoja125x138.png 138w,
                        /img/HOME/appLojas275x250.png 275w,
                        /img/HOME/appLojas550x499.png 550w" sizes="(max-width: 550px) 100vw, 550px">



                                <img sizes="(max-width: 550px) 100vw, 550px" srcset="/img/HOME/appLoja125x138.png 138w,
                        /img/HOME/appLojas275x250.png 275w,
                        /img/HOME/appLojas550x499.png" src=" /img/HOME/appLojas275x250.png" alt="" loading="lazy" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                            </picture>
                            <noscript>
                                <picture>
                                    <source srcset="/img/HOME/appLoja125x138.png 138w,
                            /img/HOME/appLojas275x250.png 275w,
                            /img/HOME/appLojas550x499.png" sizes="(max-width: 550px) 100vw, 550px" />
                                    <img loading="lazy" sizes="(max-width: 550px) 100vw, 550px" srcset="/img/HOME/appLoja125x138.png 138w,
                            /img/HOME/appLojas275x250.png 275w,
                            /img/HOME/appLojas550x499.png" src="/img/HOME/appLojas550x499.png" alt="" style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                </picture>
                            </noscript>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    

    <style>

    {{-- Banner da empresa para mobile --}}

        @media screen and (max-width: 768px) {
        .only-desktop {
        display: none !important;
            }
        }

    {{-- Visualização de produtos no Mobile --}}

        @media screen and (max-width: 768px) {
  .section-apresentation-content h2,
  .section-apresentation-content p,
  .section-apresentation-content .tag-section {
    text-align: left;
    padding-left: 16px;
    padding-right: 16px;
    font-size: 16px;
    line-height: 1.4;
  }

  .section-apresentation-content h2 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 12px;
  }

  .section-apresentation-content p {
    margin-bottom: 10px;
  }

  .btn {
    margin-left: 16px;
    margin-right: 16px;
    width: calc(100% - 32px);
    text-align: center;
  }
}

    {{-- CSS do Carousel --}}

        .swiper {
            margin-top: 73px;
            width: 100%;
            height: auto;
        }

        /* Caso eu queira alterar o seletor (bolinha) */
        .swiper-pagination span {
            color: brown;
            border: solid 1px white;
            background-color: #fff;
        }

        /* Para alterar o estilo da seta */

        .swiper-button-next,
        .swiper-button-prev {
            /* color: #FFF; */

            color: white;
        }

        .slide-1 {
            background-color: blue;
        }

        .slide-2 {
            background-color: red;
        }

        .slide-3 {
            background-color: green;
        }

        .swiper-button-prev {
            padding-left: 30px;
        }

        .swiper-button-next {
            padding-right: 30px;
        }

        .swiper-slide img {
            max-width: 1550px;
        }
    </style>

    {{-- Javascript do Carousel --}}

    <script>
        const swiper = new Swiper(".swiper", {
            // Optional parameters
            direction: "horizontal",
            loop: true,

            // If we need pagination
            pagination: {
                el: ".swiper-pagination",
                // el: '.hide',
            },

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            // And if we need scrollbar
            scrollbar: {
                el: ".swiper-scrollbar",
            },

            autoplay: {
                delay: 5000,
                disableOnInteraction: true,
            },

            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
        });
    </script>

    {{-- Fim do Javascript do Carousel --}}

    @endsection