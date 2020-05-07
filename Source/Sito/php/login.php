<?php
// Inizializza la sessione
session_start();

// Controlla se l'utente è già loggato, se si viene reindirizzato alla pagina principale.
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: ../html/login.php");
    exit;
}
// Include il file che effettua la connessione al database
include "connectToDB.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Filtra i dati
    $username = filter_input(INPUT_POST, 'username', FILTER_DEFAULT);
    $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
    $sql = "SELECT nome, psw FROM Utente WHERE nome = ?";
    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            // Se l'username esiste, controlla se la password è corretta
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $username, $pass);
                if (mysqli_stmt_fetch($stmt)) {
                    if (md5($password) == $pass) {
                        // La password è corretta e quindi inizia la sessione
                        session_start();
                        // Salva i dati nelle variabili di sessione
                        $_SESSION["loggedin"] = true;
                        $_SESSION["username"] = $username;
                        $_SESSION["error"] = "";
                        $_SESSION["errorLogin"] = "";
                        header("location: ../index.php");
                    } else {
                        $_SESSION["errorLogin"] = "Password errata!";
                        header("location: ../html/login.php");
                    }
                }
            } else {
                $_SESSION["errorLogin"] = "L'username non esiste!";
                header("location: ../html/login.php");
            }
        } else {
            echo "Qualcosa è andato storto. Riprova!";
        }
        mysqli_stmt_close($stmt);
    }
    // Termina la connessione al database
    mysqli_close($link);
}
?>
