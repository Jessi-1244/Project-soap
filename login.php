<?php
ob_start(); // Start output buffering

// Your PHP code here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the password is correct
    $password = $_POST["password"];
    if ($password === 'jack123@#') {
        // Password is correct, redirect to index page
        header("Location: index.php");
        exit;
    } else {
        // Password is incorrect, display an error message or perform any other action
        echo "<script>alert('Unauthorized Persons Can not Login');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-top: 200px;
            background-image: url(bg_login.jpg);
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Prevent image from repeating */
        }
        .login-container {
            text-align: center;
            max-width: 300px;
            width: 100%;
            align-items: center;
            position: relative; /* Added position relative */
        }
        .login-container h2 {
            color: #333;
            margin-bottom: 20px;
            background-color: transparent; /* Set background to transparent */
            padding: 0; /* Remove padding */
            color: white; /* Change text color to white */
        }
        .login-container input[type="password"] {
            width: calc(70% - 40px); /* Adjusted width for the password input */
            padding: 15px; /* Increased padding for larger input box */
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 25px;
            font-size: 16px;
            outline: none;
            background-color: transparent; /* Set background to transparent */
            display: inline-block; /* Display as inline-block to allow other elements on the same line */
            position: relative; /* Added position relative */
        }
        .login-container input[type="submit"] {
            width: 20%; /* Adjusted width for the submit button */
            height: 50px; /* Fixed height for arrow button */
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 25px; /* Adjusted border-radius for a slightly rounded shape */
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 20px;
            display: inline-block; /* Display as inline-block */
            vertical-align: top; /* Align with the top of the password input */
        }
        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .login-container img {
            width: 50px;
            cursor: pointer;
            position: absolute; /* Position the eye icon */
            right: 10px; /* Adjust the position from the right */
            top: 100%; /* Center vertically */
            transform: translateY(-50%); /* Adjust vertical alignment */
        }
    </style>
</head>
<body>
    <center>
        <img src="logo.png" alt="logo" width="280px" height="280px">
        <div class="login-container">
            <h2>Mohamed Ali Jinna</h2>
            <form id="loginForm" action="#" method="POST"> <!-- Add method="POST" to the form -->
                <input type="password" id="password" name="password" placeholder="Enter Password" autocomplete="off">
                
                <input type="submit" value="→"> <!-- Arrow button for login -->
            </form>
        </div>
    </center>
    <script>
        let eyeClose = document.getElementById("eyeClose");
        let password = document.getElementById("password");
        let loginForm = document.getElementById("loginForm");

        // Hide the eye icon when typing in the password input
        password.addEventListener('input', function() {
            eyeClose.style.display = "none";
        });

        // Show the eye icon when the password input is focused
        password.addEventListener('focus', function() {
            eyeClose.style.display = "block";
        });

        // Toggle password visibility on eye icon click
        eyeClose.onclick = function() {
            if(password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        }
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            var passwordValue = password.value;
            if (passwordValue === 'jack123@#') {
                window.location.href = 'index.php'; // Redirect to welcome page on successful login
            } else {
                alert('Unauthorized Persons Can not Login');
            }
        });
    </script>
</body>
</html>
<?php
ob_end_flush(); // Flush output buffer and send output to browser
?>
