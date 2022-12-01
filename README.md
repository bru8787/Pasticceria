# lezione-2
Anteprima frontend e backend di una pagina 


                        PASTICCERIA MUSA


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

un solo file index che per funzionare gli servera il suo controller , e lo chiamiamo sempre index.php situato dentro la cartella controller
poi in una cartella chiamata view e per non confonderci chiuameremo i file di out put view.index.php view.xxxx.php a seconda della pagina creata
Quindi ricapitolando 

Ce solo un index - ci sono dei controller e poi le view , direi che ci siamo (per adesso).

