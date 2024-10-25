
## Come usare una template repository
- Apri la repository su github e in alto a destra clicca su "Use this template" e poi crea una nuova repository
- Le diamo un nome come richiesto
- La cloniamo direttamente dalla nostra IDE (vscode)
- Apriamo la repository
- Copio e incollo il mio file `.env.example` e lo rinomino come `.env`
- Eseguiamo `npm install`
- Eseguiamo `composer install`
- Eseguiamo il comando di generazione della chiave univoca del nostro progetto con `php artisan key:generate`
- Eseguiamo i due comandi di esecuzione costante in due terminali separati (anche paralleli, volendo) `npm run dev` e `php artisan serve`

 ## Esercizio treni
 - creazione migration per tabella trains: `php artisan make:migration create_trains_table` e inserisci valori tabella
 - modifica file .env per database
 - `php artisan migrate` per creare le tabelle
 - inserisci dati tramite  PhpMyAdmin
 - crea un model:  `php artisan make:model Train` (-m per creare insieme file migrate)
 - crea un controller: `php artisan make:controller TrainController`
implementa semplice filtraggio database