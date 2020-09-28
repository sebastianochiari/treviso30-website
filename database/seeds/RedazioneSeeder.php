<?php

use Illuminate\Database\Seeder;
use App\Redazione;


class RedazioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Redazione::truncate();

        Redazione::create([
            'name' => 'Giampaolo Zorzo',
            'image' => 'zorzo.jpg',
            'description' => "<p>Inizia nel 1978 con la Tribuna di Treviso e nel 1982 passa al Gazzettino di Treviso per seguire il calcio Treviso e alcuni sport minori, e dal 1988 è il referente provinciale per la Gazzetta dello Sport incarichi che tutt'ora ricopre.</p><p>Ha seguito uffici stampa e  rivista dei comuni di Montebelluna, Volpago del Montello, San Biagio di Callalta e Trevignano Notizie ed è stato direttore responsabile dell’ “Ape Sapiente”,  rivista medico-scientifica stampata in  tre lingue e dedicata al problema della fecondazione.</p><p>Per sette anni ha ricoperto l'incarico di direttore responsabile di “TrevisoSette”, settimanale di 48 pagine e attualmente è il responsabile di “Treviso30News” mensile della Marca.</p><p>Per quindi anni addetto stampa della “Pinarello S.p.A”, del  “Gruppo Mosole S.p.A.” della “Mionetto Spumanti”, della federazione regionale di karate stile Shotokan , del comune di  Preganziol, dell'Ordine Provinciale dei Consulenti del Lavoro. Attualmente segue la comunicazione della “Bibanesi di Da Re” e l'Ordine degli Ingegneri di Treviso.</p><p>Ha collaborato con alcune emittenti locali. Per Antenna Tre come opinionista sportivo-culturale e alla rubrica “La Voce del Mattino” dove si commentano le prime pagine dei giornali nazionali. Opinionista sportivo anche per TNE (Telenordest) e per La 8 del Gruppo Osti, Telepadova, Telenuovo e TeleUdine.</p><p>Ha scritto tre libri, uno per ricordare la cavalcata del calcio Treviso che in tre anni è passato dalla serie D alla serie B; il secondo, commissionato dal calcio Treviso per celebrare i novant’anni della società, il terzo, “Essere di Marca” dove descrive alcuni personaggi trevigiani.</p><p>Per sei anni ha seguito l’organizzazione della Gran Fondo Pinarello, manifestazione ciclistica che registra oltre 4.500 iscritti provenienti da tutta Italia e dall’estero, e i campionati del Mondo di karate organizzati al Palaverde di Villorba con diretta televisiva.</p><p>Attualmente continua la collaborazione con il Gazzettino, Gazzetta dello Sport  è  direttore responsabile di “MY WORLD” trimestrale edito della Pinarello cicli S.p.A.;  di “Treviso30News” mensile di 84 pagine, addetto stampa dell'Ordine degli Ingegneri, della Bibanesi Da Re S.p.A.</p>"
        ]);

        Redazione::create([
            'name' => 'Federico Bettuzzi',
            'image' => 'bettuzzi.jpg',
            'description' => "<p>Giornalista professionista, ex giocatore di basket e agente, da anni profondo conoscitore della pallacanestro locale e nazionale. E' stato firma di basket per il gazzettino e caposervizio del portale Realsports.it. In ambito cestistico ha seguito con particolare le vice della Pallacanestro Treviso e di Universo Treviso basket.</p><p>La sua produzione giornalistica ha toccato anche altri sport come ippica e motori e vari argomenti, spaziando dall'economia alla cultura.</p><p>E' stato collaboratore della rivista “Pressing“ edita dal Nuovo Basket Club. Ha curato l'edizione e la prefazione  di “ Aganis“ e “Sbilfs“ di Emanuela Paulin e ha scritto il romanzo noir “Nessuna Nuova“.</p><p>Attualmente collabora con  con varie testate ed è addetto stampa di Waypoint Sport, inoltre è commentatore tecnico televisivo per le partite casalinghe della Dè Longhi Treviso Basket.</p>"
        ]);

        Redazione::create([
            'name' => 'Piergiorgio Zavarise',
            'image' => 'zavarise.jpg',
            'description' => "<p>Giornalista professionista per molti anni a capo della redazione sportiva di Treviso  Autore di diverse pubblicazioni, su tutte “Regina di Marca” e “La Regina del Montello”. Storico giornalista sportivo.</p>"
        ]);

        Redazione::create([
            'name' => 'Danilo Guerretta',
            'description' => "<p>E' stato caporedattore centrale ad Antenna Tre, corrispondente per La7, dirige “Servabo“ e collabora con l'emittente radiofonica “Veneto Uno“.</p><p>Per Baldini e  Castoldi ha scritto il saggio “A Casa Nostra. Cinquant'anni di mafia  e criminalità nel Veneto“.</p>"

        ]);

        Redazione::create([
            'name' => 'Antonella Stelitano',
            'image' => 'stelitano.jpg',
            'description' => "<p>Giornalista autore di volumi e saggi dedicati alla storia dello sport e ai temi legati a sport e diritti umani.  Ha vinto il premio nazionale di Storiografia Sportiva Manacorda nel 2016, per due volte il Concorso letterario del CONI e il premio del CONI Veneto Sport in Rosa 2018.</p><p>Nel  2012 il New York Times l'ha intervistata come esperta di sport e relazioni Internazionali.  Fa parte di comitati scientifici universitari per master sullo sport e ha collaborato, nel 2018, con il Vaticano per il Documento sullo Sport “Dare il Meglio di Sè“.</p>"
        ]);

        Redazione::create([
            'name' => 'Ennio Grosso',
            'image' => 'grosso.jpg',
            'description' => "<p>Giornalista Pubblicista dal 1990 e autore di alcuni libri dedicati al rugby, disciplina che segue da oltre trent'anni per il Gazzettino, in particolare il rugby Benetton e la nazionale italiana. Ha firmato anche numerosi articoli per diverse riviste specializzate.</p><p>Nel 2005 è stato premiato dalla Federazione Italiana Rugby per l'attività giornalistica svolta e per dodici anni è stato responsabile dell'ufficio stampa del Benetton Rugby. E' una delle penne più autorevoli nel panorama della palla ovale.</p>"
        ]);

        Redazione::create([
            'name' => 'Lorenzo Baldoni',
            'image' => 'baldoni.jpg',
            'description' => "<p>Dal 1992 ha seguito gli uffici stampa della pubblica amministrazione e del settore privato FederVeneto Api, Consiglio Regionale del Veneto, provincie di Padova e Venezia, Condifesa  Veneto. Storico collaboratore del Gazzettino di Treviso.</p>"
        ]);

        Redazione::create([
            'name' => 'Ermes Brugnaro',
            'description' => "<p>Giornalista Pubblicista dal 2005 ma collaboratore de La Tribuna di Treviso  dal 1995 è arbitro di volley e scrive di pallavolo in particolare le gesta del misto trevigiano Uisp. Poi in qualità di giocatore agonista di tennis, si è fatto carico del tennis trevigiano per la Tribuna di Treviso e il Mattino di Padova.</p>"

        ]);

        Redazione::create([
            'name' => 'Angela Maci',
            'description' => "<p>Nata a Bologna è da oltre vent'anni Sommelier Ais e nel 2004 dopo la laurea in Lingue e letterature straniere moderne si trasferisce a Treviso per seguire l'amore della sua vita, Cristian Schiavon attuale assessore al bilancio al comune di Treviso.</p><p>Oltre ad essere un raffinato Sommelier, Angela è anche un Assaggiatore Onaf. Nel 2006 ottiene una Specialistica in Storia e Cultura dell'alimentazione sempre a Bologna con una tesi sul vino.</p><p>Nel 2010 nasce il Blogger di Sorelleinpentola.it assieme alla sorella Chiara. Nel 2011, diventa Brand Ambassador Don Perrignon. Nel 2014 riceve un attestato Ama in tecniche di base di cucina, diventando contemporaneamente maestra di cucina con suoi corsi noti in tutta Italia. Nel 2017 apre un Blogger di StorieBuone.it e nel 2019 diventa Consulente Enogastronomica.</p>"
        ]);

        Redazione::create([
            'name' => 'Cristina Favretto',
            'description' => "<p>Appassionata di turismo divoratrice di social, consumatrice di Web marketing, amministratrice del sito www.veneto360.land, dispensatrice di pillole digitali, ama raccontare e far conoscere il territorio a 360°. Cosa c'è di più bello di essere turisti a casa propria?</p>"
        ]);

        Redazione::create([
            'name' => 'Sabrina Danieli Franceschini',
            'image' => 'franceschini.jpg',
            'description' => "<p>Laurea in lingue e letterature straniere. E' stata  direttore editorialista e caporedattrice di tre web magazine e tre e.commerce destinati al pubblico internazionale. Dirigente e-o Consigliere di Amministrazione di  Sacaim SpA, Italia progetto Brckosrt, Bosnia H. Btksro Slovacchia, Uni Prom srl Italia, One srl Italia, Confindustria Venezia. Come funzionario o direttore ha invece lavorato per Confapi, Conexport Treviso e Croazia,  Unindustria Treviso, Fondazione Unindustria Romania.</p>"
        ]);

        Redazione::create([
            'name' => 'Ubaldo Saini',
            'description' => "<p>Laureato in Statistiche e Informatica per le aziende, ha svolto per 5 anni l'attività di addetto stampa della Dolciaria Rovelli Morciano di Rimini.</p><p>Appassionato di basket e di filatelia, da tre stagioni è telecronista per Treviso Basket e collaboratore  della Tribuna di Treviso dove segue lo sport e in particolare le sorti del TVB De Longhi.</p>"
        ]);

        Redazione::create([
            'name' => 'Cinzia Zanardo',
            'image' => 'zanardo.jpg',
            'description' => ""
        ]);

        Redazione::create([
            'name' => 'Andrea Vidotti',
            'description' => "<p>Manager sportivo con una passione smisurata per il mondo dello sport. Laureato in Economia e Commercio, corso di specializzazione post laurea in diritto ed economia dello sport. Agente Fifa e agente dei più importanti ciclisti professionisti. In più di vent'anni ha gestito l'immagine di tanti campioni dello sport, da Alberto Tomba fino a Sofia Goggia.</p><p>Esperto di comunicazione e marketing, ha fondato e diretto per 18 anni l'agenzia di comunicazione, Ideeuropee. Consulente di marketing di varie aziende del settore sportivo, organizzatore di eventi.</p><p>Appassionato  di formazione, docente al Master Sbc a La Ghirada e il Sole 24 Ore a Milano e Roma alla Bicocca a Milano, a Tor Vergata a Roma  al Polimoda di Firenze. Da 7 anni presidente del Panathlon e socio fondatore di AssiManager.</p>"
        ]);
    }
}
