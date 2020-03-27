# SismoLive | Diario di Lavoro
##### Daniel Matt, Georgiy Farina, Marco Lorusso e Matthias Iannarella
### Trevano, 27.03.2020

## Lavori Svolti
|Orario          |Lavoro svolto                 |
|--------------  |------------------------------|
|08:20 - 08:25| Riunione iniziale|
|08:25 - 11:35 | Sistemato il problema di ricezione dei dati dal database, sistemato la tabella, separando l'orario e la data (Marco,Matthias)|
|08:25 - 11:35 | Ricerche varie per l'arduino quali inserimento valori o connessione tra arduino e mysql (Georgiy)|
|13:15 - 14:45 | Sistemato la pagina dei terremoti famosi, implementato l'ordinamento in base alle colonne (Marco)|
|14:45 - 16:30 | Continuato con l'ordinamento in base alle colonne (Marco)|
|13:15 - 14:45 | Implementazione sul logout del sito (Matthias)|
|08:25 - 11:35 | Modificato database per il luogo di misurazione, sistemato la tabella terremoto
Creato file arduino che crea valori random tra -1.00 e 1.00 (Daniel)|
|13:15 - 15:40 | Cercato come creare file csv con arduino|
|15:40 - 16:30 | Ricevuto componente fishino UNO dal prof Petrini (Daniel)|
|16:20 - 16:30 | Aggiornamento diario|

##  Problemi riscontrati e soluzioni adottate
L'invio dei dati da arduino a mysql server è complicato da fare senza uno shield ethernet o wifi, ma il professor Petrini si è messo d'accordo con Daniel di portargli a casa sua uno shield wifi. Si sono trovati per le 15:40 circa.

In quanto mancanti i vari componenti, con il professor Muggiasca abbiamo deciso di utilizzare dei dati finti per non dover dipendere dall'arrivo dei componenti.

Georgiy attualmente non è in possesso di un arduino, perciò per ora è impossibilitato nel lavorarci. Ci si dovrà mettere d'accordo con i professori e con i compagni di progetto su cosa è meglio fare.

Abbiamo perso molto tempo a cercre come scrivere dei dati su un file csv da arduino per poi farli leggere da un .php per poi inserili all'interno del nostro database. Il professor Petrini ha gentilmente messo a nostra disposizione il suo fishino UNO che ha il modulo wifi integrato. 


##  Punto della situazione rispetto alla pianificazione
Con tutta la situazione coronavirus è difficile non essere in ritardo con il lavoro, specialmente quando si tratta di materiale che deve arrivare da oltre oceano. Siamo molto in ritardo per questo motivo.

## Programma di massima per la prossima giornata di lavoro.
Inviare dati fittizi al webserver e inserili nel database. mostrare in tempo reale i dati nel grafico del sito web.
Finire la pagina di progettazione e l'ordinamento della tabella in base alle colonne

