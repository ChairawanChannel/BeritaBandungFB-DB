<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "db_tamu"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    $sql = "INSERT INTO bukutamu (name, email, comment) VALUES ('$name', '$email', '$comment')";
    if ($conn->query($sql) === TRUE) {
      echo "<!DOCTYPE html>
      <html lang='en'>
      <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='refresh' content='3;url=index.php'>
        <title>Document</title>
        <style>
          * {
    padding: 0;
    margin: 0
}

.wrapper {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color:#eee;
}

.animated-check {
    height: 10em;
    width: 10em
}

.animated-check path {
    fill: none;
    stroke: #7ac142;
    stroke-width: 4;
    stroke-dasharray: 23;
    stroke-dashoffset: 23;
    animation: draw 1s linear forwards;
    stroke-linecap: round;
    stroke-linejoin: round
}

@keyframes draw {
    to {
        stroke-dashoffset: 0
    }
}
        </style>
      </head>
      <body>
        <div class='wrapper'> <svg class='animated-check' viewBox='0 0 24 24'>
          <path d='M4.1 12.7L9 17.6 20.3 6.3' fill='none' /> </svg>
        </div>
      </body>
      </html>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
