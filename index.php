<?php 
    include __DIR__ . '/functions.php'; 

    session_start();
    
    if(isset($_GET['passwordL'])) {
        $_SESSION['password'] = getRandomPassword($_GET['passwordL']);
        header('Location: ./password.php');
        }
?>

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

        <section class="container pt-5 ">
            <h1 class="bg-dark text-light py-2">
                Generatore di Password (abbastanza) sicure!
            </h1>
            <form class="py-3" action="./index.php" method="GET">
                <label for="password" class="form-label">Scegli la lunghezza della password da generare:</label>
                <input class="m-3" type="number" class="form-control" name="passwordL">
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </section> 

    </header>

    <footer>

    <!--Importing Bootsrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>