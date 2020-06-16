# Rivista Website
Website for an online newspaper

### Struttura
- `index.html` landing page con banner promozionale rivista, ultimi articoli pubblicati e selezione di articoli raggruppati per tematica
- `contatti.html` pagina con form per essere contattati
- `redazione.html` pagina con tutta la redazione, immagine più breve descrizione
- `"argomento".html` singole pagine in cui vengono mostrati tutti gli articoli in base all'argomento scelto
- `archivio.html` archivio delle riviste dove è possibile scaricare i numeri precedenti
- `numeroattuale.html` pagina dedicata alla rivista del mese, da scaricare

### Database in MySQL [SQLite]
- tabella per gli argomenti
- tabella per i post (id, autore, data, argomento, testo, slug)
- tabella per le riviste (id, data, file pdf di riferimento)

Valutare se aggiungere una dashboard accessibile dopo login per la redazione da cui pubblicare i post o sfruttare WordPress / backoffice per la cosa [in caso sarebbe da implementare un servizio di login, tabella per gli utenti e dashboard con pagina per la pubblicazione del post e pagina per la gestione dei post]

### Briefing client
- rivista in PDF da scaricare
- archivio della rivista
- pagina dedicata alla redazione e ai collaboratori
- a lato, sponsor (BIBANESI, ASTORIA WINES, AUTOFFICINA LENZINI, PIZZERIA SANTA LUCIA, LAGUNA PALACE, DAPINO, BIANCO e CELESTE, RADIME, COMMAUTO, FALCON)
- stile molto semplice
- informarsi su Google AdWords
- articoli di attualità categorizzati (CULTURA (grigio), ECONOMIA (viola), ENOGASTRONOMIA (verde), MUSICA (blu), STORIA di TREVISO (azzurro), BENESSERE, SPORT (arancione))
