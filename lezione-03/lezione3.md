# Recap lezione precedente

   -named routes e helper route()
   -rotte parametriche
   -passaggio dati tramite view()

# Lezione 3

    -clone progetto
    -Architettura MVC
    -SOC separation of concerns
    -Controller e sua funzione
    -Creazione controller (php artisan make:controller)
    -Aggiornamento progetto

    -namespaces e keyword use

    

# Extra

    -config()
    -asset() per importare fogli di stile


# Procedura cloning progetto

    - git clone link-repo
    - composer install 
        serve a reinstallare tutte le dipendenze di laravel e la cartella vendor
    - creare il file .env copiando il .env.example gia disponibile e rinominandolo
    - php artisan key:generate
         serve a generare la chiave di criptatura dell'applicazione

    - php artisan migrate  per creare il database di cui laravel ha bisogno
    - rispondiamo yes quando ci viene chiesto se creare il database


# Commento blade

{{--
    questo codice blade quindi html e php viene commentato
    anche multilinea

--}}