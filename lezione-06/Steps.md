# Creazione progetto

1. laravel new NomeProgetto
2. Importiamo gli asset che ci servono
    - Installiamo npm: npm i
    - Scarichiamo bootstrap: npm i bootstrap
3. Importare bootstrap nel layout
    - In app.css e app.js importiamo bootstrap
    - Nel layout utilizziamo la direttiva @vite() per importarli
4. Avviamo ogni volta php artisan serve e npm run dev per far partire il nostro server di sviluppo
    - Devono essere lanciati su due terminali diversi in contemporanea per rendere funzionante il server