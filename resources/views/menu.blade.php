<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NHFC9MC5');</script>
  <!-- End Google Tag Manager -->
  
  


    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title', 'EstBank : Este é o seu banco ')</title>
    <meta name="description"
        content="Reinvente seu mundo com o simples. Assistências, consórcios, câmbio, empréstimos e serviços financeiros rápidos, funcionais e eficientes. EstBank é seu banco 100% real e digital." />
    {{-- Css Geral  --}}
    <link rel="stylesheet" href="./estilo/home.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{-- CDN'S --}}
    {{-- Swipper Carousel CDN  --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"
        integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Carousel OWL --}}
    <!-- font awesome-->
    <script src="https://kit.fontawesome.com/499119dcb1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    {{-- Cookie Alert --}}
    <style>
    .cookieConsentContainer {
        z-index: 999;
        width: 350px;
        min-height: 20px;
        border-radius: 20px;
        box-sizing: border-box;
        padding: 30px 30px 30px 30px;
        background: black;
        overflow: hidden;
        position: fixed;
        bottom: 30px;
        right: 30px;
        display: none
    }

    .cookieConsentContainer .cookieTitle a {
        font-family: OpenSans, arial, sans-serif;
        color: #FFF;
        font-size: 22px;
        line-height: 20px;
        display: block
    }

    .cookieConsentContainer .cookieDesc p {
        margin: 0;
        padding: 0;
        font-family: OpenSans, arial, sans-serif;
        color: #FFF;
        font-size: 13px;
        line-height: 20px;
        display: block;
        margin-top: 10px
    }

    .cookieConsentContainer .cookieDesc a {
        font-family: OpenSans, arial, sans-serif;
        color: #FFF;
        text-decoration: underline
    }

    .cookieConsentContainer .cookieButton a {
        display: inline-block;
        font-family: OpenSans, arial, sans-serif;
        color: #FFF;
        font-size: 14px;
        font-weight: 700;
        margin-top: 14px;
        border-radius: 15px;
        background: #a03234;
        box-sizing: border-box;
        padding: 15px 24px;
        text-align: center;
        transition: background .3s
    }

    .cookieConsentContainer .cookieButton a:hover {
        cursor: pointer;
        background: #FFF
    }

    @media (max-width:980px) {
        .cookieConsentContainer {
            bottom: 0 !important;
            left: 0 !important;
            width: 100% !important
        }
    }
    </style>

</head>

