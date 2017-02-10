<?php

$to = "ambdere@gmail.com"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$first_name = $_POST['name'];
$last_name = $_POST['surname'];
$body = $_POST['body'];

if(empty($body) || empty($from) || empty($first_name) || empty($last_name)) {

    // *****************************************************
    // *****************************************************
    // HTML page that will be displayed

    echo "<div style=\"text-align: center\">";
        echo "<img src=\"img/LogoBigger.png\" style=\"max-width: 300px\" />";
    echo "</div>";

    echo "<div style=\"text-align: center\">";
        echo "Non sono stati compilati tutti i campi";
    echo "</div>";
    echo "<div style=\"text-align: center; padding-top: 2em;\">";
        echo "<button tabindex=\"3\" class=\"btn btn-succes btn-large\"><a href=\"index.html\">Torna alla Home</a></button>";
    echo "</div>";

    // *****************************************************
    // *****************************************************

}

else if(isset($_POST['submit'])){

    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " ha scritto:" . "\n\n" . $_POST['body'];

    $headers = "Da:" . $from;
    mail($to,$subject,$message,$headers);

    // *****************************************************
    // *****************************************************
    // HTML page that will be displayed

    echo "<div style=\"text-align: center\">";
            echo "<img src=\"img/LogoBigger.png\" style=\"max-width: 300px\" />";
    echo "</div>";

    echo "<div style=\"text-align: center\">";
            echo "Mail Inviata. Grazie " . $first_name . ", ti contatteremo al più presto.";
    echo "</div>";
    echo "<div style=\"text-align: center; padding-top: 2em;\">";
            echo "<button tabindex=\"3\" class=\"btn btn-succes btn-large\"><a href=\"index.html\">Torna alla Home</a></button>";
    echo "</div>";

    // *****************************************************
    // *****************************************************

    }
?>

