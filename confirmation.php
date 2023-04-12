<?php include_once 'header.php';
// define variables and set to empty values

$nameErr = $emailErr = $phoneErr = $messageErr = "";
$name = $email = $phone = $message = "";

// function to sanitize user input
function test_input( $data ) {
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}

// validate the fields
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    if ( empty( $_POST["name"] ) ) {
        $nameErr = "Name is required.";
    } else {
        $name = test_input( $_POST["name"] );
        // check if name only contains letters and whitespace
        if ( !preg_match( "/^[a-zA-Z ]*$/", $name ) ) {
            $nameErr = "Only letters and white space allowed.";
        }
    }

    if ( empty( $_POST["email"] ) ) {
        $emailErr = "Email is required.";
    } else {
        $email = test_input( $_POST["email"] );
        // check if email address is well-formed
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $emailErr = "Invalid email format.";
        }
    }

    if ( empty( $_POST["phone"] ) ) {
        $phoneErr = "Phone number is required.";
    } else {
        $phone = test_input( $_POST["phone"] );
        // check if phone number is valid
        if ( !preg_match( "/^[0-9]{11}$/", $phone ) ) {
            $phoneErr = "Invalid phone number.";
        }
    }

    if ( empty( $_POST["message"] ) ) {
        $messageErr = "Message is required.";
    } else {
        $message = test_input( $_POST["message"] );
    }
}
  if ($nameErr == "" && $emailErr == "" && $phoneErr == "" && $messageErr == "") {  
    ?>
    <div class="container" style="margin-top:150px;">
        <div class="alert alert-success py-4 py-xl-5" role="alert">
            <span>Thank you for contacting us, <strong> <?php echo $name ;?></strong>. We will get back to you as soon as possible!</span>
        </div>
    </div>
    <?php
  }
  elseif($nameErr || $emailErr || $phoneErr || $messageErr){
    ?>
    <div class="container" style="margin-top:150px;">
        <div class="alert alert-danger py-4 py-xl-5" role="alert">
            <span>There was an error sending your message.<strong> <?php echo " $nameErr $emailErr $phoneErr $messageErr "; ?></strong> Please try again later.</span>
        </div>
    </div>
    <?php
  }
    exit;

?>