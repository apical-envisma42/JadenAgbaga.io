<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" action="#">
                            <fieldset>
                                <div class="field">
                                    <input type="text" name="name" placeholder="Your name" />
                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <input type="number" name="phone_no" placeholder="Phone number" pattern="{0-9}[3]{0-9}[3]{0-9}[4]" />
                                </div>
                                <div class="field">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <div class="field center">
                                    <button>SEND</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
   

    $errorMSG = "";
    
    // NAME
    if (empty($_POST["name"])) {
        $errorMSG = "Name is required ";
    } else {
        $name = $_POST["name"];
    }
    
    // EMAIL
    if (empty($_POST["email"])) {
        $errorMSG .= "Email is required ";
    } else {
        $email = $_POST["email"];
    }
    
    // MSG Guest
    if (empty($_POST["guest"])) {
        $errorMSG .= "Subject is required ";
    } else {
        $guest = $_POST["guest"];
    }
    
    
    // MSG Event
    if (empty($_POST["event"])) {
        $errorMSG .= "Subject is required ";
    } else {
        $event = $_POST["event"];
    }
    
    
    // MESSAGE
    if (empty($_POST["message"])) {
        $errorMSG .= "Message is required ";
    } else {
        $message = $_POST["message"];
    }
    
    
    $EmailTo = "agbagajaden84@gmail.com";
    $Subject = "New Message Received";
    
    // prepare email body text
    $Body = "";
    $Body .= "Name: ";
    $Body .= "name";
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= "email";
    $Body .= "\n";
    $Body .= "guest: ";
    $Body .= "guest";
    $Body .= "\n";
    $Body .= "event: ";
    $Body .= "event";
    $Body .= "\n";
    $Body .= "Message: ";
    $Body .= "message";
    $Body .= "\n";
    
    // send email
    $success = mail($EmailTo, $Subject, $Body, "From:".$email);
    
    // redirect to success page
    if ($success && $errorMSG == ""){
       echo "success";
    }else{
        if($errorMSG == ""){
            echo "Something went wrong :(";
        } else {
            echo $errorMSG;
        }
    }
    
    ?>
    
    
    
    
    
    
    
    
    
  
</body>
</html>