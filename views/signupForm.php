<head>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,700i&display=swap" rel="stylesheet">
</head>
<div id="signupForm">
    <div class="signup-header">
        <h1>signup form</h1>
        <p>
            har du ett konto? 
            <a href="index.php?page=login">Logga in här!</a>
        </p>
    </div>
    <form action="handlers/signup.php" method="POST">
        <div class="form-container">
            <input type="text" name="username" placeholder="Choose a username..." required />
            <input type="email" name="email" placeholder="write your email" required>
            <input type="password" name="password" placeholder="Create a password..." required/>
            
            <div class="button-container">
                <input class="cta-btn" type="submit" value="SUBMIT">
            </div>
        </div>

    </form>
</div>
