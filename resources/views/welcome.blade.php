<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comuni ISTAT API</title>
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFnTAGlY1ABxV9UAcFfXAG9S0wBv///Zbf///27///9t////bf///2z///9rDwD/axEA/2oRA/9qFgn/aSEU/2VWzwDsVtEA/1XSAP9QzQD/UNAA////1/3//////////////////////////wgA//8LAP//CgD//xAE//8bD//2VMwA7VTOAP9TzwD/TsoA/03NAP///9X+//////////////////////////8CAP//BQD//wQA//8KAP//Fgv/9VPKAO1SywD/Uc0A/0zIAP9MygD////U/v//////////////////////////AAD//wMA//8AAP//BAD//xEG//VSyADuUcoA/1DLAP9LxgD/SskA////0////////////////////////////gAA//8CAP//AAD//wMA//8MAv/0UcgA71DJAP9LxAD/SsUA/0rIAP///9T///////////////////////////4AAP//AQD//wAA//8CAP//DAH/80zBAO9QyQD/S8QA/0rFAP9KyAD////W/v/////////////////////////+AAD//wEA//8AAP//AgD//wwB//NNwQDvUcoA/0vEAP9LxgD/SskA////2f3//////////////////////////gAA//8CAP//AAD//wMA//8MAv/yTsMA8E3EAP9MxgD/TMgA/0zKAP///9v9//////////////////////////0AAP//AwD//wAA//8EAP//EQb/8VDGAPBPxwD/TskA/07KAP9NzQD////f/f/////////////////////////9AgD//wUA//8EAP//CgD//xYL//FSyQDxUcoA/1DMAP9QzQD/UNAA////4/z//////////////////////////QgA//8LAP//CgD//xAE//8bD//wVc0AWlTOAGFT0ABhU9EAYlLTAGL//+di////ZP///2T///9l////Zf///2UPAP9mEQD/ZxED/2gWCf9pIRT/YgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP//AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAA==" rel="icon" type="image/x-icon">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .vh-50 {
                height: 50vh;
            }
            .bg-clouds {
                background-color:#ecf0f1;
            }
            p.lead {
                word-wrap:break-word;
            }
            svg > rect {
                position: relative;
                top: 50%;
                -webkit-transform: translateY(50%);
                -ms-transform: translateY(50%);
                transform: translateY(50%);
            }
        </style>
    </head>
    <body class="bg-clouds">
        <header>
            <div class="container">
                <div class="row vh-50">
                    <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                        <h1>Comuni ISTAT API</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100" viewBox="0 0 3 1">
                            <rect width="3" height="0.2" fill="#009246"/>
                            <rect width="2" height="0.2" x="1" fill="#fff"/>
                            <rect width="1" height="0.2" x="2" fill="#ce2b37"/>
                        </svg>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2">
                        <div class="accordion" id="API">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="comuni">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comuniCollapse" aria-expanded="false" aria-controls="comuniCollapse">
                                        <span class="badge bg-success">GET</span><span class="ms-3">Lista Comuni</span>
                                    </button>
                                </h2>
                                <div id="comuniCollapse" class="accordion-collapse collapse" aria-labelledby="comuni" data-bs-parent="#API">
                                    <div class="accordion-body bg-light">
                                        <p class="lead"><a class="btn-link" href="https://comuni-istat-api.belicedigital.com/api/comuni" target="_blank">https://comuni-istat-api.belicedigital.com/api/comuni</a></p>
                                        <p>Schema: HTTP || HTTPS</p>
                                        <p>Risposta: Array</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="codici">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#codiciCollapse" aria-expanded="false" aria-controls="codiciCollapse">
                                        <span class="badge bg-success">GET</span><span class="ms-3">Lista Codici Comuni</span>
                                    </button>
                            </h2>
                            <div id="codiciCollapse" class="accordion-collapse collapse" aria-labelledby="codici" data-bs-parent="#API">
                                <div class="accordion-body bg-light">
                                    <p class="lead"><a class="btn-link" href="https://comuni-istat-api.belicedigital.com/api/comuni/codici" target="_blank">https://comuni-istat-api.belicedigital.com/api/comuni/codici</a></p>
                                    <p>Schema: HTTP || HTTPS</p>
                                    <p>Risposta: object|key:value</p>
                                </div>
                            </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="comuneDettaglio">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comuneDettaglioCollapse" aria-expanded="false" aria-controls="comuneDettaglioCollapse">
                                        <span class="badge bg-success">GET</span><span class="ms-3">Comune Dettaglio</span>
                                    </button>
                                </h2>
                                <div id="comuneDettaglioCollapse" class="accordion-collapse collapse" aria-labelledby="comuneDettaglio" data-bs-parent="#API">
                                    <div class="accordion-body bg-light">
                                        <p class="lead"><a class="btn-link" href="https://comuni-istat-api.belicedigital.com/api/comune/1001" target="_blank">https://comuni-istat-api.belicedigital.com/api/comune/{codiceComune}</a></p>
                                        <p>Schema: HTTP || HTTPS</p>
                                        <p>Parametro: codice del comune (es. 1001)</p>
                                        <p>Risposta: object|key:value</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="province">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#provinceCollapse" aria-expanded="false" aria-controls="provinceCollapse">
                                        <span class="badge bg-success">GET</span><span class="ms-3">Lista Province</span>
                                    </button>
                                </h2>
                                <div id="provinceCollapse" class="accordion-collapse collapse" aria-labelledby="province" data-bs-parent="#API">
                                    <div class="accordion-body bg-light">
                                        <p class="lead"><a class="btn-link" href="https://comuni-istat-api.belicedigital.com/api/province" target="_blank">https://comuni-istat-api.belicedigital.com/api/province</a></p>
                                        <p>Schema: HTTP || HTTPS</p>
                                        <p>Risposta: array</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="provinceRegione">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#provinceRegioneCollapse" aria-expanded="false" aria-controls="provinceRegioneCollapse">
                                        <span class="badge bg-success">GET</span><span class="ms-3">Lista Province di una Regione</span>
                                    </button>
                                </h2>
                                <div id="provinceRegioneCollapse" class="accordion-collapse collapse" aria-labelledby="provinceRegione" data-bs-parent="#API">
                                    <div class="accordion-body bg-light">
                                        <p class="lead"><a class="btn-link" href="https://comuni-istat-api.belicedigital.com/api/province/Lombardia" target="_blank">https://comuni-istat-api.belicedigital.com/api/province/{regione}</a></p>
                                        <p>Schema: HTTP || HTTPS</p>
                                        <p>Parametro: nome della regione (es. Lombardia)</p>
                                        <p>Risposta: array</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="provinceComuni">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#provinceComuniCollapse" aria-expanded="false" aria-controls="provinceComuniCollapse">
                                        <span class="badge bg-success">GET</span><span class="ms-3">Lista Comuni di una Provincia</span>
                                    </button>
                                </h2>
                                <div id="provinceComuniCollapse" class="accordion-collapse collapse" aria-labelledby="provinceComuni" data-bs-parent="#API">
                                    <div class="accordion-body bg-light">
                                        <p class="lead"><a class="btn-link" href="https://comuni-istat-api.belicedigital.com/api/provincia/BG/comuni" target="_blank">https://comuni-istat-api.belicedigital.com/api/provincia/{sigla}/comuni</a></p>
                                        <p>Schema: HTTP || HTTPS</p>
                                        <p>Parametro: sigla della provincia (es. BG)</p>
                                        <p>Risposta: array</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="regioni">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#regioniCollapse" aria-expanded="false" aria-controls="regioniCollapse">
                                        <span class="badge bg-success">GET</span><span class="ms-3">Lista Regioni</span>
                                    </button>
                                </h2>
                                <div id="regioniCollapse" class="accordion-collapse collapse" aria-labelledby="regioni" data-bs-parent="#API">
                                    <div class="accordion-body bg-light">
                                        <p class="lead"><a class="btn-link" href="https://comuni-istat-api.belicedigital.com/api/regioni" target="_blank">https://comuni-istat-api.belicedigital.com/api/regioni</a></p>
                                        <p>Schema: HTTP || HTTPS</p>
                                        <p>Risposta: array</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="regioneComuni">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#regioneComuniCollapse" aria-expanded="false" aria-controls="regioneComuniCollapse">
                                        <span class="badge bg-success">GET</span><span class="ms-3">Lista Comuni di una Regione</span>
                                    </button>
                                </h2>
                                <div id="regioneComuniCollapse" class="accordion-collapse collapse" aria-labelledby="regioneComuni" data-bs-parent="#API">
                                    <div class="accordion-body bg-light">
                                        <p class="lead"><a class="btn-link" href="https://comuni-istat-api.belicedigital.com/api/regione/Lombardia/comuni" target="_blank">https://comuni-istat-api.belicedigital.com/api/regione/{regione}/comuni</a></p>
                                        <p>Schema: HTTP || HTTPS</p>
                                        <p>Parametro: nome della regione (es. Lombardia)</p>
                                        <p>Risposta: array</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sigleAuto">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sigleAutoCollapse" aria-expanded="false" aria-controls="sigleAutoCollapse">
                                        <span class="badge bg-success">GET</span><span class="ms-3">Lista Sigle Automobilistiche</span>
                                    </button>
                                </h2>
                                <div id="sigleAutoCollapse" class="accordion-collapse collapse" aria-labelledby="sigleAuto" data-bs-parent="#API">
                                    <div class="accordion-body bg-light">
                                        <p class="lead"><a class="btn-link" href="https://comuni-istat-api.belicedigital.com/api/sigle-auto" target="_blank">https://comuni-istat-api.belicedigital.com/api/sigle-auto</a></p>
                                        <p>Schema: HTTP || HTTPS</p>
                                        <p>Risposta: array</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2">
                        <div class="row">
                        <div class="col-6 d-flex align-items-center justify-content-start">
                            <a href="https://github.com/passasooz/comuni-istat-api" target="_blank" class="pe-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                            <a href="https://www.paypal.com/donate/?hosted_button_id=6WYQBM2U7KV7A" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22 9.761c0 .536-.065 1.084-.169 1.627-.847 4.419-3.746 5.946-7.449 5.946h-.572c-.453 0-.838.334-.908.789l-.803 5.09c-.071.453-.456.787-.908.787h-2.736c-.39 0-.688-.348-.628-.732l1.386-8.88.062-.056h2.155c5.235 0 8.509-2.618 9.473-7.568.812.814 1.097 1.876 1.097 2.997zm-14.216 4.252c.116-.826.459-1.177 1.385-1.179l2.26-.002c4.574 0 7.198-2.09 8.023-6.39.8-4.134-2.102-6.442-6.031-6.442h-7.344c-.517 0-.958.382-1.038.901-2.304 14.835-2.97 18.607-3.038 19.758-.021.362.269.672.635.672h3.989l1.159-7.318z"/></svg>
                            </a>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-end">
                            Comuni ISTAT API v1.0.0
                        </div></div>
                    </div>
                </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
