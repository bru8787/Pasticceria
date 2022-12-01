# lezione-2
Anteprima frontend e backend di una pagina 


                   \    PASTICCERIA MUSA


Sara sviluppato di continuo...

                        Stay tunned!!

                        Versione 1.0
                        
è come lo avete gia vista , con quasi tutto nel file index .

                        Versione 1.6 
                        
Sarà diversa nella strutturazione dei file  e della logica .
alla fine abbiamo l'obbiettivo di imparare Laravel , un framework potentissimo che sotto usa sempre php.
Quindi e sempre php vanilla che usato in un certo modo diventa Laravel, e visto che e cosi andiamo 
a formare la sua logica cone le cartelle e con i file.

                        Laravel 

Come funziona la logica di struttura dati di laravel? Laravel usa solo un punto di accesso e si chiama appunto index.
poi manda questo ingresso a delle route ,(route  non sono altro che la funzione "gps" di laravel , 
cioe prende la richiesta manda al controller giusto la richiesta , il controller elabora e poi manda la risposta ai cosi detti view files , 
i view file sono i file di output Comunque sara spiegato tutto dal mitico Prof .
Sta mini spiegazione e per sintetizzare la logica di laravel .

Route=mapping
controller=elaborazione
view=output

                        Versione 1.6

Allora cambiamo anche noi la struttura della nostra pasticeria e adesso 
complettiamo anche il menu nav bar in questo cosa con un contenuto minimo di ogni pagina.

Nota bene: non useremo ancora le route per direzionare il traffico , quella sara il prossimo passo!


Quindi la logica sarà:

un solo file index che per funzionare gli servirà il suo controller , e lo chiamiamo sempre index.php situato dentro la cartella controller
poi in una cartella chiamata view e per non confonderci chiameremo i file di output view.index.php view.xxxx.php 
oppure index.view.php a seconda della pagina creata

Quindi ricapitolando 

Ce solo un index - ci sono dei controller e poi le view , direi che ci siamo (per adesso).


                                LOGICA LARAVEL versione 2.0
Adesso implementiamo la logica di Laravel cioe le route , inserendo un nuovo file route.php

Non fa altro che direzionare il traffico in entrata, cioe una specie di gps interno .
Cioè basta insererire delle condizioni di entrata se l'uttente mi chiede x /path(directory) allora indirizza la richiesta a x file.php. In questo modo non avremo più le estensioni dei file sulla barra della ricerca come sta succedendo attualmente (http://localhost/controller/index.php) ma avremo in pratica quello che vogliamo se vogliamo dirla tutta .
possiamo dare una path a piacere a ogni pagina che ce sul sito. 

Esempio la pagina "contatti" che tale si chiama anche nel file nav.php possiamo chiamarla 
come vogliamo anche "/pino"(da non confondere con il testo che stampiamo). /pino = href="/pino".

una volta scelto questo nome della path mettiamo condizione tramite la superglobale $_SERVER che in forma array ci dara l'informazione dove si trova l'utente in quel momento tramite un dato specifico nel suo output cioe ['REQUEST_URI']

quindi la condizione è : se ci troviamo nella '/' =home page allora reindirizza a index.php della cartella controller.
In questo modo nella barra della ricerca del browser ci sara scritto localhost/pino e non piu index.php




