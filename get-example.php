<html> 
<head> 
  <meta charset="utf-8">
</head>
<body>    
  <?php
   $name = $_get["name"];

    $servername = "localhost";
    $username = "root" ;
    $password = "" ;
    $db = "directions";

    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO getexample (name) 
    VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
     echo " ";
    } 
    else {
     echo "Error" . $conn->error;
    }

    print("<h2> wellcome $name</h2>");

    $conn->close();
  ?> 
</body>
</html> 