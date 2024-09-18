/*CONSEGNA*/

nome repo: php-oop-2
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
- Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di       articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

- Cominciate a fare prima le classi. Per ogni classe creata, fate una o due istanze per vedere il risultato con il var_dump. Una volta create tutte le classi verificate che siano coerenti con quanto scritto nell'esercizio, allora create delle strutture dati da mostrare in pagina.

/*SOLUZIONE*/
- per prima cosa creo le classi principali, ovvero Categoria (rappresenta le categorie Cani e Gatti), Prodotto (rappresenta un prodotto generico), Cibo, Gioco, Cuccia (queste tre rappresentano dei prodotti specifici), Shop (gestisce i prodotti)
- creo una classe shop il cui scopo sarà gestire i prodotti e stampare le infomazioni in una struttura HTML, come una card.
- modifico il file index.php in modo tale da aggiungere una porzone html il cui compito è far comparire a video le card rapprentanti i prodotti degli degli animali.
- modifico il file index.php in modo di includere le immagini e le icone dei prodotti per gli animali.
- modifico il file index.php per avere una resa grafica migliore.