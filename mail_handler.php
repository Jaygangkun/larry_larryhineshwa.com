<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

// echo json_encode($_POST);

if(isset($_POST['placeorder'])){
    // $to = "larry.hines@hwahomewarranty.com"; // this is your Email address
    // $from = $_POST['orderemail']; // this is the sender's Email address
    // $sendername = $_POST['sendername'];
    // $subject = "New Warranty Order";
    // $subject2 = "Copy of your warranty order";
    // $message = $sendername . " just sent you a new warranty order" . "\n\n" . $_POST['textinput'];
    // $message2 = "Here is a copy of your message " . $sendername . "\n\n" . $_POST['textinput'];

    // $headers = "From:" . $from;
    // $headers2 = "From:" . $to;
    // mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Your warranty order has been sent. Thank you " . $first_name . ", you will receive a confirmation and invoice shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.

    if(isset($_POST['sendername'])){
        $sendername = $_POST['sendername'];
    }
    else{
        $sendername = '';
    }

    if(isset($_POST['orderemail'])){
        $orderemail = $_POST['orderemail'];
    }
    else{
        $orderemail = '';
    }


    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->Host = 'mail.larryhineshwa.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'order-processing@larryhineshwa.com';
    $mail->Password = 'hw@0rder';
    $mail->SMTPSecure = 'tls';

    $mail->From = 'order-processing@larryhineshwa.com';
    $mail->FromName = "order-processing";
    // $mail->From = $orderemail;
    // $mail->FromName = $sendername;
    // $mail->AddAddress('larry.hines@hwahomewarranty.com');
    $mail->AddAddress('order-processing@larryhineshwa.com');

    $mail->IsHTML(true);

    $mail->Subject = "New Warranty Order ".$sendername."(".$orderemail.")";

    if(isset($_POST['propertyaddress'])){
        $propertyaddress = '<strong>Covered Property Address:</strong> '.$_POST['propertyaddress'].'<br>';
    }

    if(isset($_POST['mailingaddress'])){
        $mailingaddress = '<strong>Mailing Address (If Different):</strong> '.$_POST['mailingaddress'].'<br>';
    }

    if(isset($_POST['buyername'])){
        $buyername = '<strong>Buyer Name(s):</strong> '.$_POST['buyername'].'<br>';
    }

    if(isset($_POST['buyeremail'])){
        $buyeremail = '<strong>Buyer Email Address:</strong> '.$_POST['buyeremail'].'<br>';
    }

    if(isset($_POST['buyerphone'])){
        $buyerphone = '<strong>Buyer Phone:</strong> '.$_POST['buyerphone'].'<br>';
    }

    if(isset($_POST['titlecompany'])){
        $titlecompany = '<strong>Title Company:</strong> '.$_POST['titlecompany'].'<br>';
    }

    if(isset($_POST['escrowofficer'])){
        $escrowofficer = '<strong>Escrow Officer Name:</strong> '.$_POST['escrowofficer'].'<br>';
    }

    if(isset($_POST['escrowofficeremail'])){
        $escrowofficeremail = '<strong>Escrow Officer Email Address:</strong> '.$_POST['escrowofficeremail'].'<br>';
    }

    if(isset($_POST['escrowofficerphone'])){
        $escrowofficerphone = '<strong>Escrow Officer Phone:</strong> '.$_POST['escrowofficerphone'].'<br>';
    }

    if(isset($_POST['referringagent'])){
        $referringagent = '<strong>Referring Agent Name and Agency:</strong> '.$_POST['referringagent'].'<br>';
    }

    if(isset($_POST['referringagentphone'])){
        $referringagentphone = '<strong>Referring Agent Phone:</strong> '.$_POST['referringagentphone'].'<br>';
    }

    if(isset($_POST['referringagentemail'])){
        $referringagentemail = '<strong>Referring Agent Email Address:</strong> '.$_POST['referringagentemail'].'<br>';
    }

    if(isset($_POST['closingdate'])){
        $closingdate = '<strong>Closing Date:</strong> '.$_POST['closingdate'].'<br>';
    }

    if(isset($_POST['hometype'])){
        if($_POST['hometype'] == 'singlefamily'){
            $hometype = 'Single Family';
        }

        if($_POST['hometype'] == 'towncondomobile'){
            $hometype = 'Townhome/Condo/Mobile Home';
        }

        if($_POST['hometype'] == 'multiflat'){
            $hometype = 'Duplex/Triplex/Fourplex';
        }
        
        $hometype = '<strong>Type of Home:</strong> '.$hometype.'<br>';
    }

    if(isset($_POST['warrantytype'])){
        if($_POST['warrantytype'] == 'Gold'){
            $warrantytype = 'Gold - $370';
        }

        if($_POST['warrantytype'] == 'Platinum'){
            $warrantytype = 'Platinum - $450';
        }

        if($_POST['warrantytype'] == 'Diamond'){
            $warrantytype = 'Diamond - $500';
        }

        if($_POST['warrantytype'] == 'Sellers'){
            $warrantytype = 'Sellers Warranty';
        }

        if($_POST['warrantytype'] == 'New Construction'){
            $warrantytype = 'New Construction';
        }

        if($_POST['warrantytype'] == 'Multi-Year'){
            $warrantytype = 'Multi-Year Warranty';
        }

        $warrantytype = '<strong>Warranty Type:</strong> '.$warrantytype.'<br>';
    }

    if(isset($_POST['warrantynotes'])){
        $warrantynotes = '<strong>Warranty Notes:</strong> '.$_POST['warrantynotes'].'<br>';
    }

    if(isset($_POST['optiontype'])){
        $optiontype = '<strong>Options:</strong> <br>';
        for($index = 0; $index < count($_POST['optiontype']); $index++){
            $value = $_POST['optiontype'][$index];
            if($value == 'greenplus'){
                $value_text = '$70 Green Plus';
            }
            if($value == 'roofleak'){
                $value_text = '$50 Limited Roof Leak Repair';
            }
            if($value == 'termite'){
                $value_text = '$75 Subterranean Termite Treatment';
            }
            if($value == 'freezer'){
                $value_text = '$50 Freezer-Standalone';
            }
            if($value == 'wetbar'){
                $value_text = '$25 Wet Bar Refrigerator/2nd Refrigerator';
            }
            if($value == 'poolspa'){
                $value_text = '$150 Pool/Spa Combo';
            }
            if($value == 'addpoolspa'){
                $value_text = '$150 Additional Pool or Spa';
            }
            if($value == 'saltpool'){
                $value_text = '$300 Salt Water Pool (Includes Pool/Spa Combo)';
            }
            if($value == 'wellpump'){
                $value_text = '$100 Well Pump';
            }
            if($value == 'septicpump'){
                $value_text = '$75 Septic System/Sewage Ejector Pump & Septic Tank Pumping';
            }
            if($value == 'waterline'){
                $value_text = '$90 External Water Line Repair';
            }
            if($value == 'waterlineandsewer'){
                $value_text = '$195 External Water Line + Sewer & Septic Line Repair';
            }

            if($index == (count($_POST['optiontype']) - 1)){
                $optiontype .= $value_text;
            }
            else{
                $optiontype .= $value_text."<br>";
            }
        }
    }

    
    $mail->Body    = $propertyaddress.$mailingaddress.$buyername.$buyeremail.$buyerphone.$titlecompany.$escrowofficer.$escrowofficeremail.$escrowofficerphone.$referringagent.$referringagentphone.$referringagentemail.$closingdate.$hometype.$warrantytype.$warrantynotes.$optiontype;

    //$mail->AltBody = "Name: " . $name . ". Email: " . $email . ". Phone: " . $phone . ". Message: " . $message . ".";
    
    if(!$mail->Send()) {
        echo $mail->ErrorInfo;
        // exit;
    }
    else{
        $send_email = true;
    }
}
?>