<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['firstName'] + ['lastName'];
        $mailForm = $_POST['mail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "tobias.abrahamsson@medieinstitutet.se";
        $headers = "From: ".$mailFrom;
        $txt = "You have receved an e-mail form ".$name."./n/n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend")
    }