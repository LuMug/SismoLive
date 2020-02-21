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

5. [Test](#test)

  - [Protocollo di test](#protocollo-di-test)

  - [Risultati test](#risultati-test)

  - [Mancanze/limitazioni conosciute](#mancanze/limitazioni-conosciute)

6. [Consuntivo](#consuntivo)

7. [Conclusioni](#conclusioni)

  - [Sviluppi futuri](#sviluppi-futuri)

  - [Considerazioni personali](#considerazioni-personali)

8. [Sitografia](#sitografia)

9. [Allegati](#allegati)


## Introduzione

### Informazioni sul progetto

- Allievi:
	> Daniel Matt (Sviluppatore)
	> Georgiy Farina (Sviluppatore)
	> Marco Lorusso (Sviluppatore)
	> Matthias Iannarella (Sviluppatore)

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

  Lo scopo di questo progetto è quello di avere una costante misurazione, insieme alla relativa rappresentazione su un sito web, delle vibrazioni terrestri. Nel caso di un terremoto vengono notificati via mail gli amministratori e sul sito coloro che lo visitano.

## Analisi

### Analisi del dominio

Il prodotto finale potrà essere utilizzato da tutti gli utenti, sia esperti,
sia principianti, che hanno a disposizione un computer oppure un telefono e una
connessione a internet.<br>

  Questo capitolo dovrebbe descrivere il contesto in cui il prodotto verrà
  utilizzato, da questa analisi dovrebbero scaturire le risposte a quesiti
  quali ad esempio:

  -   Background/Situazione iniziale

  -   Quale è e come è organizzato il contesto in cui il prodotto dovrà
      funzionare?

  -   Come viene risolto attualmente il problema? Esiste già un prodotto
      simile?

  -   Chi sono gli utenti? Che bisogni hanno? Come e dove lavorano?

  -   Che competenze/conoscenze/cultura posseggono gli utenti in relazione
      con il problema?

  -   Esistono convenzioni/standard applicati nel dominio?

  -   Che conoscenze teoriche bisogna avere/acquisire per poter operare
      efficacemente nel dominio?

  -   …

### Analisi e specifica dei requisiti

**Spiegazione elementi tabella dei requisiti:**

**ID**: identificativo univoco del requisito.

**Nome**: breve descrizione del requisito.

**Priorità**: indica l’importanza di un requisito nell’insieme del
progetto.

**Versione**: indica la versione del requisito.

**Note**: eventuali note.

  | **ID**  | **Requisito** | **Priorità** | **Versione** | **Note** |
  | ------- | ------------- | ------------ | ------------ | -------- |
  | REQ-001 | Realizzare un sito per la visualizzazione dei dati.| 1 | 1.0  |          |
  | REQ-002 || 1 | 1.0  |          |
  | REQ-003 || 1 | 1.0  |          |
  | REQ-004 || 1 | 1.0 | |
  | REQ-005 || 1 | 1.0 | |
  | REQ-006 || 1 | 1.0| |
  | REQ-007 || 1 | 1.0 |   |
  | REQ-008 | | 1 | 1.0 |          |
  | REQ-009 | | 1 | 1.0 | |
  | REQ-010 | | 1 | 1.0 |       |
  | REQ-011 |  | 1 | 1.0 |  |
  | REQ-012 | | 1 | 1.0 |  |
  | REQ-013 |  | 1 | 1.0 |  |
  | REQ-014 | | 1 | 1.0 | |
  | REQ-015 | | 1 | 1.0 | |
  | REQ-016 | | 1 | 1.0 |  |
  | REQ-017 | | 1 | 1.0 |  |
  | REQ-018 | | 1 | 1.0 |  |
  | REQ-019 | | 1 | 1.0 |  |
  | REQ-020 | | 1 | 1.0 |  |


### Use case

I casi d’uso rappresentano l’interazione tra i vari attori e le
funzionalità del prodotto.

### Pianificazione

Prima di stabilire una pianificazione bisogna avere almeno una vaga idea
del modello di sviluppo che si intende adottare. In questa sezione
bisognerà inserire il modello concettuale di sviluppo che si seguirà
durante il progetto. Gli elementi di riferimento per una buona
pianificazione derivano da una scomposizione top-down della problematica
del progetto.

La pianificazione può essere rappresentata mediante un diagramma di
Gantt.

Se si usano altri metodi di pianificazione (es scrum), dovranno apparire
in questo capitolo.

### Analisi dei mezzi

#### Hardware

Matthias:

- ASUS ROG GL553VE, Windows 10 Home 64 bit, versione 1903 build 18362.535.

Marco:

Georgiy:
- Acer Aspire A717-71G, Windows 10 home 64 bit 

Daniel:

#### Software

- Lunacy v4.6.1

- Atom v1.40.1

- Microsoft Project 2019 v16

- GitHub Desktop v2.1.3

- Google Chrome v79.0.3945.79

- XAMPP v3.2.4

- MySQL Workbench 8.0 CE

#### Librerie


## Progettazione

Questo capitolo descrive esaustivamente come deve essere realizzato il
prodotto fin nei suoi dettagli. Una buona progettazione permette
all’esecutore di evitare fraintendimenti e imprecisioni
nell’implementazione del prodotto.

### Design dell’architettura del sistema

Descrive:

-   La struttura del programma/sistema lo schema di rete...

-   Gli oggetti/moduli/componenti che lo compongono.

-   I flussi di informazione in ingresso ed in uscita e le
    relative elaborazioni. Può utilizzare *diagrammi di flusso dei
    dati* (DFD).

-   Eventuale sitemap

### Design dei dati e database

Descrizione delle strutture di dati utilizzate dal programma in base
agli attributi e le relazioni degli oggetti in uso.

### Schema E-R, schema logico e descrizione.

Se il diagramma E-R viene modificato, sulla doc dovrà apparire l’ultima
versione, mentre le vecchie saranno sui diari.

### Design delle interfacce

Descrizione delle interfacce interne ed esterne del sistema e
dell’interfaccia utente. La progettazione delle interfacce è basata
sulle informazioni ricavate durante la fase di analisi e realizzata
tramite mockups.

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

In questo capitolo dovrà essere mostrato come è stato realizzato il
lavoro. Questa parte può differenziarsi dalla progettazione in quanto il
risultato ottenuto non per forza può essere come era stato progettato.

Sulla base di queste informazioni il lavoro svolto dovrà essere
riproducibile.

In questa parte è richiesto l’inserimento di codice sorgente/print
screen di maschere solamente per quei passaggi particolarmente
significativi e/o critici.

Inoltre dovranno essere descritte eventuali varianti di soluzione o
scelte di prodotti con motivazione delle scelte.

Non deve apparire nessuna forma di guida d’uso di librerie o di
componenti utilizzati. Eventualmente questa va allegata.

Per eventuali dettagli si possono inserire riferimenti ai diari.

## Test

### Protocollo di test

|Test Case      | TC-001                       |
|---------------|--------------------------------------|
|**Nome**       ||
|**Riferimento**|REQ-|
|**Descrizione**|  |
|**Prerequisiti**|  |
|**Procedura**   | |
|**Risultati attesi** |  |


|Test Case      | TC-002                       |
|---------------|--------------------------------------|
|**Nome**       |           |
|**Riferimento**|REQ-                     |
|**Descrizione**|  |
|**Prerequisiti**|  |
|**Procedura**   | |
|**Risultati attesi** |  |


|Test Case      | TC-003                       |
|---------------|--------------------------------------|
|**Nome**       |           |
|**Riferimento**|REQ-                     |
|**Descrizione**|  |
|**Prerequisiti**|  |
|**Procedura**   | |
|**Risultati attesi** |  |


|Test Case      | TC-004                       |
|---------------|--------------------------------------|
|**Nome**       |           |
|**Riferimento**|REQ-                     |
|**Descrizione**|  |
|**Prerequisiti**|  |
|**Procedura**   | |
|**Risultati attesi** |  |


|Test Case      | TC-005                       |
|---------------|--------------------------------------|
|**Nome**       |           |
|**Riferimento**|REQ-                     |
|**Descrizione**|  |
|**Prerequisiti**|  |
|**Procedura**   | |
|**Risultati attesi** |  |


|Test Case      | TC-006                       |
|---------------|--------------------------------------|
|**Nome**       |           |
|**Riferimento**|REQ-                     |
|**Descrizione**|  |
|**Prerequisiti**|  |
|**Procedura**   | |
|**Risultati attesi** |  |


|Test Case      | TC-007                       |
|---------------|--------------------------------------|
|**Nome**       |           |
|**Riferimento**|REQ-                     |
|**Descrizione**|  |
|**Prerequisiti**|  |
|**Procedura**   | |
|**Risultati attesi** |  |


|Test Case      | TC-008                       |
|---------------|--------------------------------------|
|**Nome**       |           |
|**Riferimento**|REQ-                     |
|**Descrizione**|  |
|**Prerequisiti**|  |
|**Procedura**   | |
|**Risultati attesi** |  |


|Test Case      | TC-009                       |
|---------------|--------------------------------------|
|**Nome**       |           |
|**Riferimento**|REQ-                     |
|**Descrizione**|  |
|**Prerequisiti**|  |
|**Procedura**   | |
|**Risultati attesi** |  |


|Test Case      | TC-010                       |
|---------------|--------------------------------------|
|**Nome**       |           |
|**Riferimento**|REQ-                     |
|**Descrizione**|  |
|**Prerequisiti**|  |
|**Procedura**   | |
|**Risultati attesi** |  |

|Test Case      | TC-011                      |
|---------------|--------------------------------------|
|**Nome**       | |
|**Riferimento**|REQ-                       |
|**Descrizione**| |
|**Prerequisiti**||
|**Procedura**   | |
|**Risultati attesi** | |

|Test Case      | TC-012                      |
|---------------|--------------------------------------|
|**Nome**       | |
|**Riferimento**|REQ-                       |
|**Descrizione**| |
|**Prerequisiti**||
|**Procedura**   | |
|**Risultati attesi** | |

|Test Case      | TC-013                      |
|---------------|--------------------------------------|
|**Nome**       | |
|**Riferimento**|REQ-                       |
|**Descrizione**| |
|**Prerequisiti**||
|**Procedura**   | |
|**Risultati attesi** | |

|Test Case      | TC-014                      |
|---------------|--------------------------------------|
|**Nome**       | |
|**Riferimento**|REQ-                       |
|**Descrizione**| |
|**Prerequisiti**||
|**Procedura**   | |
|**Risultati attesi** | |

|Test Case      | TC-015                      |
|---------------|--------------------------------------|
|**Nome**       | |
|**Riferimento**|REQ-                       |
|**Descrizione**| |
|**Prerequisiti**||
|**Procedura**   | |
|**Risultati attesi** | |

|Test Case      | TC-016                      |
|---------------|--------------------------------------|
|**Nome**       | |
|**Riferimento**|REQ-                       |
|**Descrizione**| |
|**Prerequisiti**||
|**Procedura**   | |
|**Risultati attesi** | |

|Test Case      | TC-017                      |
|---------------|--------------------------------------|
|**Nome**       | |
|**Riferimento**|REQ-                       |
|**Descrizione**| |
|**Prerequisiti**||
|**Procedura**   | |
|**Risultati attesi** | |

|Test Case      | TC-018                      |
|---------------|--------------------------------------|
|**Nome**       | |
|**Riferimento**|REQ-                       |
|**Descrizione**| |
|**Prerequisiti**||
|**Procedura**   | |
|**Risultati attesi** | |

|Test Case      | TC-019                      |
|---------------|--------------------------------------|
|**Nome**       | |
|**Riferimento**|REQ-                       |
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
|   TC-008  | |             
|   TC-009  | |  
|   TC-010  |  |             
|   TC-011  |  |   
|   TC-012  |  |
|   TC-013 |  |
|   TC-014  |  |             
|   TC-015  |  |   
|   TC-016  |  |
|   TC-017 |  |
|   TC-018  |  |             
|   TC-019  |  |   

### Mancanze/limitazioni conosciute

Descrizione con motivazione di eventuali elementi mancanti o non
completamente implementati, al di fuori dei test case. Non devono essere
riportati gli errori e i problemi riscontrati e poi risolti durante il
progetto.

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

1.  URL del sito (se troppo lungo solo dominio, evt completo nel
    diario),

2.  Eventuale titolo della pagina (in italico),

3.  Data di consultazione (GG-MM-AAAA).

**Esempio:**

-   http://standards.ieee.org/guides/style/section7.html, *IEEE
    Standards Style Manual*, 07-06-2008.

- https://www.sparkfun.com/, 29-01-2020
- https://www.seeedstudio.com/, 29-01-2020
- https://www.iconfinder.com/, 29-01-2020


## Allegati

- [Diari di lavoro](Diari/)

- [Codice sorgente](../Source/)

- [Mandato](muggiasca_qdc_sismografo.pdf)

-   Istruzioni di installazione del prodotto (con credenziali
    di accesso) e/o di eventuali prodotti terzi

-   Documentazione di prodotti di terzi

-   Eventuali guide utente / Manuali di utilizzo

-   Prodotto

-   …
