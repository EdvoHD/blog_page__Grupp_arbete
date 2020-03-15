<head>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/tobiascss.css">
</head>
<div class="back-btn">
        <a href="../index.php"> <- Go back</a>
    </div>
<div class="contactContainer">
    <div class="contactInfoContainer"> 
        <div class="contactInfoTitle">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Address</h3>
        </div>
        <p id="contactInfoAddress">48 Manhattan Street<br> Avon, IN 46123</p>
        <div class="contactInfoTitle">
            <i class="fas fa-phone"></i>
            <h3>Lets Talk</h3>
        </div>
        <p>+1 800 1235678</p>
        <div class="contactInfoTitle">
            <i class="fas fa-envelope"></i>
            <h3>Genareal Support</h3>
        </div>
        <p>Millhouse@support.com</p>
    </div>
    <div class="contactFormContainer">
        <h2>Send Us A Message</h2>
        <form class="contactForm" action="contact.php" method="post">
            <div>
                <p>TELL US YOUR NAME*</p>
                <div class="contactName">
                    <input type="text" name="firstName" placeholder="First name">
                    <input id="contactLastName" type="text" name="lastName" placeholder="Last name">
                </div>
            </div>
            <div>
                <p>ENTER YOUR EMAIL*</p>
                <input type="text" name="mail" placeholder="Eg. example@email.com">
            </div>
            <div>
                <p>SUBJECT*</p>
                <input type="text" name="subject" placeholder="Subject">
            </div>
            <div>
                <p>MESSAGE*</p>
                <textarea placeholder="Text" name="message"></textarea>
            </div>
            <button class="cta-btn" type="submit" name="submit">SEND MESSAGE</button>
        </form>
    </div>
</div> 