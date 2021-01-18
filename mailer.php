<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

// Turn this off when debugging and devloping
//error_reporting(0);

// Mail values
$fromName        =  trim($_POST["fromName"]);
$fromEmail       =  trim($_POST["fromEmail"]);
$toEmail         =  trim($_POST["toEmail"]);
$cc              =  trim($_POST["cc"]);
$bcc             =  trim($_POST["bcc"]);
$subjectLine     =  trim($_POST["subjectLine"]);

// Message Values
$richMessageText =  $_POST["richMessageText"];
$rawMessageText  =  $_POST["rawMessageText"];
$message         =  "";
$messageErrorSet = false;

// Attatchment
$path            = "uploads/";
$path            = $path . basename( $_FILES['attachment']['name']);
$fileTempName    = $_FILES['attachment']['tmp_name'];
$fileUploaded    = 0; // 0 = no upload, 1 = upload success, 2 = upload failure
$attatchError    = "";

// File attacher + error handler
if (!empty($fileTempName)) { //checks to see if a file was attatched
    // Attempt to upload file
    if(move_uploaded_file($fileTempName, $path)) {
        $fileUploaded = 1; // success
    } else {
        $fileUploaded = 2; // failure
        $attatchError = "Your message was not sent. There was an error uploading your attachment. Make sure that your php.ini file within your web server allows for file uploads, and that it allows for the upload size of your attatched file. Check out <a href='https://mediatemple.net/community/products/dv/204403894/how-can-i-edit-the-php.ini-file'>this guide</a> to make changes to the php.ini file.";
    }
}

// Store the right message body as the $message var
// If value exists for ritch text but not raw sore rich message text as $message
if(!empty($richMessageText) && empty($rawMessageText)) {
    $message = $richMessageText;
}
// If value exists for raw text but not ritch store raw message text as $message
elseif (empty($richMessageText) && !empty($rawMessageText)) {
    $message = $rawMessageText;
// If values exist for both then throw an error and update the error text
} elseif (!empty($richMessageText) && empty(!$rawMessageText)){
    $messageErrorText = "Your message was not sent. You have entered content into both the rich text editor and the raw text. Please return to the form and only use one.";
    $messageErrorSet = true;
} else {
    $messageErrorText = "Your message was not sent. It appears as if you did not enter any content into the message text area. Make sure that you go back and input content here.";
    $messageErrorSet = true;
}

// This code was brorrowed from the PHPMailer github page as an example useage
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Recipients
    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($toEmail);
    // Add cc to header if there is a value in either
    if (!empty($cc)) {
        $mail->addCC($cc);
    }
    // Add bcc to header if there is a value
    if (!empty($bcc)) {
        $mail->addBCC($bcc);
    }
    //Attachments
    if (!empty($fileTempName)) {        //checks to see if a file was attatched
        $mail->addAttachment($path);    // Add attachments
    }
    //Content
    $mail->isHTML(true);                // Set email format to HTML
    $mail->Subject = $subjectLine;
    $mail->Body    = $message;

    // Send Mail using values
    if ($fileUploaded == 2) {
        //dont send message
    } else {
        $mail->send();
        //SUCESS mailed message
        echo "
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"alert alert-success\" role=\"alert\">
                <strong>Email Sent!</strong> Your spoofed email has been sent using the values seen below. Keep in mind that if you used the rich text editor, the message may appear slightly different in the actual email. Thanks for using Zaqar!
            </div>
        </div>
        ";
    }

    // Failure message sent
} catch (Exception $e) {
    echo "
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"alert alert-danger\" role=\"alert\">
                <p><strong>Awe Snap! </strong>Your message was not sent. Something went wrong with the PHP mail() function and is returning a value of FALSE. Chances are if you are seeing this message it means that it could not reach out to the SMTP server. Make sure that the webserver you are running is configured to also point to a mail server.</p>
            </div>
        </div>
    ";
}

// SUCESS AND ERROR MESSAGES


// If message error is true display error
if ($messageErrorSet == true) {
    echo "
    <div class=\"col-md-6 offset-md-3\">
        <div class=\"alert alert-danger\" role=\"alert\">
            <p><strong>Awe Snap! </strong>".$messageErrorText."</p>
        </div>
    </div>
    ";
}
// If attat error
if ($fileUploaded == 2){
    echo "
    <div class=\"col-md-6 offset-md-3\">
        <div class=\"alert alert-danger\" role=\"alert\">
            <p><strong>Awe Snap! </strong>" . $attatchError . "</p>
        </div>
    </div>
    ";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Zaqar | Review your email</title>
        <!-- Bootstrap CSS -->
        <!-- For a lighter app, uncomment CDN and remove local BS files -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="bootstrap-4.0.0/css/bootstrap.min.css">
        <!-- App Styles -->
        <link rel="stylesheet" href="zaqar.css">
        <!-- Favicon -->
        <link rel="icon" href="favicon.ico">


    </head>
    <body class="p-5" style="background-image: url('img/bg.png');">

        <!-- Github sticky -->
        <div class="github-sticky">
            <p>Zaqar v1.3 - Support this project on <a href="https://github.com/TobinShields/Zaqar_EmailSpoofer">Github</a></p>
        </div>

        <div class="col-md-6 offset-md-3">

            <!-- Open Card -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header">
                    <h3>Review Your Message</h3>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <!-- Table to show from, to, and subject line -->
                    <table class="table">
                        <tr>
                            <td>From: </td>
                            <!-- Use char code to render quotes and angle brackets -->
                            <td><?php echo "&#8220;" . $fromName . "&#8221;" . " &#60;" . $fromEmail . "&#62;" ?></td>
                        </tr>
                        <tr>
                            <td>To: </td>
                            <td><?php echo $toEmail ?></td>
                        </tr>
                        <?php
                            // Show cc if there is a value
                            if (!empty($cc)) {
                                echo '
                                    <tr>
                                        <td>Cc: </td>
                                        <td>'. $cc . '</td>
                                    </tr>
                                ';
                            }
                         ?>
                         <?php
                             // Show bcc if there is a value
                             if (!empty($bcc)) {
                                 echo '
                                     <tr>
                                         <td>Bcc: </td>
                                         <td>'. $bcc . '</td>
                                     </tr>
                                 ';
                             }
                          ?>
                          <?php
                              // Show linked file name if there is an Attachment
                              if ($fileUploaded) {
                                  echo '
                                  <tr>
                                      <td>Attachment: </td>
                                      <td><a href="' . $path . '" target="_blank">'. basename( $_FILES['attachment']['name']) . '</a> <br>  <p class="mt-2"><strong>NOTE: </strong>This file has been uploaded into the in the <mark>uploads/</mark> directory of this application. If this attachment contains sensitive or potentially malicious content, then it may be detected by your webservers security scans. Consider removing files once the message has been received by the target. </p></td>

                                  </tr>
                                  ';
                              }
                           ?>
                        <tr>
                            <td>Subject: </td>
                            <td><?php echo $subjectLine ?></td>
                        </tr>
                    </table>

                    <!-- Display message as a card -->
                    <h4 class="lead">Message Body</h4>
                    <div class="card p-2">
                        <?php
                            if (!$messageErrorSet) {
                                echo $message;
                            } else {
                                echo "<strong style=\"color:red;\">INVALID</strong>";
                            }
                         ?>
                    </div>

                </div> <!--end card body-->
            </div> <!--end card -->

            <a href="index.html" class="btn btn-primary btn-lg mt-3" style="display: block; margin:auto;">Send another spoofed email</a>
        </div> <!-- end col -->

    </body>
</html>
