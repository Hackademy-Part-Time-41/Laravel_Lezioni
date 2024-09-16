# I database

-Cos'è un Database? Base di dati
-Struttura dei dati e rappresentazione
-RDBMS: cos'è e cosa fa?

# Tipologie di database

-Database relazionali
    -Struttura tabellare: tabelle(modello relazionale) -> righe e colonne
    -Cosa sono le tabelle? Sono degli spazi nel database in cui andare a salvare diverse entità, in generale ogni tabella contiene una sola entità
    -Cosa rappresentano le colonne? Ogni colonna è un attributo dell'entità a cui appartiene
        - Nomi tabelle: in inglese e plurale, prendiamo il nome dell'entità che la tabella contiene 
        - Nomi delle colonne: nome descrittivo del contenuto della colonna, se composto da più parole le separo con _  No spazi
        - Tipologie di dati: https://dev.mysql.com/doc/refman/8.0/en/data-types.html#:~:text=MySQL%20supports%20SQL%20data%20types,and%20the%20JSON%20data%20type.

    -Cosa rappresentano le righe?
    -Analogia con i dati dei vecchi progetti

    - SQL e query: standard query language

    - RDBMS: ralational database management system si occupa di gestire, aggiornare, modificare e leggere in nostri database

    -Record: cos'è?

    -Chiavi primarie (analogie con gli array)
        -Che tipo di dato è una primary key?
        -Chi assegna il valore alla primary key?

    -Chiavi secondarie
        -Foreign key o chiave esterna
        -Vincolo di integrità referenziale

    -Relazioni: one-to-one one-to-many many-to-many ecc...


    - Tabelle:
        - Primary key- solitamente di tipo unsigned big integer (di default) che autoincrementa
        - Altre colonne con nome, tipo di dato ed eventuali chiavi esterne



-Database non relazionali:
    -NoSQL not only sql
        -Key,value
        -Document based: es. json
        -Graph based: (nodi e archi)
        -Column based

# Progettare un database
    - Concetto di Schema
    - Come creare uno schema: https://dbdiagram.io/

# Extra 

    -Installazione mysql e tableplus