<body>
    <!-- Código google -->
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHFC9MC5"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="logo">
                <h1> <a href="/"><img src="./img/estbank-logo.webp" alt="Logo do Estbank"
                            title="Voltar para página home    " style="min-width: 130px; min-height: 20px;"></i></a>
                </h1>
            </div>
            <div class="d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none d-flex"
                style="width: 50%; justify-content: end">
                <li class="nav-item d-flex justify-content-end " style="text-decoration: none; list-style-type: none;">
                    <a class="nav-link active" href="https://cartorio.estbank.com.br/" target="_blank"
                        style="text-decoration: none; color:#FFF;  background-color:#a03234; border-radius:5px">Cartórios</a>
                </li>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                id="menu-hamburger-icon">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Para você
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/conta-digital-pessoa-fisica">Conta Digital</a>
                            <a class="dropdown-item" href="/emprestimo">Empréstimos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Para o seu negócio
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/conta-digital-pessoa-juridica">Conta Digital</a>
                            <a class="dropdown-item" href="/adquirencia">Maquininhas</a>
                            <a class="dropdown-item" href="https://gwestbank.mobbuyapp.com/boleto">Link de pagamento</a>
                            <a class="dropdown-item" href="/emprestimo">Emprestimo Consignado Privado</a>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Nossos Parceiros
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://cartorio.estbank.com.br/" target="_blank"> Cartório </a>
                            <a class="dropdown-item" href="https://linkdepagamento.estbank.com.br/form" target="_blank"> Imobiliária/Construtora </a>
                            <div class="dropdown-divider"></div> <!-- Linha divisória opcional -->
                            <div class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownSubmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> OAB </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownSubmenu" style="max-height: 200px; overflow-y: auto;">
                                    @php
                                        $oabs = [
                                            'Ceará' => [
                                                'name' => 'OAB-CE',
                                                'link' => 'https://oabce.org.br/',
                                                'isPartner' => true
                                            ],
                                            'Acre' => [
                                                'name' => 'OAB-AC',
                                                'link' => 'https://oabac.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Alagoas' => [
                                                'name' => 'OAB-AL',
                                                'link' => 'https://www.oab-al.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Amazonas' => [
                                                'name' => 'OAB-AM',
                                                'link' => 'https://www.oabam.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Amapá' => [
                                                'name' => 'OAB-AP',
                                                'link' => 'https://www.oabap.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Bahia' => [
                                                'name' => 'OAB-BA',
                                                'link' => 'https://www.oab-ba.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Distrito Federal' => [
                                                'name' => 'OAB-DF',
                                                'link' => 'http://www.oabdf.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Espírito Santo' => [
                                                'name' => 'OAB-ES',
                                                'link' => 'https://www.oabes.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Goiás' => [
                                                'name' => 'OAB-GO',
                                                'link' => 'https://www.oabgo.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Maranhão' => [
                                                'name' => 'OAB-MA',
                                                'link' => 'https://www.oabma.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Minas Gerais' => [
                                                'name' => 'OAB-MG',
                                                'link' => 'https://www.oabmg.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Mato Grosso do Sul' => [
                                                'name' => 'OAB-MS',
                                                'link' => 'https://oabms.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Mato Grosso' => [
                                                'name' => 'OAB-MT',
                                                'link' => 'https://www.oabmt.org.br/',
                                                'isPartner' => false,
                                            ],
                                            'Pará' => [
                                                'name' => 'OAB-PA',
                                                'link' => 'https://www.oabpa.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Paraíba' => [
                                                'name' => 'OAB-PB',
                                                'link' => 'https://www.oabpb.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Pernambuco' => [
                                                'name' => 'OAB-PE',
                                                'link' => 'https://www.oabpe.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Piauí' => [
                                                'name' => 'OAB-PI',
                                                'link' => 'http://www.oabpi.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Parána' => [
                                                'name' => 'OAB-PR',
                                                'link' => 'https://www.oabpr.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Rio de Janeiro' => [
                                                'name' => 'OAB-RJ',
                                                'link' => 'https://www.oabrj.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Rio Grande do Norte' => [
                                                'name' => 'OAB-RN',
                                                'link' => 'https://www.oabrn.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Rondônia' => [
                                                'name' => 'OAB-RO',
                                                'link' => 'https://www.oab-ro.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Roraima' => [
                                                'name' => 'OAB-RR',
                                                'link' => 'https://www.oabrr.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Rio Grande do Sul' => [
                                                'name' => 'OAB-RS',
                                                'link' => 'https://www.oabrs.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Santa Catarina' => [
                                                'name' => 'OAB-SC',
                                                'link' => 'https://www.oab-sc.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Sergipe' => [
                                                'name' => 'OAB-SE',
                                                'link' => 'https://oabsergipe.org.br/',
                                                'isPartner' => false
                                            ],
                                            'São Paulo' => [
                                                'name' => 'OAB-SP',
                                                'link' => 'https://www.oabsp.org.br/',
                                                'isPartner' => false
                                            ],
                                            'Tocantins' => [
                                                'name' => 'OAB-TO',
                                                'link' => 'https://www.oabto.org.br/',
                                                'isPartner' => false
                                            ]
                                        ];
                                    @endphp
                                    @foreach ($oabs as $oab)
                                        @if ($oab['isPartner'])
                                            <a class="dropdown-item" target="_blank" href="{{ $oab['link'] }}">
                                                {{ $oab['name'] }}
                                            </a>
                                        @else
                                            <span class="dropdown-item disabled no-close-dropdown" style="cursor: not-allowed" data-toggle="tooltip" title="Ainda não somos parceiros">
                                                {{ $oab['name'] }} <i class="fas fa-lock"></i>
                                            </span>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    
                     <li class="nav-item">
                        <a class="nav-link active" href="https://gwestbank.mobbuyapp.com/boleto" target="_blank">Pagar Boleto</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="/ajuda">Ajuda</a>
                    </li>
                </ul>
                <div class=" my-lg-0">
                    <a href="https://estbank.idez.com.br/app/signup" target="blank"
                        style="text-decoration: none; color:#FFF;"> <button
                            class="btn btn-outline my-2 my-sm-0 btn-open" type="submit"> Abra sua conta </button></a>
                    <a href="https://estbank.idez.com.br/login" target="blank"> <button
                            class="btn btn-outline my-2 my-sm-0 btn-acess" type="submit">Acessar</button></a>
                </div>
            </div>
        </nav>
    </header>
    @yield('conteudo')
    <!-- Footer -->
    <footer class="footer-main py-5">
        <hr class="hr-root mt-4 mb-5 mx-5">
        <nav class="container">
            <div class="row px-3 px-sm-0">
                <div class="col-12 col-md-3">
                    <h3 class="mb-3"><strong>Baixe o APP</strong></h3>
                    <div class="d-inline-block d-sm-block mb-3 mb-sm-1 me-2 me-sm-3 pl-0">
                        <a href="https://apps.apple.com/br/app/estbank/id1615822147" target="_blank" rel="noreferrer"
                            title="Baixe na App Store" aria-label="App Store" data-footer="download-app-store"
                            class="nav-svg"
                            onclick="gtag('event', 'click', { 'event_category': 'botão', 'event_label': 'meu-botao' });">

                            <svg xmlns="http://www.w3.org/2000/svg" class="undefined icon icon--social fill-undefined"
                                style="width:150px;height:45px" viewBox="0 0 143 42">
                                <g fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M.5 9A8.5 8.5 0 019 .5h125a8.5 8.5 0 018.5 8.5v24a8.5 8.5 0 01-8.5 8.5H9A8.5 8.5 0 01.5 33V9zM9 1.5A7.5 7.5 0 001.5 9v24A7.5 7.5 0 009 40.5h125a7.5 7.5 0 007.5-7.5V9a7.5 7.5 0 00-7.5-7.5H9z">
                                    </path>
                                    <path
                                        d="M37.974 19.869c-.025-2.581 2.126-3.837 2.225-3.896-1.218-1.767-3.104-2.008-3.769-2.027-1.584-.164-3.123.945-3.933.945-.823 0-2.065-.927-3.404-.898-1.728.024-3.342 1.018-4.227 2.558-1.824 3.143-.463 7.76 1.285 10.3.878 1.245 1.9 2.635 3.24 2.586 1.308-.054 1.797-.83 3.378-.83 1.567 0 2.025.83 3.391.8 1.408-.024 2.292-1.252 3.137-2.507 1.01-1.425 1.42-2.83 1.433-2.903-.032-.009-2.727-1.031-2.756-4.128zM36.447 9c-1.02.045-2.296.7-3.03 1.557-.648.757-1.23 1.993-1.08 3.156 1.146.084 2.323-.575 3.056-1.436.706-.876 1.187-2.067 1.054-3.277zM52.427 22.246l1.748-5.112h.049l1.747 5.112h-3.544zm.807-7.05L49 26.848h1.891l1.076-3.15h4.47l1.07 3.15h1.926L55.2 15.195h-1.965zM64.514 25.459c-1.342 0-2.243-1.145-2.243-2.859 0-1.694.901-2.85 2.243-2.85 1.365 0 2.261 1.13 2.261 2.85 0 1.738-.896 2.859-2.261 2.859zm.462-7.195c-1.193 0-2.234.59-2.722 1.502h-.032v-1.414h-1.698V29.66h1.754v-4.207h.041c.504.943 1.472 1.485 2.69 1.485 2.146 0 3.569-1.695 3.569-4.337 0-2.633-1.43-4.336-3.602-4.336zM73.925 25.459c-1.342 0-2.243-1.145-2.243-2.859 0-1.694.901-2.85 2.243-2.85 1.365 0 2.261 1.13 2.261 2.85 0 1.738-.897 2.859-2.261 2.859zm.462-7.195c-1.193 0-2.234.59-2.722 1.502h-.033v-1.414h-1.699V29.66h1.756v-4.207h.04c.505.943 1.473 1.485 2.691 1.485 2.146 0 3.569-1.695 3.569-4.337 0-2.633-1.43-4.336-3.602-4.336zM88.003 20.266l-1.292-.314c-1.512-.373-2.13-.857-2.13-1.68 0-1.035.97-1.745 2.381-1.745 1.414 0 2.382.702 2.489 1.865h1.771C91.167 16.382 89.466 15 86.988 15c-2.504 0-4.269 1.382-4.269 3.392 0 1.625 1.003 2.627 3.154 3.143l1.52.364c1.52.37 2.162.913 2.162 1.817 0 1.041-1.064 1.801-2.544 1.801-1.543 0-2.672-.76-2.8-1.914h-1.8c.114 2.108 1.87 3.44 4.471 3.44 2.78 0 4.53-1.366 4.53-3.547 0-1.703-1.004-2.663-3.41-3.23zM95.197 16.34h-1.764v2.013h-1.24v1.38h1.24v4.872c0 1.646.675 2.293 2.406 2.293.39 0 .78-.033.975-.082v-1.37a6.37 6.37 0 01-.577.038c-.712 0-1.04-.338-1.04-1.066v-4.684h1.626v-1.381h-1.626v-2.012zM101.819 25.517c-1.423 0-2.267-1.075-2.267-2.918 0-1.823.844-2.915 2.267-2.915s2.271 1.083 2.271 2.915c0 1.843-.848 2.918-2.271 2.918zm0-7.269c-2.47 0-4.055 1.68-4.055 4.351 0 2.682 1.569 4.356 4.055 4.356 2.487 0 4.057-1.674 4.057-4.356 0-2.67-1.578-4.35-4.057-4.35zM109.037 19.798h-.039v-1.446h-1.676v8.497h1.755V21.81c0-1.196.7-1.955 1.83-1.955.341 0 .649.049.787.105v-1.632a2.746 2.746 0 00-.6-.064c-1.006 0-1.786.572-2.057 1.534zM113.854 21.817c.09-1.284.966-2.155 2.177-2.155 1.219 0 2.057.856 2.097 2.155h-4.274zm2.177-3.57c-2.403 0-3.958 1.731-3.958 4.393 0 2.658 1.545 4.316 4.032 4.316 1.935 0 3.446-1.06 3.682-2.601h-1.665c-.238.735-1.001 1.193-1.976 1.193-1.381 0-2.3-.952-2.3-2.407v-.104h6.038v-.598c0-2.578-1.487-4.191-3.853-4.191z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="d-inline-block d-sm-block mb-3 mb-sm-1 pl-0">
                        <a href="https://play.google.com/store/apps/details?id=br.com.idez.estbank&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"
                            target="_blank" rel="noreferrer" title="Baixe no Google Play" aria-label="Google Play"
                            data-footer="download-google-play" class="nav-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="undefined icon icon--social fill-undefined"
                                style="width:150px;height:45px" viewBox="0 0 143 42">
                                <g fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M.5 9A8.5 8.5 0 019 .5h125a8.5 8.5 0 018.5 8.5v24a8.5 8.5 0 01-8.5 8.5H9A8.5 8.5 0 01.5 33V9zM9 1.5A7.5 7.5 0 001.5 9v24A7.5 7.5 0 009 40.5h125a7.5 7.5 0 007.5-7.5V9a7.5 7.5 0 00-7.5-7.5H9z">
                                    </path>
                                    <path
                                        d="M52.281 19.617v1.688h4.047c-.122.949-.438 1.64-.921 2.123-.59.586-1.511 1.235-3.126 1.235-2.492 0-4.439-2.004-4.439-4.488 0-2.484 1.947-4.488 4.44-4.488 1.343 0 2.322.527 3.048 1.205l1.195-1.19C55.51 14.738 54.168 14 52.28 14 48.87 14 46 16.772 46 20.175s2.869 6.175 6.281 6.175c1.84 0 3.23-.602 4.318-1.733 1.118-1.114 1.465-2.68 1.465-3.947 0-.39-.03-.752-.09-1.053h-5.693zM71.393 24.783c-1.208 0-2.25-.994-2.25-2.41 0-1.43 1.042-2.409 2.25-2.409s2.252.978 2.252 2.41c0 1.415-1.044 2.41-2.252 2.41zm0-6.384c-2.203 0-4.002 1.67-4.002 3.975 0 2.29 1.8 3.975 4.002 3.975 2.204 0 4.003-1.686 4.003-3.975 0-2.304-1.799-3.975-4.003-3.975zM62.664 24.783c-1.208 0-2.25-.994-2.25-2.41 0-1.43 1.042-2.409 2.25-2.409s2.252.978 2.252 2.41c0 1.415-1.044 2.41-2.252 2.41zm0-6.384c-2.203 0-4.002 1.67-4.002 3.975 0 2.29 1.799 3.975 4.002 3.975 2.204 0 4.003-1.686 4.003-3.975 0-2.304-1.799-3.975-4.003-3.975zM80.1 24.783c-1.208 0-2.22-1.008-2.22-2.395 0-1.4 1.012-2.424 2.22-2.424 1.193 0 2.13 1.024 2.13 2.424 0 1.387-.937 2.395-2.13 2.395zm2.01-5.498h-.061c-.394-.465-1.147-.886-2.1-.886-1.991 0-3.82 1.746-3.82 3.99 0 2.228 1.829 3.96 3.82 3.96.953 0 1.706-.422 2.1-.903h.06v.57c0 1.523-.816 2.336-2.13 2.336-1.071 0-1.735-.77-2.008-1.415l-1.524.632c.436 1.055 1.599 2.35 3.532 2.35 2.053 0 3.79-1.206 3.79-4.144v-7.137h-1.66v.647zM84.977 26.11h1.75V14.423h-1.75V26.11zM89.311 22.252c-.045-1.534 1.193-2.316 2.083-2.316.695 0 1.284.345 1.481.842l-3.564 1.474zm5.435-1.324c-.333-.889-1.342-2.53-3.413-2.53-2.052 0-3.758 1.61-3.758 3.974 0 2.229 1.691 3.978 3.956 3.978 1.827 0 2.882-1.116 3.323-1.763l-1.36-.903c-.454.661-1.073 1.098-1.963 1.098-.892 0-1.526-.405-1.933-1.205l5.331-2.197-.183-.452zM102.998 20.055h-2.489v-4.006h2.489c1.306 0 2.05 1.08 2.05 2.002 0 .906-.744 2.004-2.05 2.004zm-.045-5.632h-4.192v11.685h1.748v-4.427h2.444c1.938 0 3.843-1.4 3.843-3.63s-1.905-3.628-3.843-3.628zM107.761 26.11h1.748V14.423h-1.748V26.11zM113.594 24.78c-.574 0-1.37-.284-1.37-.992 0-.903.993-1.248 1.852-1.248.769 0 1.131.165 1.599.393a2.117 2.117 0 01-2.081 1.847zm.211-6.405c-1.267 0-2.578.557-3.121 1.792l1.553.645c.331-.645.951-.858 1.599-.858.903 0 1.823.542 1.839 1.504v.12c-.316-.18-.995-.45-1.823-.45-1.675 0-3.376.915-3.376 2.63 0 1.564 1.368 2.57 2.906 2.57 1.176 0 1.825-.525 2.234-1.142h.059v.903h1.689v-4.48c0-2.075-1.554-3.234-3.559-3.234zM121.508 23.698h-.06l-2.082-5.065h-1.881l3.118 7.08-1.778 3.94h1.823l4.811-11.02h-1.945l-2.006 5.065zM17.495 9.137a1 1 0 01.994-.01l18.946 10.629c1.362.764 1.362 2.724 0 3.488L18.489 33.872A1 1 0 0117 33V10a1 1 0 01.495-.863zm6.06 5.126l5.662 5.805 1.657-1.7-7.32-4.105zm9.125 5.119L30.614 21.5l2.066 2.118 3.776-2.118-3.776-2.118zm-1.806 5.25l-1.657-1.7-5.662 5.805 7.32-4.106zM19 30.541V12.458l8.82 9.043L19 30.543z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <h3 class="mt-4 mb-3"><strong>Siga o EstBank</strong></h3>
                    <ul class="list-inline mb-4 mb-sm-0">
                        <li class="list-inline-item me-2">
                            <a href="https://www.instagram.com/estbank/" target="_blank" rel="noreferrer"
                                title="Siga-nos no Instagram" data-footer="instagram" class="nav-svg">
                                <span class="d-none">Instagram</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    style="width: 22px; height: 22px;">
                                    <path
                                        d="M12 2.983c2.937 0 3.285.01 4.446.064 2.98.136 4.373 1.55 4.509 4.509.053 1.16.063 1.508.063 4.445 0 2.938-.01 3.285-.063 4.445-.137 2.956-1.525 4.373-4.51 4.509-1.16.053-1.506.064-4.445.064-2.937 0-3.285-.01-4.445-.064-2.988-.137-4.373-1.557-4.509-4.51-.053-1.16-.064-1.507-.064-4.445 0-2.937.012-3.284.064-4.445.137-2.958 1.525-4.373 4.51-4.509 1.16-.052 1.507-.063 4.444-.063zM12 1c-2.987 0-3.361.013-4.535.066-3.995.183-6.215 2.4-6.398 6.398C1.013 8.64 1 9.013 1 12c0 2.987.013 3.362.066 4.536.183 3.994 2.4 6.215 6.398 6.398C8.64 22.987 9.013 23 12 23c2.987 0 3.362-.013 4.536-.066 3.99-.183 6.216-2.4 6.397-6.398.054-1.174.067-1.549.067-4.536 0-2.987-.013-3.361-.066-4.535-.18-3.99-2.399-6.215-6.397-6.398C15.362 1.013 14.987 1 12 1zm0 5.351a5.649 5.649 0 100 11.298A5.649 5.649 0 0012 6.35zm0 9.316a3.666 3.666 0 110-7.333 3.666 3.666 0 010 7.333zm5.872-10.858a1.32 1.32 0 100 2.64 1.32 1.32 0 000-2.64z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="https://www.facebook.com/estbankdigital/" target="_blank" rel="noreferrer"
                                title="Siga-nos no Facebook" data-footer="facebook" class="nav-svg">
                                <span class="d-none">Facebook</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    style="width: 20px; height: 20px;">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="https://twitter.com/Estbank1" target="_blank" rel="noreferrer"
                                title="Siga-nos no Twitter" data-footer="twitter" class="nav-svg">
                                <span class="d-none">Twitter</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    style="width: 22px; height: 22px;">
                                    <path
                                        d="M7.53 21.765c9.063 0 14.018-7.606 14.018-14.198 0-.217 0-.434-.01-.641A10.166 10.166 0 0024 4.339a9.902 9.902 0 01-2.83.786 4.976 4.976 0 002.166-2.763c-.95.57-2.003.983-3.127 1.21A4.874 4.874 0 0016.613 2c-2.718 0-4.925 2.235-4.925 4.988 0 .393.041.776.133 1.138-4.097-.207-7.724-2.194-10.156-5.215a5.055 5.055 0 00-.664 2.504c0 1.728.869 3.26 2.197 4.15a4.793 4.793 0 01-2.227-.621v.062A4.98 4.98 0 004.925 13.9a4.854 4.854 0 01-1.298.176c-.317 0-.623-.03-.93-.093.624 1.987 2.442 3.425 4.598 3.467A9.824 9.824 0 010 19.509a13.6 13.6 0 007.53 2.256z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="https://www.youtube.com/channel/UCXwbiw9ylhJe5i9WNmjiRVg" target="_blank"
                                rel="noreferrer" title="Siga-nos no Youtube" data-footer="youtube" class="nav-svg">
                                <span class="d-none">Youtube</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    style="width: 22px; height: 22px;">
                                    <path
                                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="https://www.linkedin.com/company/estbank" target="_blank" rel="noreferrer"
                                title="Siga-nos no Linkedin" data-footer="linkedin" class="nav-svg">
                                <span class="d-none">Linkedin</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    style="width: 20px; height: 20px;">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.tiktok.com/@estbank" target="_blank" rel="noreferrer"
                                title="Siga-nos no TikTok" data-footer="toktok" class="nav-svg">
                                <span class="d-none">Tik Tok</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    style="width: 19px; height: 19px;-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                    preserveAspectRatio="xMidYMid meet">
                                    <path
                                        d="M12.525.02c1.31-.02 2.61-.01 3.91-.02c.08 1.53.63 3.09 1.75 4.17c1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97c-.57-.26-1.1-.59-1.62-.93c-.01 2.92.01 5.84-.02 8.75c-.08 1.4-.54 2.79-1.35 3.94c-1.31 1.92-3.58 3.17-5.91 3.21c-1.43.08-2.86-.31-4.08-1.03c-2.02-1.19-3.44-3.37-3.65-5.71c-.02-.5-.03-1-.01-1.49c.18-1.9 1.12-3.72 2.58-4.96c1.66-1.44 3.98-2.13 6.15-1.72c.02 1.48-.04 2.96-.04 4.44c-.99-.32-2.15-.23-3.02.37c-.63.41-1.11 1.04-1.36 1.75c-.21.51-.15 1.07-.14 1.61c.24 1.64 1.82 3.02 3.5 2.87c1.12-.01 2.19-.66 2.77-1.61c.19-.33.4-.67.41-1.06c.1-1.79.06-3.57.07-5.36c.01-4.03-.01-8.05.02-12.07z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 para-voce-footer">
                    <h3 class="mb-3"><strong>Para Você</strong></h3>
                    <ul class="list-unstyled">
                        <li><a href="/conta-digital-pessoa-fisica" class="">Conta Digital</a></li>
                        <li><a href="/emprestimo" class="">Empréstimo</a></li>
                        <li><a href="/cambio" class="">Câmbio</a></li>
                        <li><a href="https://gwestbank.mobbuyapp.com/boleto" class="">Link de pagamento</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 para-empresas-footer">
                    <h3 class="mb-3"><strong>Para Sua Empresa</strong></h3>
                    <ul class="list-unstyled">
                        <li><a href="/conta-digital-pessoa-juridica" class="">Conta Digital</a></li>
                        <li><a href="/adquirencia" class="">Adquirência</a></li>
                        <li><a href="/emprestimo" class="">Empréstimo</a></li>
                        <li><a href="/cambio" class="">Câmbio</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3  text-sm-start mt-4 mt-sm-0 atendimento-footer">
                    <ul class="list-unstyled list-address">
                        <li>Central de Atendimento | Todas as localidades: <a href="tel:08009427594"><strong>0800 942
                                    7594</strong></a></li>
                    </ul>
                    <ul class="list-unstyled list-address">
                        <li> E-mail: <a
                                href="mailto:operadores@estbank.com.br"><strong>operadores@estbank.com.br</strong></a>
                        </li>
                    </ul>
                    <ul class="list-unstyled list-address">
                        <li>
                            Avenida Nove de Julho, 3147, 11º. Andar<br />
                            Jardim Paulista<br />
                            01.407-000 São Paulo | SP
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="hr-root">
            <div class="row sub-footer">
                <div class="col-12 col-md">
                    <p class="copyright mb-3 mb-sm-0 text-center text-sm-start">© 2023 <strong>EST</strong>BANK
                        37.920.778/0001-29</p>
                </div>
                <div class="col-12 col-md-auto ml-auto">
                    <ul class="nav">
                        <li class="mb-3 mb-sm-0"><a class="text-decoration-underline"
                                title="Termos de Uso e Política de Privacidade" href="/politica-de-privacidade">Política
                                de Privacidade</a></li>
                        <li class="mb-3 mb-sm-0"><a class="text-decoration-underline"
                                title="Termos de Uso e Política de Privacidade" href="/termos-de-uso">Termos de Uso</a>
                        </li>
                        <li class="mb-3 mb-sm-0"><a class="text-decoration-underline"
                                title="Segurança no Uso da Internet" href="/seguranca">Segurança no Uso da Internet</a>
                        </li>
                        <li class="mb-3 mb-sm-0"><a class="text-decoration-underline"
                                title="Termo e Condições de Uso do Totem ou POS"
                                href="/termo-e-condicoes-de-uso-do-totem-ou-pos">Termo e Condições de Uso do Totem ou
                                POS</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </footer>
    <!-- Start of estbank Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=8cc6a5d5-66ee-4645-b44a-22ce9e978d35">
    zE('webWidget:on', 'open', function() {
        console.log('The widget has been opened!');
    });
    </script>
    <!-- End of estbank Zendesk Widget script -->
    {{-- JS do Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    {{-- Cookie Alert --}}
    // <script>
    // var purecookieTitle = "Aviso de Cookies.",
    //     purecookieDesc = "Ao permanecer no site, você concorda com a nossa política de privacidade.",
    //     purecookieLink = '<a href="/politica-de-privacidade" target="_blank">Leia nossa Politica de Privacidade</a>',
    //     purecookieButton = "Entendi";

    // function pureFadeIn(e, o) {
    //     var i = document.getElementById(e);
    //     i.style.opacity = 0, i.style.display = o || "block",
    //         function e() {
    //             var o = parseFloat(i.style.opacity);
    //             (o += .02) > 1 || (i.style.opacity = o, requestAnimationFrame(e))
    //         }()
    // }

    // function pureFadeOut(e) {
    //     var o = document.getElementById(e);
    //     o.style.opacity = 1,
    //         function e() {
    //             (o.style.opacity -= .02) < 0 ? o.style.display = "none" : requestAnimationFrame(e)
    //         }()
    // }

    // function setCookie(e, o, i) {
    //     var t = "";
    //     if (i) {
    //         var n = new Date;
    //         n.setTime(n.getTime() + 24 * i * 60 * 60 * 1e3), t = "; expires=" + n.toUTCString()
    //     }
    //     document.cookie = e + "=" + (o || "") + t + "; path=/"
    // }

    // function getCookie(e) {
    //     for (var o = e + "=", i = document.cookie.split(";"), t = 0; t < i.length; t++) {
    //         for (var n = i[t];
    //             " " == n.charAt(0);) n = n.substring(1, n.length);
    //         if (0 == n.indexOf(o)) return n.substring(o.length, n.length)
    //     }
    //     return null
    // }

    // function eraseCookie(e) {
    //     document.cookie = e + "=; Max-Age=-99999999;"
    // }

    // function cookieConsent() {
    //     getCookie("purecookieDismiss") || (document.body.innerHTML +=
    //         '<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>' +
    //         purecookieTitle + '</a></div><div class="cookieDesc"><p>' + purecookieDesc + " " + purecookieLink +
    //         '</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">' + purecookieButton +
    //         "</a></div></div>", pureFadeIn("cookieConsentContainer"))
    // }

    // function purecookieDismiss() {
    //     setCookie("purecookieDismiss", "1", 7), pureFadeOut("cookieConsentContainer")
    // }
    // window.onload = function() {
    //     cookieConsent()
    // };
    document.addEventListener('DOMContentLoaded', function() {
        const disabledItems = document.querySelectorAll('.no-close-dropdown');
        disabledItems.forEach((item) => {
            item.addEventListener('click', function(event) {
                event.stopPropagation();
            });
        })
    });
    </script>
</body>

</html>

<style>
    /* Remover estilos de hover dos itens desativados */
    .dropdown-item.disabled:hover {
        background-color: transparent !important; /* Remover cor de fundo ao passar o mouse */
        color: inherit !important; /* Manter a cor de texto padrão ao passar o mouse */
        text-decoration: none !important;  /* Manter a decoração de texto padrão */
    }
</style>