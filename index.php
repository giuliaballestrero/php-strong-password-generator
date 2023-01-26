<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> >> Php Strong Pw Generator << </title>
    <!--Importing Bootstrap v.5.3-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php 
/*
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
*/

?>

<body>

    <header>
        <!--Milestone 1
        Creare un form che invii in GET la lunghezza della password.
        Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
        Scriviamo tutto (logica e layout) in un unico file index.php-->

        <section class="container">
            <form class="py-3" action="./index.php" method="GET">
                <label for="password" class="form-label">Lunghezza password:</label>
                <input class="m-3" type="password" class="form-control" name="passwordL">
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </section> 

        <?php 
            $passwordLength = $_GET['passwordL'];
            var_dump($passwordLength);
            
            function getRandomPassword($passwordLength) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$?%^&*_-+=@';
                $randomString = '';

                for ($i = 0; $i < $passwordLength; $i++) {
                    $index = rand(0, strlen($characters) - 1);
                    $randomString .= $characters[$index];
                }

                return $randomString;
            }

            echo getRandomPassword($passwordLength);
        ?>

    </header>

    <main>
        
    </main>

    <footer>

    </footer>


    <!--Importing Bootsrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>