<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/3c770b8c2a.js" crossorigin="anonymous"></script>
    <title>Ali Recycling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-size: cover;
            background-repeat: none;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            overflow-x: hidden; /* Hide horizontal overflow */
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        .logo {
            font-weight: bold;
            font-size: 36px;
            text-align: center;
            flex-grow: 1; /* Center the logo by expanding the available space */
        }
        .phone {
            margin-left: 0px;
            color: red;
        }
        .datetime {
            font-size: 18px;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-right: 20px;
            box-shadow: inset;
        }
        .navbar button {
            margin-left: 10px;
            padding: 12px 20px; /* Increased padding for larger button size */
            background-color: black;
            color: white;
            border: none;
            border-radius: 45px;
            cursor: pointer;
            font-size: 16px; /* Increased font size */
            transition: background-color 0.3s ease, transform 0.3s ease; /* Transition effect on background-color and transform properties */
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3); /* Add box shadow for transition effect */
        }
        .navbar button:hover {
            background-color: rgb(15, 171, 243); /* Darker shade of green on hover */
            transform: scale(1.1); /* Zoom in effect on hover */
        }
        .button {
            margin-top: 20px;
            display: flex;
            flex-direction: column; /* Align buttons from top to bottom */
            align-items: center; /* Center buttons horizontally */
            width: 300px; /* Set the width of the button container */
            padding: 20px; /* Add padding */
            border-radius: 15px; /* Add border-radius */
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3); /* Add box shadow */
        }
        .button div {
            margin-top: 20px; /* Add space between buttons */
        }
        .button button {
            width: 100%;
            min-width: 150px;
            height: 65px;
            padding:0 20px; /* Adjust button padding */
            background-color: black;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 16px; /* Increased font size */
            transition: background-color 0.3s ease, transform 0.3s ease; /* Transition effect on background-color and transform properties */
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3); /* Add box shadow for transition effect */
        }
        .button button:hover {
            background-color: rgb(15, 171, 243); /* Darker shade of green on hover */
            transform: scale(1.1); /* Zoom in effect on hover */
        }
        .button img {
            width: 50px; /* Set icon size */
            margin-bottom: 20px; /* Add space between icon and text */
        }
        .bottom{
            position: fixed; /* Position the element relative to the viewport */
            bottom: 0; /* Align to the bottom of the viewport */
            left: 0; /* Align to the left of the viewport */
            width: 100%; /* Full width */
            background-color: #f2f2f2; /* Background color */
            padding: 10px 20px; /* Add padding */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .bottom p {
            margin: 2px; /* Remove default margin */
        }
        .email{
            margin-left: 20px; /* Add margin to separate from the left edge */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="phone"> <i class="fa-solid fa-phone fa-beat" style="color: #74C0FC;"></i>Ph no: +91 12123233434</div>
        <div class="logo"> <i class="fa-solid fa-recycle fa-xl" style="color: #74C0FC;"></i> ALI RECYCLING</div>
        <div class="datetime" id="currentDateTime"><i class="fa-solid fa-calendar-days fa-flip" style="color: #74C0FC;"></i></div>
    </div>
    <hr>
    <div class="navbar">
        <div class="home"><button><i class="fa-solid fa-house fa-flip" style="color: #74C0FC;"></i> Home</button></div>
        <div class="statement"><button><i class="fa-solid fa-clipboard fa-flip" style="color: #74C0FC;"></i> Statement</button></div>
        <div class="logout"><button><i class="fa-solid fa-power-off fa-flip" style="color: #74C0FC;"></i>  Log-Out</button></div>
    </div>
    <center>
        <div class="button">
            <div class="purchaseBtn">
                <a href="purshasepage.php"><button><i class="fa-solid fa-cart-shopping fa-flip" style="color: #74C0FC;"></i><br>Purchase</button></a>
            </div>
            <div class="SalesBtn">
                <a href="salespage.php>"><button><i class="fa-solid fa-store fa-flip" style="color: #74C0FC;"></i><br>Sales</button></a>
            </div>
            <div class="ExpenseBtn">
                <a href="expensepage.php"><button><i class="fa-solid fa-hand-holding-dollar fa-flip" style="color: #74C0FC;"></i><br>Expense</button></a>
            </div>
        </div>
    </center>
    <hr>
    <div class="bottom">
        <p><i class="fa-solid fa-location-dot fa-beat fa-sm" style="color: #74C0FC;"></i>Simpang 801 Burnei</p>
        <p><i class="fa-solid fa-phone fa-beat" style="color: #74C0FC;"></i>+67389712456</p>
        <div class="email"><p> <i class="fa-solid fa-envelope fa-fade" style="color: #74C0FC;"></i>Email id:someone@gmail.com</p></div>
    </div>

    <script>
        document.getElementById('currentDateTime').innerHTML = getCurrentDateTime();
        function getCurrentDateTime() {
            var today = new Date();
            var day = String(today.getDate()).padStart(2, '0');
            var month = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
            var year = today.getFullYear();
            var hours = String(today.getHours()).padStart(2, '0');
            var minutes = String(today.getMinutes()).padStart(2, '0');
            var seconds = String(today.getSeconds()).padStart(2, '0');
            return day + '-' + month + '-' + year + ' ' + hours + ':' + minutes + ':' + seconds;
        }
    </script>
</body>
</html>
