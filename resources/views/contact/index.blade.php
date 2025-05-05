@extends('menu') @section('title', 'Adquira : EstBank') @section('conteudo')
<section class="section-one" style="background: #fafafa;">
    {{-- Modal --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon-suces d-flex justify-content-center mb-4">
                        <svg fill="#a03234" width="65px" height="65px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M128,28A100.02672,100.02672,0,0,0,41.11426,177.54l-9.00391,31.51465a11.99985,11.99985,0,0,0,14.834,14.83545l31.5166-9.00391A100.00705,100.00705,0,1,0,128,28Zm0,192a91.87169,91.87169,0,0,1-46.95215-12.86719,4.001,4.001,0,0,0-3.14355-.4082l-33.15723,9.47363a4.00038,4.00038,0,0,1-4.94531-4.94531l9.47265-33.15625a3.99879,3.99879,0,0,0-.4082-3.14356A92.01108,92.01108,0,1,1,128,220ZM87.999,127.99707a8,8,0,1,1-8-8A8.00916,8.00916,0,0,1,87.999,127.99707Zm48,0a8,8,0,1,1-8-8A8.00916,8.00916,0,0,1,135.999,127.99707Zm48,0a8,8,0,1,1-8-8A8.00916,8.00916,0,0,1,183.999,127.99707Z"
                                ></path>
                            </g>
                        </svg>
                    </div>
                    <div class="textos-modal d-flex justify-content-center align-items-center">
                        <h4>Registramos sua solicitação!</h4>
                    </div>
                    <div class="paragrafo-modal d-flex justify-content-center align-items-center">
                        <p class="text-center">Entraremos em contato atráves dos dados fornecidos. Se precisar, envie uma mensagem usando o chat localizado no canto inferior direito da sua tela.</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <a onclick='ga("send", "event", "category", "action", "label");' title="Voltar para o site" class="btn btn-red--extra btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center" href="/">Voltar para o Site</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('msg'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $("#exampleModal").modal("show");
        });
    </script>
    @endif

    <div class="container-fluid mb-5">
        <div class="row align-items-center">
            <div class="container-fluid col-12 col-md-10 col-ls-4 col-xl-4" style="background: #a03234; padding: 35px; min-height: 90vh; border-radius: 0px 20px 0px 0px;">
                <div class="container">
                    @if(session()->has("erro"))
                    <div class="alert alert-danger">
                        {{ session()->get("erro") }}
                    </div>
                    @endif

                    <form action="/solicitar-contato" method="POST" class="form mb-5">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="form-title mb-5">
                                <h2>Preencha seus dados:</h2>
                            </div>
                            <div>
                                <div class="form">
                                    <input type="text" id="nome" class="form__input @error('nome') is-invalid @enderror" autocomplete="off" placeholder=" " name="nome" value="{{ old('nome') }}" />
                                    <label for="name" class="form__label">Nome Completo</label>
                                </div>
                                <div class="error mb-4 ml-1 py-2">
                                    @error('nome')
                                    <p>{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="form">
                                    <input type="number" id="email" class="form__input" autocomplete="off" placeholder=" " name="telefone" value="{{ old('telefone') }}" />
                                    <label for="email" class="form__label">Celular com DDD:</label>
                                </div>
                                <div class="error mb-4 ml-1 py-2">
                                    @error('telefone')
                                    <p>{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="form">
                                    <input type="email" id="email" class="form__input" autocomplete="off" placeholder=" " name="email" value="{{ old('email') }}" />
                                    <label for="email" class="form__label">E-mail:</label>
                                </div>
                                <div class="error mb-3 ml-1 py-2">
                                    @error('email')
                                    <p>{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="">
                                    <label for="faturamento">Faturamento mensal em cartão: </label> <br />
                                    <div class="ls-custom-select" style="display: flex;">
                                        <select name="faturamento" id="inputFaturamento" class="ls-select mb-2" required>
                                            <option selected disabled> Selecione um valor</option>
                                            <option value="até-10.000" class="selecione-valor">Até R$ 10.000</option>
                                            <option value="entre-10.000-15.000">Entre R$ 10.000 e R$ 15.000 </option>
                                            <option value="entre-15.000-30.000">Entre R$ 15.000 e R$ 30.000</option>
                                            <option value="acima-30.000">Acima de R$ 30.000 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="error mb-2 ml-1 py-2">
                                    @error('faturamento')
                                    <p>{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <div style="opacity: 1; width: 100%;" class="justify-content-center d-flex mb-2">
                                <button data-home="conhecer-a-conta-digital-PJ" title="Conhecer a Conta Digital PJ" class="btn button-open-account-extra-white btn--lg rounded-4 fs-14 fw-600 text-none mt-4 text-md-center">
                                    Solicitar contato
                                </button>
                            </div>
                            <div class="span-ta-banner justify-content-center d-flex">
                                <span class="termo mb-12"> Ao continuar, você concorda com nosso &nbsp; <a onclick='ga("send", "event", "category", "action", "label");' href="/politica-de-privacidade" target="_blank" style="color: rgb(232, 234, 92);"> Aviso de Privacidade</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 col-md-12 col-xl-7 order-last order-md-last order-lg-last order-xl-last mb-5 d-none d-lg-block">
                <div class="container col-12 col-md-6 col-lg-6">
                    <div class="d-none" style="position: relative; overflow: hidden; max-width: 400px; max-height: 514px;">
                        <div aria-hidden="true" style="width: 100%; padding-bottom: 113.158%;"></div>
                        <img aria-hidden="true" alt="" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;" />
                        <picture>
                            <source srcset="114w, 228w, https://i.ibb.co/TYzFRNR/456x514.png 456w" sizes="(max-width: 400px) 100vw, 400px" />
                            <img
                                sizes="(max-width: 400px) 100vw, 400px"
                                srcset="114w, 228w, https://i.ibb.co/TYzFRNR/456x514.png 456w"
                                src="https://i.ibb.co/TYzFRNR/456x514.png"
                                loading="lazy"
                                style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;"
                            />
                        </picture>
                        <noscript>
                            <picture>
                                <source srcset="114w, 228w, https://i.ibb.co/TYzFRNR/456x514.png 456w" sizes="(max-width: 400px) 100vw, 456px" />
                                <img
                                    loading="lazy"
                                    sizes="(max-width: 456px) 100vw, 456px"
                                    srcset="114w, 228w, https://i.ibb.co/TYzFRNR/456x514.png 456w"
                                    src="https://i.ibb.co/TYzFRNR/456x514.png"
                                    style="position: absolute; top: 0; left: 0; opacity: 1; width: 100%; height: 100%; object-fit: cover; object-position: center;"
                                />
                            </picture>
                        </noscript>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection