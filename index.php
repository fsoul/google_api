<html>
<head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<form action="handle.php" method="POST">
    <p><input type="text" placeholder="name"></p>
    <p><input type="text" placeholder="company"></p>
    <p><input type="text" placeholder="position"></p>
    <p><input type="email" placeholder="email"></p>
    <p><input type="tel" placeholder="phone"></p>

    <div class="g-recaptcha" data-sitekey="6LdxTikUAAAAAFm4XSMA6R-gJuzYqCP4U5nY2gGI"></div>
    <br/>
    <input type="submit" value="Submit">
</form>
</body>
</html>