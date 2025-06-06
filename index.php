<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.auth0.com/js/auth0-spa-js/1.18.0/auth0-spa-js.production.js"></script>
    <script src="index.js" defer></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>DL GYM - Schede di allenamento e diete personalizzate</title>
</head>

<body class="maxwidth">

    <div id="nav_block">
        <nav>
            <div id="logo">
                <a></a>
            </div>
            <a class="link">cosa facciamo</a>
            <a class="link">perché sceglierci</a>
            <a class="link">team DL</a>
            <a class="link">risultati</a>
            <a class="link">dove siamo</a>
            <a class="link">acquista</a>
            <a class="link">notizie</a>

            <a id="menu"></a>
            <button id="openAlbumModal">Apri Ricerca Album</button>


            <a class="login" href="login.html"></a>

        </nav>
    </div>


    <div id="albumModal" class="modal">
        <div class="modal-content">
            <span id="closeAlbumModal" class="close">&times;</span>
            <h2>Seleziona un album</h2>
            <form id="spotify-form">
                <input type="text" id="album" placeholder="Cerca album..." required>
                <button type="submit">Cerca</button>
            </form>
            <div id="album-view"></div>
        </div>
    </div>


    <div class="textcenter maxwidth">
        <h1>Grazie ai 10935 clienti che si sono affidati a noi</h1>
    </div>

    <section class="maxwidth">
        <div id="titolo2" class="textcenter maxwidth">
            <h2>diventa la versione migliore di te stesso</h2>
        </div>
        <div id="details" class="maxwidth">
            <div class="detelement">
                <img width="800" height="731" src="https://www.dlgym.it/Imm/Pagine/82/PIC_LA_NOSTRA_ESPERIENZA_3.webp">
                <h3>LA NOSTRA ESPERIENZA</h3>
                <p>Un team di <strong>professionisti</strong> analizzerà le tue <br>
                    <strong>necessità</strong> e ti fornirà la <strong>giusta</strong><br>
                    <strong>programmazione</strong>per il raggiungimento dei<br>
                    tuoi <strong>obiettivi</strong>;
                </p>
            </div>
            <div class="detelement">
                <h4>+</h4>
            </div>
            <div class="detelement">
                <img width="800" height="731" src="https://www.dlgym.it/Imm/Pagine/82/PIC_IL_TUO_IMPEGNO.webp">
                <h3>IL TUO IMPEGNO</h3>
                <p>Segui il piano con il <strong>supporto</strong> del nostro <strong>team</strong> e <br>
                    sfrutta le <strong>funzionalità dell'app</strong> e della <strong>nostra</strong><br>
                    <strong>piattaforma informatica</strong>;
                </p>
            </div>
            <div class="detelement">
                <h4>=</h4>
            </div>
            <div class="detelement">
                <img width="800" height="731" src="https://www.dlgym.it/Imm/Pagine/82/PIC_RISULTATI_GARANTITI.webp">
                <h3>RISULTATI GARANTITI</h3>
                <p>Raggiungi i tuoi <strong>obiettivi</strong> e goditi i <strong>risultati:</strong><br>
                    abbraccia il cambiamento e <strong>diventa la<br>versione migliore di te stesso!</strong><br>
                    <a>Scopri i risultati di chi ce l'ha già fatta!</a>
                </p>
            </div>
        </div>
        <a class="button textcenter">
            <span></span>
            Scopri cosa possiamo fare per te</a>
    </section>
    <section class="textcenter maxwidth">
        <div id="overlay" class="maxwidth">
            <h3>I NOSTRI NUMERI</h3>
            <div id="sectiondetails" class="maxwidth">
                <div>
                    <h4>20.638</h4>
                    <p>Le <strong>schede di allenamento</strong> e/o i <strong>piani</strong><br>
                        <strong>alimentari</strong> elaborati dal nostro <strong>team</strong>
                    </p>
                </div>
                <div>
                    <h4>80%</h4>
                    <p>La <strong>percentuale di clienti</strong> che <strong>restano</strong> con noi<br>
                        <strong>rinnovando</strong> con una <strong>nuova programmazione</strong>
                    </p>
                </div>
                <div>
                    <h4>4.8/5</h4>
                    <p>La <strong>valutazione</strong> che i <strong>clienti</strong> danno al nostro<br>
                        <strong>team</strong> e ai nostri <strong>servizi</strong>
                    </p>
                </div>
            </div>
            <a class="button textcenter">
                <span></span>
                Scopri perché sceglierci</a>
        </div>
        <div class="textcenter maxwidth">
            <h2>I RISULTATI DEI NOSTRI CLIENTI PARLANO DA SOLI</h2>
        </div>
        <div id="photodetails" class="maxwidth">

            <img width="800" height="791" src="https://www.dlgym.it/Imm/Pagine/132/18.webp">
            <img width="800" height="791" src="https://www.dlgym.it/Imm/Pagine/132/19.webp">
            <img width="800" height="791" src="https://www.dlgym.it/Imm/Pagine/132/jang.webp">
            <img width="800" height="791" src="https://www.dlgym.it/Imm/Pagine/132/murry.webp">
            <img width="800" height="791" src="https://www.dlgym.it/Imm/Pagine/132/bt_01.webp">
            <img width="800" height="791" src="https://www.dlgym.it/Imm/Pagine/132/bt_02.webp">
            <img width="800" height="791" src="https://www.dlgym.it/Imm/Pagine/132/bt_04.webp">
            <img width="800" height="791" src="https://www.dlgym.it/Imm/Pagine/132/bt_05.webp">
            <img width="800" height="791" src="https://www.dlgym.it/Imm/Pagine/132/bt_06.webp">
        </div>
        <a class="button textcenter">
            <span></span>
            Scopri tutti i risultati dei nostri clienti</a>
    </section>
    <div id="programma" class="backgroundgrey maxwidth textcenter padding-top">
        <h2>fidati di chi ha raggiunto il proprio obiettivo</h2>
        <h4>Migliaia di clienti hanno già raggiunto il proprio obiettivo: tutto è possibile
            con il giusto programma!
        </h4>
        <div id="dettagli_programma" class="textcenter maxwidth">

            <img width="587" height="438"
                src="https://www.dlgym.it/Imm/Pagine/82/IMMAGINE_FIDATI_DI_CHI_HA-_RAGGIUNTO_IL_PROPRIO_RISULTATO.webp">

            <p>Ci occupiamo di:<br>
                <br />
                ○ miglioramento estetico; <br>○ dimagrimento e tonificazione;<br>○ ricomposizione corporea;<br>
                ○ attenuazione dell'infiammazione del tessuto adiposo (cellulite);<br>
                ○ riduzione delle ritenzione idricaa e miglioramento della circolazione;<br>
                ○ riequilibrio posturale e correzione delle assimmetrie;<br>
                ○ aumento della massa muscolare;<br>
                ○ fitness e bodybuilding;<br>
                ○ allenamento della forza e powerlifting;<br>
                ○ PowerBuilding®;<br>
                ○ preparazione al superamento delle prove fisiche di concorsi pubblici (es. Esercito, Carabinieri, Forze
                Speciali, ecc.);<br>
                ○ incremento della performance sportiva;<br>
                ○ potenziamento e aumento della resistenza muscolare;<br>
                ○ potenziamento e condizionamento sportivo;
            </p>
        </div>
        <a class="button textcenter">
            <span></span>
            Acquista ora</a>
    </div>
    <div class="backgroundgrey textcenter padding-top maxwidth">
        <h2>Domande frequenti</h2>
        <div id="faq-content" class="padding-top">
            <div id="faq" class="maxwidth">
                <div class="faq-item">
                    <a class="faq-question">A chi si rivolge il servizio di coaching?<span
                            class="plus-symbol">+</span></a>
                    <div class="faq-answer hidden">
                        <p>I nostri servizi di coaching si rivolgono a chiunque voglia migliorare il proprio benessere
                            psicofisico, il proprio stile di vita, la propria forma fisica e la propria salute o che
                            voglia
                            incrementare le proprie prestazioni dal punto di vista atletico e sportivo, sia a livello
                            amatoriale che agonistico. Siamo specializzati nell'elaborazione di piani personalizzati
                            e specifici atti all'ottenimento di qualsiasi tipo di obiettivo. I programmi di allenamento
                            e piani alimentari sono strutturati per adattarsi alle esigenze e alle abitudini del
                            soggetto,
                            sia esso giovane o anziano, sportivo amatore o professionista.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <a class="faq-question">Quali obiettivi potrei raggiungere con i vostri pacchetti di coaching?<span
                            class="plus-symbol">+</span></a>
                    <ul class="faq-answer hidden">
                        <li>○ Miglioramento estetico</li>
                        <li>○ Dimagrimento e tonificazione</li>
                        <li>○ Ricomposizione corporea</li>
                        <li>○ Attenuazione dell'infiammazione del tessuto adiposo (cellulite)</li>
                        <li>○ Riduzione della ritenzione idrica e miglioramento della circolazione</li>
                        <li>○ Riequilibrio posturale e correzione delle assimmetrie</li>
                        <li>○ Aumento della massa muscolare</li>
                        <li>○ Fitness e bodybuilding</li>
                        <li>○ Allenamento della forza e powerlifting</li>
                        <li>○ PowerBuilding®</li>
                        <li>○ Preparazione al superamento delle prove fisiche di concorsi pubblici (es. Esercito,
                            Carabinieri, Forze Speciali, ecc.)</li>
                        <li>○ Incremento della performance sportiva</li>
                        <li>○ Potenziamento e aumento della resistenza muscolare</li>
                        <li>○ Potenziamento e condizionamento sportivo..ecc.</li>
                    </ul>
                </div>
                <div class="faq-item">
                    <a class="faq-question">Come funziona?<span class="plus-symbol">+</span></a>
                    <div class="faq-answer hidden">
                        <p>Stabilisci il tuo obiettivo e scegli tra i nostri servizi quello che fa al caso tuo.
                            Registrati, effettua il pagamento e compila tutte le form richieste. Inizia il percorso e
                            resta in contatto con i tuoi professionisti di riferimento tramite la sezione "assistenza"
                            disponibile nell’app DL Gym e monitora assieme al team i tuoi progressi.</p>

                    </div>
                </div>
                <div class="faq-item">
                    <a class="faq-question">Quanto costa?<span class="plus-symbol">+</span></a>
                    <div class="faq-answer hidden">
                        <p>Più rimani con noi più risparmi! Il costo varia in base al servizio scelto: in fase di
                            acquisto puoi ottenere fino ad una programmazione omaggio se acquisti 6 programmi
                            consecutivi, visualizza il dettaglio dei costi e confronta i servizi nella pagina dedicata.
                        </p>

                    </div>
                </div>
                <div class="faq-item">
                    <a class="faq-question">Come si svolge l'online coaching<span class="plus-symbol">+</span></a>
                    <div class="faq-answer hidden">
                        <p>Dopo esserti registrato ed aver effettuato il pagamento, fornisci tutte le informazioni al
                            nostro team compilando l'anamnesi, carica il report fotografico della tua condizione fisica
                            e invia tutta l'eventuale documentazione medica di supporto. Il nostro team esaminerà tutti
                            i tuoi dati e procederà all’elaborazione della tua programmazione di 8 settimane, che verrà
                            messa a disposizione nella tua area personale entro 3-5 giorni lavorativi. Per qualsiasi
                            necessità, potrai contattare i tuoi professionisti di riferimento tramite la sezione
                            “assistenza” dell'applicazione DL Gym, selezionando le opzioni: “allenamento” e/o
                            “alimentazione”.</p>

                    </div>
                </div>
                <div class="faq-item">
                    <a class="faq-question">Come si svolge il live coaching?<span class="plus-symbol">+</span></a>
                    <div class="faq-answer hidden">
                        <p>Dopo esserti registrato ed aver effettuato il pagamento, prenota l’appuntamento per la tua
                            consulenza presso il nostro centro, sito in via G. Marconi 97 - 35020 Ponte San Nicolò (PD).
                            Durante l’incontro effettuerai con il nostro team le rilevazioni antropometriche, ti
                            confronterai direttamente con i tuoi professionisti di riferimento e riceverai subito la tua
                            programmazione di 8 settimane. La consulenza avrà una durata di circa un’ora/un’ora e mezza,
                            utilissima per fugare ogni tuo dubbio e porre tutte le domande che desideri sul tuo
                            programma, pianificando al meglio il tuo percorso. Per qualsiasi necessità, potrai
                            contattare i tuoi professionisti di riferimento tramite la sezione “assistenza”
                            dell’applicazione DL Gym, selezionando le opzioni: “allenamento” e/o “alimentazione”.</p>

                    </div>
                </div>
                <div class="faq-item">
                    <a class="faq-question">Come posso parlare con voi?<span class="plus-symbol">+</span></a>
                    <div class="faq.answer hidden">
                        <p>Per qualsiasi informazione puoi contattarci telefonicamente dal lunedì al venerdì dalle 8:30
                            alle 12:30 e dalle 15:00 alle 19:00 allo 049.2953092, oppure puoi scriverci in qualunque
                            momento utilizzando la form di contatto, il nostro team ti risponderà il prima possibile.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <a class="faq-question">Dove si trova il centro DL Gym?<span class="plus-symbol">+</span></a>
                    <div class="faq-answer hidden">
                        <p>Ci troviamo a in via G. Marconi n. 97 - 35020 Ponte San Nicolò (PD), scopri come raggiungerci
                            e vieni a trovarci!</p>

                    </div>
                </div>
                <a class="button textcenter">
                    <span></span>
                    Hai ancora qualche domanda?</a>
            </div>
            <img class="faq-image" src="https://www.dlgym.it/Imm/Pagine/82/IMMAGINE_DOMANDE_FREQUENTI.webp"
                alt="Immagine FAQ">
        </div>
    </div>
    <div class="maxwidth">
        <h2 class="textcenter">Rimani informato</h2>
        <div id="info" class="padding-top">
            <div class="info-item1">
                <a>
                    <div class="info-overlay"></div>
                    <div class="info-title">IL NUOTO FA BENE ALLA SCHIENA? SCOPRIAMO LA VERITÀ!</div>
                    <div class="info-image"
                        style="background-image: url('https://www.dlgym.it/Imm/Pagine/179/10.webp');">
                    </div>
                </a>
                <div class="info-subtitle">Training Things</div>
                <div>27 febbrario 2025</div>
            </div>
            <div class="info-item1">
                <a>
                    <div class="info-overlay"></div>
                    <div class="info-title">COME MIGLIORARE LA TUA POSTURA IN POCHI PASSI</div>
                    <div class="info-image"
                        style="background-image: url('https://www.dlgym.it/Imm/Pagine/179/10.webp');">
                    </div>
                </a>
                <div class="info-subtitle">Training Things</div>
                <div>23 febbrariod 2025</div>
            </div>
            <div class="info-item1">
                <a>
                    <div class="info-overlay"></div>
                    <div class="info-title">I BENEFICI DEL FITNESS SULLA SALUTE MENTALE</div>
                    <div class="info-image"
                        style="background-image: url('https://www.dlgym.it/Imm/Pagine/179/10.webp');">
                    </div>
                </a>
                <div class="info-subtitle">Training Things</div>
                <div>23 febbrariod 2025</div>
            </div>
        </div>
        <a class="button textcenter">
            <span></span>
            Vai alla sezione notizie</a>
    </div>

    <div id="app" class="maxwidth textcenter">
        <h3>Vuoi subito un assaggio dell'esperienza DL Gym?</h3>
        <h1>prova la nostra app</h1>
        <div id="getapp">
            <a href="https://apps.apple.com/it/app/dl-gym/id1626626463" class="button_apple_store"></a>
            <a href="https://play.google.com/store/apps/details?id=com.embarcadero.DLGym&gl=IT"
                class="button_google_play"></a>
        </div>
        <img width="942" height="332" src="https://www.dlgym.it/container/smartphones.webp?111">
    </div>



    <footer class="maxwidth">
        <span>
            <a id="logo_footer"></a>
        </span>
        <span>
            <h4>Sede e contatti</h4>
            <br />
            <p>DL Gym <br>
                Via G.Marconi, 97<br>
                35020 Ponte San Nicolò (PD)<br>
                <br />
                +39 049 29 53 092<br>
                segreteria@dlgym.it<br>
                <br />
            </p>
            <h4>Orari</h4>
            <br />
            <p>Lunedì-Venerdì 8:30-20:00</p>
        </span>
        <span>
            <h4>Seguici sui social</h4>
            <p id="social">
                <a id="facebook" class="immagini_social"></a>
                <a id="instagram" class="immagini_social"></a>
                <a id="youtube" class="immagini_social"></a>
                <a id="linkedin" class="immagini_social"></a>
                <a id="tiktok" class="immagini_social"></a>
                <a id="xtwitter" class="immagini_social"></a>
                <a id="spotify" class="immagini_social"></a>
            </p>
            <br />
            <h4>Pagamenti accettati</h4>
            <p>
                <img width="54" height="35" src="https://www.dlgym.it/container/icona_bonifico.svg">
                <img width="54" height="35" src="https://www.dlgym.it/container/icona_visa.svg">
                <img width="54" height="35" src="https://www.dlgym.it/container/icona_mastercard.svg">
                <img width="54" height="35" src="https://www.dlgym.it/container/icona_paypal.svg">
                <img width="54" height="35" src="https://www.dlgym.it/container/icona_klarna.svg">
            </p>
            <br />
            <h4>Informazioni legali</h4>
            <p>
                <a id="footer_link">Termini e condizioni</a>
                <a id="footer_link">Privacy policy</a>
                <a id="footer_link">Cookie policy</a>
                <a id="footer_link">F.A.Q.</a>
            </p>

        </span>
    </footer>
</body>

</html>