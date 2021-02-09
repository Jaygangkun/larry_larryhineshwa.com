<?php 
if(isset($_POST['placeorder'])){
    $to = "larry.hines@hwahomewarranty.com"; // this is your Email address
    $from = $_POST['orderemail']; // this is the sender's Email address
    $sendername = $_POST['sendername'];
    $subject = "New Warranty Order";
    $subject2 = "Copy of your warranty order";
    $message = $sendername . " just sent you a new warranty order" . "\n\n" . $_POST['textinput'];
    $message2 = "Here is a copy of your message " . $sendername . "\n\n" . $_POST['textinput'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Your warranty order has been sent. Thank you " . $first_name . ", you will receive a confirmation and invoice shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>