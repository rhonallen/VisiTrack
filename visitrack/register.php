<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="register.css">
    <title>Logbook System</title>
</head>
<body>
<div class="container" id="container">
    <div class="form-container name-form">
    <form>

        <h1>Welcome to NTC!</h1>
        
        <div class="social-icons">
            <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-linkedin"></i></a>
        </div>

        <input type="text" name="Lastname" id="Lastname" placeholder="Lastname" required>
        <input type="text" name="Firstname" id="Firstname" placeholder="Firstname" required>
        <input type="text" name="Middle_Initial" id="Middle_Initial" placeholder="Middle Initial" required>
        <input type="text" name="Suffix" id="Suffix" placeholder="Suffix">
        <input type="email" name="Email" id="Email" placeholder="Email" required>
            
    </form>
    </div>
    <div class="form-container contact-address-form">
        <form>
    
            <h1>Welcome to NTC!</h1>
            
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin"></i></a>
            </div>
    
            <label for="purposes-input"></label>
            <input list="purposes" id="purposes-input" name="purposes" placeholder="Purposes" required>
                <datalist id="purposes">
                    <option id="Registrar" value="Registrar">
                    <option id="SOAST" value="SOAST">
                    <option id="Libcom" value="Libcom">
                    <option id="Bookstore" value="Bookstore">
                    <option id="OSA" value="OSA"></option>
                </datalist>
            <input type="number" name="ZIP_Code" id="ZIP_Code" placeholder="ZIP Code" required>
            <input type="text" name="Municipality" id="Municipality" placeholder="Municipality" required>
            <input type="text" name="Barangay/Village" id="Barangay/Village" placeholder="Barangay/Village" required>
            <label for="type-input"></label>
            <input list="type" id="type-input" name="type" placeholder="Visitor Type" required>
                <datalist id="type">
                    <option id="Regular" value="Regular">
                    <option id="VIP" value="VIP">
                </datalist>
            <button type="button" onclick="window.location.href='index.php'">Submit</button>    
        </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <img src="Logo.png" class="logo">
                <div class="toggle-panel toggle-left">
                    <h1>Enter required informations!</h1>
                    <p>Want to re-enter your name?</p>
                    <button class="hidden" id="namehid">Go Back!</button>
                </div>
                <img src="Logo.png" class="logo2">
                <div class="toggle-panel toggle-right">
                    <p>Fill up the required personal details to continue in our university</p>
                    <button class="hidden" id="conhid">Continue!</button>
                </div>
            </div>
        </div>
</div>
<script src="register.js"></script>
</body>
</html>