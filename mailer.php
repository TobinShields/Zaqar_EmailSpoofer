<?php

    // Grab values from from on previous page
    $fromName        =  $_POST["fromName"];
    $fromEmail       =  $_POST["fromEmail"];
    $toEmail         =  $_POST["toEmail"];
    $subjectLine     =  $_POST["subjectLine"];
    $richMessageText =  $_POST["richMessageText"];
    $rawMessageText  =  $_POST["rawMessageText"];

    // If value exists for ritch text but not raw
    if($richMessageText && !$rawMessageText) {
        $message = $richMessageText;
    }
    // If value exists for raw text but not ritch
    elseif (!$richMessageText && $rawMessageText) {
        $message = $rawMessageText;
    }
    // If either both raw and ritch have values OR if they are blank (because they technically have the same value if blank)
    else {
        $message = "INVALID";
    }

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Assign "From" header
    $headers .= "From: " . $fromName . " <" . $fromEmail . "> \r\n";


    if ($message == "INVALID") {
        echo "
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"alert alert-danger\" role=\"alert\">
                <strong>Awe Snap!</strong> You entered values for both ritch and raw messages OR you left the message blank. Message not sent, try again.
            </div>
        </div>
        ";
    } else {
        mail($toEmail, $subjectLine, $message, $headers);
        echo "
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"alert alert-success\" role=\"alert\">
                <strong>Email Sent!</strong> Your spoofed email has been sent using the values seen below. Keep in mind that if you used the rich text editor, the message may appear slightly different in the actual email. Thanks for using Zaqar_Mailer!
            </div>
        </div>
        ";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Email Sent!</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Favicon -->
        <link rel="icon" href="favicon.ico">

    </head>
    <body class="p-5" style="background-image: url('bg.png');">
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
                        <tr>
                            <td>Subject: </td>
                            <td><?php echo $subjectLine ?></td>
                        </tr>
                    </table>

                    <!-- Display message as a card -->
                    <h4 class="lead">Message Body</h4>
                    <div class="card p-2">
                        <?php echo $message ?>
                    </div>

                </div> <!--end card body-->
            </div> <!--end card -->

            <a href="index.html" class="btn btn-primary btn-lg mt-3" style="display: block; margin:auto;">Send another spoofed email</a>
        </div> <!-- end col -->

    </body>
</html>
