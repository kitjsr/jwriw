<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "jwriw@protonmail.com";   // Your email ID

    $company  = htmlspecialchars($_POST['company']);
    $contact  = htmlspecialchars($_POST['contact']);
    $email    = htmlspecialchars($_POST['email']);
    $phone    = htmlspecialchars($_POST['phone']);
    $product  = htmlspecialchars($_POST['product']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $specs    = htmlspecialchars($_POST['specs']);

    $subject = "New RFQ Request - JWRIW Website";

    $message = "
    New Request for Quote Received

    Company Name: $company
    Contact Person: $contact
    Email: $email
    Phone: $phone
    Product Required: $product
    Quantity Required: $quantity

    Technical Requirements:
    $specs
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {

        echo "
        <script>
            alert('Your request has been submitted successfully.');
            window.location.href='index.html';
        </script>
        ";

    } else {

        echo "
        <script>
            alert('Sorry! Mail sending failed.');
            window.history.back();
        </script>
        ";

    }

} else {

    echo "Invalid Request";

}

?>