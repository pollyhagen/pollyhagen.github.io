<?php
$field_email = $_POST["cf_email"];
$mail_to = "pollyhagen@gmail.com";
$subject = "Newsletter" . $field_name;
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= "Sign me up for the newsletter";
$headers = "From: $cf_email\r\n";
$headers .= "Reply-To: $cf_email\r\n";
$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Thank you for the message. We will contact you shortly.');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'contact_page.html';
    </script>
<?php
}

else { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Message failed. Please, send an email to gordon@template-help.com');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'contact_page.html';
    </script>
<?php
}?>