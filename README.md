 ## Esercizio treni
 - creazione migration per tabella trains: `php artisan make:migration create_trains_table` e inserisci valori tabella
 - modifica file .env per database
 - `php artisan migrate` per creare le tabelle
 - inserisci dati tramite  PhpMyAdmin
 - crea un model:  `php artisan make:model Train` (-m per creare insieme file migrate)
 - crea un controller: `php artisan make:controller TrainController`
 - implementa semplice filtraggio database

## codice sql 
 - lo trovate dentro la cartella database/train.sql