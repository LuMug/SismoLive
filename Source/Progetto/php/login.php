<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
    header("location: ../html/login.html");
    exit;
}

// Include config file
require_once "config.php";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if (!(empty(trim($_POST["username"]))))
    {
        $username = trim($_POST["username"]);
    }

    if (!(empty(trim($_POST["password"]))))
    {
        $password = trim($_POST["password"]);
    }

    $username = filter_input(INPUT_POST, 'username', FILTER_DEFAULT);
    $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

    // Prepare a select statement
    $sql = "SELECT nome, psw FROM Utente WHERE nome = ?";

    if ($stmt = mysqli_prepare($link, $sql))
    {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        // Set parameters
        $param_username = $username;

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt))
        {
            // Store result
            mysqli_stmt_store_result($stmt);

            // Check if username exists, if yes then verify password
            if (mysqli_stmt_num_rows($stmt) == 1)
            {
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $username, $pass);
                if (mysqli_stmt_fetch($stmt))
                {
                    if (md5($password) == $pass)
                    {
                        // Password is correct, so start a new session
                        session_start();

                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["username"] = $username;

                        // Redirect user to welcome page
                        header("location: ../index.php");
                    }
                    else
                    {
                        header("location: ../html/login.html");
                    }
                }
            }
        }
        else
        {
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>
