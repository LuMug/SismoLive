1. [Introduzione](#introduzione)

  - [Informazioni sul progetto](#informazioni-sul-progetto)

  - [Abstract](#abstract)

  - [Scopo](#scopo)

2. [Analisi](#analisi)

  - [Analisi del dominio](#analisi-del-dominio)

  - [Analisi dei mezzi](#analisi-dei-mezzi)

  - [Analisi e specifica dei requisiti](#analisi-e-specifica-dei-requisiti)

  - [Use case](#use-case)

  - [Pianificazione](#pianificazione)

3. [Progettazione](#progettazione)

  - [Design dell’architettura del sistema](#design-dell’architettura-del-sistema)

  - [Design dei dati e database](#design-dei-dati-e-database)

4. [Implementazione](#implementazione)

  - [Sito Internet](#Sito)

  - [Hardware e codice](#Hardware-e-codice)

  - [Database](#Database)

5. [Test](#test)

  - [Protocollo di test](#protocollo-di-test)

  - [Risultati test](#risultati-test)

  - [Mancanze e limitazioni conosciute](#mancanze-e-limitazioni-conosciute)

6. [Consuntivo](#consuntivo)

7. [Conclusioni](#conclusioni)

  - [Sviluppi futuri](#sviluppi-futuri)

  - [Considerazioni personali](#considerazioni-personali)

8. [Sitografia](#sitografia)

9. [Allegati](#allegati)


## Introduzione

### Informazioni sul progetto

- Allievi:

	Daniel Matt (Sviluppatore)

	Georgiy Farina (Sviluppatore)

	Marco Lorusso (Sviluppatore)

	Matthias Iannarella (Sviluppatore)

- Docenti: Luca Muggiasca (Cliente)

- Scuola: SAMT (Scuola d'arti e Mestieri Trevano)

- Sezione: Informatica

- Materia: Modulo 306 - Realizzare un piccolo proggetto IT

- Data inizio: 18 gennaio 2020

- Termine di consegna: 08 maggio 2020

### Abstract

  E’ una breve e accurata rappresentazione dei contenuti di un documento,
  senza notazioni critiche o valutazioni. Lo scopo di un abstract efficace
  dovrebbe essere quello di far conoscere all’utente il contenuto di base
  di un documento e metterlo nella condizione di decidere se risponde ai
  suoi interessi e se è opportuno il ricorso al documento originale.

  Può contenere alcuni o tutti gli elementi seguenti:

  -   **Background/Situazione iniziale**

  -   **Descrizione del problema e motivazione**: Che problema ho cercato
      di risolvere? Questa sezione dovrebbe includere l'importanza del
      vostro lavoro, la difficoltà dell'area e l'effetto che potrebbe
      avere se portato a termine con successo.

  -   **Approccio/Metodi**: Come ho ottenuto dei progressi? Come ho
      risolto il problema (tecniche…)? Quale è stata l’entità del mio
      lavoro? Che fattori importanti controllo, ignoro o misuro?

  -   **Risultati**: Quale è la risposta? Quali sono i risultati? Quanto è
      più veloce, più sicuro, più economico o in qualche altro aspetto
      migliore di altri prodotti/soluzioni?

  Esempio di abstract:

  > *As the size and complexity of today’s most modern computer chips
  > increase, new techniques must be developed to effectively design and
  > create Very Large Scale Integration chips quickly. For this project, a
  > new type of hardware compiler is created. This hardware compiler will
  > read a C++ program, and physically design a suitable microprocessor
  > intended for running that specific program. With this new and powerful
  > compiler, it is possible to design anything from a small adder, to a
  > microprocessor with millions of transistors. Designing new computer
  > chips, such as the Pentium 4, can require dozens of engineers and
  > months of time. With the help of this compiler, a single person could
  > design such a large-scale microprocessor in just weeks.*

### Scopo
  Lo scopo di questo progetto è quello di avere una costante misurazione, insieme alla relativa rappresentazione su un sito web, delle vibrazioni terrestri.
  Nel caso di un terremoto devono essere notificati gli admin via mail e gli utenti sul sito.

## Analisi

### Analisi del dominio

Il prodotto finale potrà essere utilizzato da tutti gli utenti, sia esperti,
sia principianti, che hanno a disposizione un dispositivo in grado di navigare su internet.
Chiunque può consultare il sito che conterrà una rappresentazione delle misurazioni delle scosse sismiche sotto forma di vari grafici.

Attualmente esiste già un sito nazionale dedicato a questo tema, speriamo che la nostra versione sia più piacevole ed efficace.

### Analisi e specifica dei requisiti

  | **ID**  | **Requisito** | **Priorità** | **Versione** | **Note** |
  | ------- | ------------- | ------------ | ------------ | -------- |
  | REQ-001 | Bisogna avere un sito per la visualizzazione di dati| 1 | 1.0  | http://sismolive.online        |
  | REQ-002 |Il sito deve avere il collegamento ad un DB| 1 | 1.0  |          |
  | REQ-003 | Il sito deve avere una pagina di login| 1 | 1.0  |  Con credenziali solo per amministratori        |
  | REQ-004 | Dev'esserci una struttura hardware con Arduino| 1 | 1.0 | |
  | REQ-005 | L'Arduino deve poter leggere i dati da un componente che misura le vibrazioni| 1 | 1.0 | Il componente in questione è un geofono|
  | REQ-006 | L'arduino deve poter mandare i dati tramite modulo Wi-Fi| 1 | 1.0| |
  | REQ-007 |Il sito dev'essere compatibile con i principali browser| 1 | 2.0 | |
  | REQ-008 | I dati sul sito devono essere rappresentati sotto forma di grafici | 1 | 1.0 |          |
  | REQ-009 | Deve esistere un DB per il salvataggio dei vari dati | 1 | 1.0 | |
  | REQ-010 | Il dato live viene mostrato su un LCD attaccato all'Arduino | 3 | 1.0 |     |
  | REQ-011 | L'admin deve poter configurare le  soglie (minima e critica) dei dati  | 1 | 1.0 |  |
  | REQ-012 | Il dato live viene mostrato sul sito| 2 | 1.0 |  |
  | REQ-013 | In caso di terremoto gli admin vengono notificati via mail  | 1 | 1.0 |  |
  | REQ-014 | In caso di terremoto gli admin vengono notificati via messaggio| 4 | 1.0 | |
  | REQ-015 | Per il progetto è necessario avere un agenda su TRELLO | 2 | 1.0 | |
  | REQ-016 | I dati vengono letti con frequenza configurata dall'admin| 1 | 1.0 | |

### Use case

I casi d’uso rappresentano l’interazione tra i vari attori e le
funzionalità del prodotto.

### Pianificazione

- Gantt preventivo:


### Analisi dei mezzi

#### Hardware

Matthias:

- ASUS ROG GL553VE, Windows 10 Home 64 bit, versione 1903 build 18362.535.

Marco:

- Acer Aspire VN7-572G, Windows 10 home 64 bit

Georgiy:
- Acer Aspire A717-71G, Windows 10 home 64 bit

Daniel:
- ASUS X556UAM, Windows 10 home 64 bit

Sismografo:
- Arduino Mega 2560
- Fishino

#### Software

- Lunacy v4.6.1

- Atom v1.40.1

- Microsoft Project 2019 v16

- GitHub Desktop v2.1.3

- Google Chrome v79.0.3945.79

- XAMPP v3.2.4

- MySQL Workbench 8.0 CE

- Arduino IDE v1.8.33.0

- Sublime text 3

#### Librerie


## Progettazione


### Design dell’architettura del sistema

Descrive:

-   La struttura del programma/sistema lo schema di rete...

-   Gli oggetti/moduli/componenti che lo compongono.


Sitemap:

![sitemap](../Progettazione_Sito/sitemap.png)

### Design dei dati e database

Descrizione delle strutture di dati utilizzate dal programma in base
agli attributi e le relazioni degli oggetti in uso.

### Schema E-R, schema logico e descrizione.

Se il diagramma E-R viene modificato, sulla doc dovrà apparire l’ultima
versione, mentre le vecchie saranno sui diari.

### Design delle interfacce

Progettazione pagina principale:
![index](../Progettazione_Sito/index.png)

Progettazione Login:

![Login](../Progettazione_Sito/login.png)


Progettazione terremoti:

![Terremoti](../Progettazione_Sito/terremoti.png)

Progettazione Menu a tendina:

![Terremoti](../Progettazione_Sito/Menu-Tendina.png)

Progettazione pagina progettazione:

![Terremoti](../Progettazione_Sito/Progettazione.png)


### Design procedurale

Descrive i concetti dettagliati dell’architettura/sviluppo utilizzando
ad esempio:

-   Diagrammi di flusso e Nassi.

-   Tabelle.

-   Classi e metodi.

-   Tabelle di routing

-   Diritti di accesso a condivisioni …

Questi documenti permetteranno di rappresentare i dettagli procedurali
per la realizzazione del prodotto.

## Implementazione

### Sito

#### config.php

Costanti definite

```php
define('DB_SERVER', '160.153.133.208');
define('DB_USERNAME', 'sismo');
define('DB_PASSWORD', 'sismo');
define('DB_NAME', 'SismoLive');
```

Tenta di connettersi al database, ma se la connessione fallisce stampa l'errore.

```php
/* Tentativo di connesione al database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Controlla la connessione
if ($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
```

#### login.php

La password inserita nel login viene criptata con l'hash md5, se essa equivale alla password trovata
nel database, esegue l'accesso.

```php
if (md5($password) == $pass)
{
    // Password is correct, so start a new session
    session_start();

    // Store data in session variables
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $username;

    // Redirect user to welcome page
    header("location: ../index.php");
}
else
{
    header("location: ../html/login.html");
}
```

#### logout.php

Esegue l'unset di tutte le variabili della sessione.
Distrugge la sessione e infine reindirizza l'utente alla pagina principale.

```php
// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: ../index.php");
exit;
```

#### table.php

```php

```

#### csv

Esempio del formato in csv, ogni campo è separatao da una ",".

```csv

Data,Magnitudo,Pericolosita,Citta

1356.10.18,6.6,Alta,Basilea(BS)

1295.09.03,6.2,Alta,Churwalden(GR)

1855.07.25,6.2,Alta,Stalden-Visp(VS)

1584.03.11,5.9,Alta,Aigle(VD)

1601.09.18,5.9,Alta,Unterwalden(NW)

1524.04.01,5.8,Media,Ardon(VS)

1946.01.25,5.8,Alta,Sierre(VS)

1755.12.09,5.7,Alta,Brig-Naters(VS)

1774.09.10,5.7,Media,Altdorf(UR)

1622.08.03,5.4,Media,Ftan(GR)

```

#### login_or_logout.php

Se l'utente ha effettuato il login, mostrerà i bottoni per accedere
alla pagina dei parametri oppure per disconnetersi.
Se invece non ha effettuato il login, mostrerà solamente il bottone per accedere.

```php

$login = "http://sismolive.online/html/login.html";
$logout = "http://sismolive.online/php/logout.php";
$parametri = "http://sismolive.online/html/configurazione.php";

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    echo "<li class='get-started'><a href='$login'>Login</a></li>";
}
else
{
    echo "<li class='get-started'><a href='$parametri'>Parametri</a></li>";
    echo "<li class='get-started'><a href='$logout'>Logout</a></li>";
}
```

#### getSoglie.php

Necessita del file **config.php** per effettuare la connesione al database.
Esegue una query e se nel risultato generato c'è almeno una riga, esegue un ciclo while
settando le variabili **$soglia_minima** e **$soglia_critica**.

```php
require_once "config.php";

$soglia_minima = '';
$soglia_critica = '';

$soglie = "SELECT soglia_minima,soglia_critica FROM Configurazione";

$result = $link->query($soglie);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $soglia_minima = $row['soglia_minima'];
        $soglia_critica = $row['soglia_critica'];
    }
}
```

#### mail.php

```php
require "PHPMailer/PHPMailerAutoload.php";
require "../config.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;

        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'n3plcpnl0298.prod.ams3.secureserver.net';
        $mail->Port = 465;
        $mail->Username = 'terremoto@sismolive.online';
        $mail->Password = 'terremoto';

        $mail->IsHTML(true);
        $mail->From="terremoto@sismolive.online";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error;
        }
        else
        {
            $error = "Thanks You !! Your email is sent. YOoo";
            return $error;
        }
    }

    $from = 'terremoto@sismolive.online';
    $name = 'SismoLive';
    $subj = 'Allarme terremoto!';
    $msg = 'Terremoto rilevato!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!.';

    $email = "SELECT email FROM Utente";

    $result = $link->query($email);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $to = $row['email'];
            $error=smtpmailer($to,$from, $name ,$subj, $msg);
        }
    }
```

#### data.php

Necessita del file **config.php** per effettuare la connesione al database.
Esegue una query e se nel risultato generato c'è almeno una riga, esegue un ciclo while
settando le variabili **$datas** e **$earths**.
Infine esegue un trim togliendo le virgole da entrambe le variabili.

```php

include "../php/config.php";

$orario = '';
$magnitudo = '';
$terremoti = "SELECT * from tabella";
$result = $link->query($terremoti);
if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        $orario = $orario . '"' . $row['orario_registrazione'] . '",';
        $magnitudo = $magnitudo . '"' . $row['magnitudo'] . '",';
    }
}

$orario = trim($orario, ",");
$magnitudo = trim($magnitudo, ",");

```

Esegue una query e se nel risultato generato c'è almeno una riga, crea la tabella in base ai valori
pescati dal database.

```php

$terremoti = "SELECT * from tabella";
$result = $link->query($terremoti);
if ($result->num_rows > 0)
{
  while ($row = $result->fetch_assoc())
  {
    echo "<tr><th>" . $row["data_registrazione"] . "</th><th>" . $row["orario_registrazione"] . "</th><th>" . $row["magnitudo"] . "</tr>";
  }
}

```

#### sms.php



```php

require_once('sms/vendor/autoload.php');

// Set your own API access key here.
$MessageBird = new \MessageBird\Client('');

$Message             = new \MessageBird\Objects\Message();
//Nome del mittente
$Message->originator = 'SismoLive';
//Numero del destinatario
$Message->recipients = [ '+41XXXXXXXX' ];
//Messaggio da mandare
$Message->body       = 'Allarme terremoto!';
//Invia il messaggio
$MessageResult = $MessageBird->messages->create($Message);

```

#### Ricarica pagina

Ogni 1000 millisecondi, ovvero ogni secondo fa le query per vedere se ci sono terremoto nuovi.
Questo rende sia il grafico sia la tabella in modalità "real-time".

```javascript
$('#responsecontainer').load('data.php');
var refreshId = setInterval(function() {
    $('#responsecontainer').load('data.php');

}, 1000);
```

#### Ordinare tabella

Permette di ordinare le tabelle per data, orario e magnitudo.

```javascript
const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;
const comparer = (idx, asc) => (a, b) => ((v1, v2) => v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2))(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

// do the work...
document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
    const table = th.closest('table');
    const tbody = table.querySelector('tbody');
    Array.from(tbody.querySelectorAll('tr')).sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc)).forEach(tr => tbody.appendChild(tr));
})));
```

#### Header

```html
<nav class="nav-menu d-none d-lg-block">
  <ul>
    <li class="active"><a href="#header">Home</a></li>
    <li ><a href="html/terremoti_attuali.php">Terremoti Attuali</a></li>
    <li><a href="html/terremoti.php">Terremoti</a></li>
    <li><a href="html/progettazione.php">Progettazione</a></li>
    <li><a href="html/chisiamo.php">Chi siamo</a></li>
    <?php require_once "php/login_or_logout.php";?>
  </ul>
</nav>
```

### SQL

```sql

drop database if exists SismoLive;
create database SismoLive;
use SismoLive;
```

# CREAZIONE TABELLE  -----------------------------------------------------------------------------------------------
```sql
drop table if exists Utente;
create table Utente(
	nome varchar(20) primary key not null,
	psw varchar(100) not null,
	email varchar(50) not null,
	telefono long not null,
	tipo varchar(20) not null
);
```
```sql
drop table if exists Configurazione;
create table Configurazione(
	id int primary key auto_increment,
	soglia_minima double not null,
    soglia_critica double not null
);
```
```sql
drop table if exists Terremoto;
create table Terremoto(
	id_registrazione int not null,
	id_terremoto int not null,
    magnitudo double not null,
	data_registrazione DATE not null,
    orario_registrazione TIME not null,
    primary key (id_registrazione, id_terremoto)
);
```
# AMMINISTRATORI DI BASE ---------------------------------
```sql
insert into Utente(nome,psw,email,telefono,tipo) values ("Georgiy",md5("PasswordDiGeorgiy"),"georgiy.farina@samtrevano.ch",41790123456,"A");
insert into Utente(nome,psw,email,telefono,tipo) values ("Marco",md5("PasswordDiMarco"),"marco.lorusso@samtrevano.ch",41791234567,"A");
insert into Utente(nome,psw,email,telefono,tipo) values ("Matthias",md5("PasswordDiMatthias"),"matthias.iannarella@samtrevano.ch", 41792345678,"A");
insert into Utente(nome,psw,email,telefono,tipo) values ("Daniel",md5("PasswordDiDaniel"),"daniel.matt@samtrevano.ch",41793456789,"A");
insert into Utente(nome,psw,email,telefono,tipo) values ("test",md5("test"),"luca.muggiasca@edu.ti.ch",41793456789,"A");

```
# CONFIGURAZIONE DI DEFAULT -------------------------------------------------------
```sql
insert into Configurazione(soglia_minima,soglia_critica) values(0.3,0.7);
```
# FUNZIONI VARIE -------------------------------------------------------------
```sql
DELIMITER //
CREATE FUNCTION getStartId()
returns int deterministic
BEGIN
	declare startId int;
	set startId = (select max(id_registrazione) -7 from Terremoto);
    if startId <0 then
		set startId = 0;
    end if;
    return startId;
END
//
DELIMITER ;
```
```sql
DELIMITER //
CREATE FUNCTION getFinishId()
returns int deterministic
BEGIN
	declare finishId int;
	set finishId = (select max(id_registrazione) from Terremoto);
    return finishId;
END
//
DELIMITER ;
```
#-------------------------------------------------------------
```sql
drop view if exists tabella;
create view tabella as select t.data_registrazione, t.orario_registrazione, t.magnitudo, t.id_terremoto from Terremoto t where t.id_registrazione > getStartId();

```



Il luogo dove tutto viene visualizzato; i dati statistici e altre Informazioni riguardanti il progetto.<br>
Qui vengono mostrati agli utenti, in tempo reale i dati presi dall'arduino che si aggiornano in continuazione e tramite una pagina di login, gli amministratori possono accedere e modificare vari parametri.
Per la struttura del sito abbiamo usato un bootstrap.

![Terremoti](../Immagini/ImgCodiceSito/tabella.png)

Questo pezzo di codice mostra come viene fatta la tabella con i dati del presi dal database, prima di tutto bisogna connettersi al database inserendo i parametri; nome del server, nome utente con cui si vuole accedere, password, nome del database e infine la porta.<br>
Dopo essere sicuri che la connessione è andata a buon fine, abbiamo fatto una query dove seleziona tutti i dati della tabella ma con un limite di dati che possono essere mostrati, in modo che la tabella non è così grande.<br>
Se la query ritorna correttamente, e ci sono dei dati all'interno della tabella, allora inserisce nella tabella i valori corrispondenti della data, ora e magnitudo.
<br>

![Terremoti](../Immagini/ImgCodiceSito/grafico.png)

Per il grafico abbiamo usato un canvas e tramite questo script si va a creare il grafico a linee con l'opzione di responsive attiva, con la data sull'asse delle X e il magnitudo sull'asse delle Y e con i vari parametri per lo stile. Arrivo fino ad un massimo di 5 dati visualizzati.

### Hardware e codice
<div style="text-align: justify">
La progettazione dell'hardware prevedeva l'uso di una board ArduinoWifi collegato al geofono e e a un display per mostrare la misurazione ottenuta direttamente sul luogo. Purtroppo noi abbiamo avuto un problema con l'ordine dei componenti che sono risultati dispersi. Quindi abbiamo deciso di svilluppare il progetto con un fishino UNO Rev2, una scheda compatibile con arduino e equipaggiata con un modulo per il WIFI. Per quanto riguarda i dati di misurazione, generiamo noi dei dati fittizi da inviare al server.
</div>

<div style="text-align: justify">
Abbiamo utilizzato ArduinoIDE. Se si ha problemi con le librerie di fishino consultare il diario del

[3.04.2020](../Diari/SismoLive_2020_04_03.md)
o il sito di <a href="https://fishino.it/download-libraries-it.html">fishino</a>.<br>
Per prima cosa si deve configurare le informazioni che ci serviranno per connetterci al wifi come:
<ul>
    <li>SSID: nome della rete</li>
    <li>Password: password del wifi</li>
    <li>IP gateway</li>
    <li>Subnetmask</li>
</ul>
L'IP del fishino verrà assegnato automaticamente dal DHCP del router, ma se si vuole si puo assegnare un IP fisso con la seguente riga di codice "#define IPADDR 192, 168, 1, 251". Quindi per fare questa configurazione bisognerà scrivere il seguente codice:<br>
<br>

![](../Immagini/ImgCodiceArduino/1_ConfigurazioneSketch.PNG)

<br>
Dopo aver adattato lo sketch alla rete si deve poter connettere la scheda al WIFI appena configurato.
Il primo passo per connettere il fishino a una nuova rete é quello di resettarlo in modo da cancellare vecchie configurazioni sulla scheda.
<br>

![](../Immagini/ImgCodiceArduino/2_ResettingFishino.PNG)
<br>
Dopodiché si imposta la modalità fisica a 11G e la modalità di operazione del fishino in <b>STATION_MODE</b>, cosifacendo si impone al fishino di dover collegarsi a una rete wifi già esistente. Infatti il fishino é in grado di creare un nuova rete con la modalità <b>SOFTAP_MODE</b>
<br>

![](../Immagini/ImgCodiceArduino/3_SetModes.PNG)
<br>

Ora si puó passare alla connessione al wifi. Con la soluzione da noi proposta se la rete non esiste o se si ha passato una password errata il programma continuerà a provare a connettersi all'infino finché non trova la rete con SSID e Password passati prima. Quindi il codice é il seguente:
<br>
![](../Immagini/ImgCodiceArduino/4_ConnessioneAlRouter.PNG)
<br>

Infine manca solo l'acquisizione di un indirizzo IP dal DHCP. Per fare questo esiste il metodo <b>Fishino.staStartDHCP()</b>. Anche qui il programma aspetta all'infinito finche il fishino non ha ricevuto un IP dal DHCP.
<br>
![](../Immagini/ImgCodiceArduino/5_RichiestaIPAlDHCP.PNG)
<br>

Adesso il fishino é connesso al wifi e manca solo di inviare i dati al nostro server.
<br>
Fishino invia i dati con il metodo POST, ma per prima cosa ci si deve connettere al host dove é presente il file php in cui andremo a ricevere i dati che invia il fishino. Il metodo che permette la connessione al host del server é <b>client.connect("www.sismolive.online",80)</b>, dove il primo parametro corrisponde all'host mentre il secondo é la prota su cui vogliamo conneterci.
Se la connessione all'host va a buon fine possiamo impostare il file che dovrà ricevere i dati, questo lo si fa con il meotodo <b>client.println(F("POST /Php/MySQL_connection.php HTTP/1.1"));</b>. Il percorso che si deve inserire é il percorso del file php partendo dall'host.
Poi bisogna riferire la lunghezza del dato che si vuole mandare, questo lo si puó ricavare con il metodo <b>length()</b>. Il metodo di invio dati alla fine risultera questo:
<br>
![](../Immagini/ImgCodiceArduino/6_InvioDati.PNG)
<br>
Il parametro passato non é altro che il valore che abbiamo creato il generatore di dati fittizzi. Il generatore di dati é un normalissimo random di numeri double in un range specificato con numero minimo e massimo (inclusi nella randomizzazione).
<br>
![](../Immagini/ImgCodiceArduino/7_GeneratoreDati.PNG)
<br>

</div>

## Test

### Protocollo di test

|Test Case      | TC-001                       |
|---------------|--------------------------------------|
|**Nome**       |Presenza del sito|
|**Riferimento**|REQ-001|
|**Descrizione**| Bisogna verificare che esista il sito all'url: http://sismolive.online/index.php, e che tutte le pagine vengono visualizzate senza problemi.|
|**Prerequisiti**| --- |
|**Procedura**   | Aprire un browser ed andare sul seguente url: http://sismolive.online/index.php, controllare che il grafico e la tabella si vedono e si aggiornano ogni 5 secondi, aprire anche le altre sezioni del sito.|
|**Risultati attesi** | Deve apparire la pagina principale con grafico e tabella con dati al suo interno, ogni 5 secondi si deve poter vedere un miglioramento, non ci devono essere problemi di connessione al database o di altro genere.|


|Test Case      | TC-002                       |
|---------------|--------------------------------------|
|**Nome**       | Presenza di una pagina di login|
|**Riferimento**|REQ-003|
|**Descrizione**| Visitando il sito, deve esserci la possibilità di eseguire il login e collegarsi come amministratori.|
|**Prerequisiti**| Visitare il sito|
|**Procedura**   | Avere il sito su questo url: http://www.sismolive.online/index.php Dopodichè in alto a destra cliccare sul bottone "Login" inserire le credenziale: nome utente: test password: test. E controllare se una volta reindirizzato sulla pagina principale, spunta la parte di configurazione. |
|**Risultati attesi** | Dovrebbe apparire la pagina di login, e tramite le credenziali deve poter accedere come amministratore e avere la possibilità di aprire la pagina di configurazione e modificare i parametri.|


|Test Case      | TC-003                       |
|---------------|--------------------------------------|
|**Nome**       |Compatibilità coi principali browser|
|**Riferimento**|REQ-007|
|**Descrizione**| Il sito deve essere compatibile con i principali browser (Chrome, Opera, Firefox, Edge)|
|**Prerequisiti**| Avere il sito |
|**Procedura**   | Inserire l'url http://www.sismolive.online/index.php sui vari browser sopracitati, controllare se i grafici e la tabella si aggiornano ogni 5 secondi e che il login funzioni.|
|**Risultati attesi** | Dovrebbe apparire la pagina principale con i grafici e le tabelle e con possibilità di effettuare il login.|


|Test Case      | TC-004                       |
|---------------|--------------------------------------|
|**Nome**       | Presenza di un agenda di progetto su TRELLO|
|**Riferimento**|REQ-015|
|**Descrizione**| Dev'esserci un agenda di progetto su TRELLO |
|**Prerequisiti**| Tutti e 4 i componenti del gruppo e il docente perito del progetto devono avere un account|
|**Procedura**   | Visitare https://trello.com/b/fdVY0YLT/sismolive|
|**Risultati attesi** | Visitando l'agenda devono essere presenti le varie liste di attività|


|Test Case      | TC-005                       |
|---------------|--------------------------------------|
|**Nome**       |DB collegato al sito|
|**Riferimento**|REQ-002, REQ-009|
|**Descrizione**|Deve esistere un database collegato da remoto al sito|
|**Prerequisiti**||
|**Procedura**   |Connettersi al DB tramite WorkBench, provare ad aggiungere un record in Terremoto, in seguito aprire il sito e controllare se nella tabella e nel grafico viene visualizzato il record.|
|**Risultati attesi** |Sul sito dovrebbe apparire il nuovo record di terremoto, sia nella tabella che nel rispettivo grafico.|


|Test Case      | TC-006                       |
|---------------|--------------------------------------|
|**Nome**       |Grafici sul sito          |
|**Riferimento**|REQ-008|
|**Descrizione**|I dati sul sito devono essere rappresentati sotto forma di grafici.  |
|**Prerequisiti**|Avere dei dati da dover rappresentare.|
|**Procedura**   |Visitare http://www.sismolive.online/index.php e scorrere in basso, fino al grafico, dove ogni 5 secondi si deve aggiornare.|
|**Risultati attesi** |Si dovrebbe poter vedere il grafico dei terremoti che si aggiorna ogni 5 secondi, con accanto la rispettiva tabella|


|Test Case      | TC-007                       |
|---------------|--------------------------------------|
|**Nome**       |Struttura hardware con Fishino|
|**Riferimento**|REQ-004                     |
|**Descrizione**|La creazione dei dati deve avvenire da una struttura hardware con fishino.  |
|**Prerequisiti**|  |
|**Procedura**   |Controllare la struttura dell'arduino. |
|**Risultati attesi** |Deve esserci una struttura solida con arduino e ulteriori componenti collegati.  |


|Test Case      | TC-008                       |
|---------------|--------------------------------------|
|**Nome**       |Misurazione vibrazioni con geofono           |
|**Riferimento**|REQ-005                     |
|**Descrizione**|Tramite il geofono, bisogna poter prendere i dati che elabora con le vibrazioni del terreno, e poterli leggere nell'arduino.  |
|**Prerequisiti**|                           |
|**Procedura**   |Controllare se c'è il geofono e se l'arduino tramite un sistema di output, riceve i dati dal componente correttamente. |
|**Risultati attesi** |L'arduino deve stampare in console i vari valori delle frequenze che elabora il geofono.|


|Test Case      | TC-009                       |
|---------------|--------------------------------------|
|**Nome**       |Collegamento Fishino al WIFi          |
|**Riferimento**|REQ-006                     |
|**Descrizione**|La parte hardware del progetto deve poetr inviare dati tramite WIFI e quindi deve petersi collegare a internet.|
|**Prerequisiti**|  |
|**Procedura**   |Controllare che esista la rete con SSID e password definiti nel codice fishino.|
|**Risultati attesi** |La porta seriale a fine collegamento dovrebbe stampare lo stato della connessione.|


|Test Case      | TC-010                       |
|---------------|--------------------------------------|
|**Nome**       |Invio dati|
|**Riferimento**|REQ-006                  |
|**Descrizione**|L'invio dei dati avviene tramite il metodo post, verso un file php all'interno del sito internet. I dati inviati sono fittizi.|
|**Prerequisiti**|Riuscirsi a collegarsi a internet|
|**Procedura**   |Una volta collegati al wifi, il codice dovrebbe mandare i dati 5 volte al secondo tramite il metodo send.|
|**Risultati attesi** |Il fishino non da errori nell'invio di dati.|

|Test Case      | TC-011                      |
|---------------|--------------------------------------|
|**Nome**       |Inserimento nel DB dei dati|
|**Riferimento**|REQ-009                    |
|**Descrizione**|I dati ricevuti dal fishino devono essere inseriti in un db mysql.|
|**Prerequisiti**|Avere un sito funzionante e un DB per contenere i dati.|
|**Procedura**   |Controllare che il fishino sia connesso, verificare che il sito e il DB esistano, verificare nel codice arduno che il percorso per il file php sia corretto.|
|**Risultati attesi** |Nel DB dovrebbero essere stati inseriti i dati|

|Test Case      | TC-012                      |
|---------------|--------------------------------------|
|**Nome**       | Dato in live su LCD|
|**Riferimento**|REQ-010                       |
|**Descrizione**| Tramite un LCD montato sull'arduino, bisogna mostrare il dato appena registrato|
|**Prerequisiti**||
|**Procedura**   |Controllare sulla struttura se c'è un LCD montato e se mostra i dati in tempo reale. |
|**Risultati attesi** |Ci dovrebbe essere un LCD con i dati misurati/generati casualmente. |

|Test Case      | TC-013                      |
|---------------|--------------------------------------|
|**Nome**       |configurazione soglie da parte dell'admin |
|**Riferimento**|REQ-11                       |
|**Descrizione**| Gli amministratori possono configurare delle soglie, che corrispondono alla soglia minima e a quella massima. Settando la soglia minima, si potranno vedere i dati riguardanti il magnitudo sopra ad esso. Settando la soglia critica ad un certo valore, se si registra un magnitudo sopra quel valore, gli admin vengono avvisati tramite un'email.|
|**Prerequisiti**||
|**Procedura**   |Entrare nel sito, fare il login con il nome utente: test e la password: test. Inseguito aprire la pagina di configurazione dei parametri e settare un valore minimo e uno massimo. Infine controllare se sul grafico e sulla tabella escono solo i valori sopra la soglia e che se ci dovesse essere un terremoto di magnitudo sopra la soglia critica, arriva un'email. |
|**Risultati attesi** |La tabella e il grafico dovrebbero prendere in considerazione solo i dati sopra la soglia minima e si deve ricevere un'email se si supera la soglia critica. |

|Test Case      | TC-014                      |
|---------------|--------------------------------------|
|**Nome**       | Dato live sul sito|
|**Riferimento**|REQ-12                       |
|**Descrizione**|I dati che prende il sito, devono aggiornarsi in live sia sul grafico che sulla tabella, senza la necessità di riaggiornare la pagina ogni volta. |
|**Prerequisiti**||
|**Procedura**   |Aprire il sito, andare nella pagina dei terremoti attuali e aspettare fino a che il grafico e la tabella non cambia. |
|**Risultati attesi** |Il grafico e la tabella si aggiorna in live senza il refresh della pagina. |

|Test Case      | TC-015                      |
|---------------|--------------------------------------|
|**Nome**       |Notifica tramite email |
|**Riferimento**|REQ-13                       |
|**Descrizione**|Se si registra un terremoto sopra la soglia critica settata, gli amministratori ricevono un'email che si sta registrando un terremoto. |
|**Prerequisiti**||
|**Procedura**   |Aprire il sito, fare login con il nome utente: test e la password: test, settare una soglia critica, aspettare finchè non si registra un valore alto, e inseguito controllare la casella postale. |
|**Risultati attesi** |Dovrebbe arrivare una mail, con un'allerta che si sta registrando un terremoto. |

|Test Case      | TC-016                      |
|---------------|--------------------------------------|
|**Nome**       |Notifica tramite messaggio |
|**Riferimento**|REQ-14                       |
|**Descrizione**|Se si registra un terremoto sopra la soglia critica settata, gli amministratori ricevono un messaggio sul telefono che si sta registrando un terremoto. |
|**Prerequisiti**||
|**Procedura**   |Aprire il sito, fare login con il nome utente: test e la password: test, settare una soglia critica, aspettare finchè non si registra un valore alto, e inseguito controllare i messaggi sul telefono.  |
|**Risultati attesi** |Dovrebbe arrivare un messaggio con un'allerta che si sta registrando un terremoto. |

|Test Case      | TC-017                      |
|---------------|--------------------------------------|
|**Nome**       |Dati letti con frequenza settata |
|**Riferimento**|REQ-16                       |
|**Descrizione**| |
|**Prerequisiti**||
|**Procedura**   | |
|**Risultati attesi** | |


### Risultati test

| Test Case |  Stato   |
|-----------|----------|
|   TC-001  |  |            
|   TC-002  |  |            
|   TC-003  |  |           
|   TC-004  |   |
|   TC-005  |  |             
|   TC-006  |  |             
|   TC-007  |  |             
|   TC-008  | Non passato|             
|   TC-009  | Passato|  
|   TC-010  | Passato|                  
|   TC-011  | Passato|   
|   TC-012  |  |
|   TC-013 |  |
|   TC-014  |  |             
|   TC-015  |  |   
|   TC-016  |  |
|   TC-017 |  |
|   TC-018  |  |             
|   TC-019  |  |   

### Mancanze e limitazioni conosciute

##### Hardware

Il nostro progetto presenta la mancanza di un componente essenziale, ovvero il geofono per la misurazione delle vibrazione terrestri.
Questo é dovuto dalla scomparsa del pacco con i componenti. Abbiamo "risolto" con la creazione di dati fittizi in un range tra -1.0 e 1.0.

## Consuntivo

Consuntivo del tempo di lavoro effettivo e considerazioni riguardo le
differenze rispetto alla pianificazione (cap 1.7) (ad esempio Gannt
consuntivo).

## Conclusioni

Quali sono le implicazioni della mia soluzione? Che impatto avrà?
Cambierà il mondo? È un successo importante? È solo un’aggiunta
marginale o è semplicemente servita per scoprire che questo percorso è
stato una perdita di tempo? I risultati ottenuti sono generali,
facilmente generalizzabili o sono specifici di un caso particolare? ecc

Marco:

Georgiy:

Matthias:

Daniel:

### Sviluppi futuri

  Migliorie o estensioni che possono essere sviluppate sul prodotto.

### Considerazioni personali

  Cosa ho imparato in questo progetto? ecc

  Marco:

  Georgiy:

  Matthias:

  Daniel:

## Bibliografia

### Sitografia

**Esempio:**

-   http://standards.ieee.org/guides/style/section7.html, *IEEE
    Standards Style Manual*, 07-06-2008.

- https://www.sparkfun.com/, 29-01-2020
- https://www.seeedstudio.com/, 29-01-2020
- https://www.iconfinder.com/, 29-01-2020


## Allegati

- [Diari di lavoro](../Diari/)

- [Codice sorgente](../../Source/)

- [Mandato](../muggiasca_qdc_sismografo.pdf)

-   Istruzioni di installazione del prodotto (con credenziali
    di accesso) e/o di eventuali prodotti terzi

-   Documentazione di prodotti di terzi

-   Eventuali guide utente / Manuali di utilizzo

-   Prodotto
