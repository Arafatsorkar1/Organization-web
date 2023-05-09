<?php

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

$mail = new PHPMailer();


//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'just55.justhost.com';                  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'themeforest@ismail-hossain.me';    // SMTP username
$mail->Password = 'AsDf12**';                         // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$status = "false";

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if( $_POST['reservation_name'] != '' AND $_POST['reservation_email'] != '' AND $_POST['reservation_phone'] != '' AND $_POST['car_service_select'] != '') {

        $name = $_POST['reservation_name'];
        $email = $_POST['reservation_email'];
        $phone = $_POST['reservation_phone'];
        $address = $_POST['reservation_address'];

        $car_name = $_POST['car_name_select'];
        $car_type = $_POST['car_type_select'];
        $car_year = $_POST['car_year_select'];
        $car_number_of_wheels = $_POST['number_of_wheels'];
        $car_extra_services = $_POST['extra_services'];
        $car_model = $_POST['car_model'];
        $car_service = $_POST['car_service_select'];

        $subject = isset($subject) ? $subject : 'New Message | reservation Form';
        $reservation_date = isset($_POST['reservation_date']) ? $_POST['reservation_date'] : '';
        $message = $_POST['form_message'];

        $botcheck = $_POST['form_botcheck'];

        $toemail = 'spam.thememascot@gmail.com'; // Your Email Address
        $toname = 'ThemeMascot';                // Receiver Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "Name: $name<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $phone = isset($phone) ? "Phone: $phone<br><br>" : '';
            $address = isset($address) ? "Address: $address<br><br>" : '';

            $car_name = isset($car_name) ? "Car Name: $car_name<br><br>" : '';
            $car_type = isset($car_type) ? "Car Type: $car_type<br><br>" : '';
            $car_year = isset($car_year) ? "Car Year: $car_year<br><br>" : '';
            $car_number_of_wheels = isset($car_number_of_wheels) ? "Number Of Wheels: $car_number_of_wheels<br><br>" : '';

            $car_extra_services = implode(", ", $car_extra_services);
            $car_extra_services = isset($car_extra_services) ? "Extra Services: $car_extra_services<br><br>" : '';
            
            $car_model = isset($car_model) ? "Car Model: $car_model<br><br>" : '';
            $car_service = isset($car_service) ? "Car Service: $car_service<br><br>" : '';
            $reservation_date = isset($reservation_date) ? "Reservation: $reservation_date<br><br>" : '';
            $message = isset($message) ? "Message: $message<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $email $phone $address $car_name $car_type $car_year $car_number_of_wheels $car_extra_services $car_model $car_service $reservation_date $message $referrer";

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

            if( $sendEmail == true ):
                $message = 'We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.';
                $status = "true";
            else:
                $message = 'Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '';
                $status = "false";
            endif;
        } else {
            $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
            $status = "false";
        }
    } else {
        $message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
        $status = "false";
    }
} else {
    $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
    $status = "false";
}

$status_array = array( 'message' => $message, 'status' => $status);
echo json_encode($status_array);
?>