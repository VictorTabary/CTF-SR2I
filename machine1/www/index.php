<?php
session_start();

if (isset($_GET['logout'])) {
  $_SESSION['logged'] = false;
  $_SESSION['username'] = null;
}

$failed_login = false;

if (isset($_GET["username"]) && isset($_GET["password"])) {
  $servername = "10.1.0.147:3306";
  $username = "root";
  $password = "zeajkeazelkEZJLEA";

  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
    die("SQL Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM data.users WHERE username = \"" . $_GET["username"] . "\" AND password=\"" . $_GET["password"] . "\"";
  //var_dump($sql);echo "<br/>";// debug

  $result = $conn->query($sql);
  //var_dump($result);echo "<br/>"; // debug

  if ($conn->error)
  {
    echo "Error : <br/>".$conn->error;
    echo "<br/><br/>";
    echo "Request : <br/>".$sql;
  }
    
  else {
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['logged'] = true;
      $_SESSION['username'] = $row['username'];
    } else {
      $failed_login = true;
      
    }
  }
  $conn->close();
}



if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
  ?>

  <html>

  <head>
    <title>Ping Service</title>
  </head>

  <body>
    <h1>Ping</h1>
    <h3>Bienvenue,
      <?php echo $_SESSION['username']; ?> !
    </h3>
    <p>Le second flag est: FLAG{5ec0nd_fl4g} !</p>
    <br />

    <?php
    if ($failed_login) {
      ?><b>Mauvais user/mot de passe.</b>
      <?php
    }
    ?>
    <form method="GET" action="">
      <input type="text" name="ip" placeholder="127.0.0.1">
      <input type="submit"><br/>
      <a href="?logout">Déconnexion</a><br/>
    </form>
    <pre>
      <?php
      if (isset($_GET["ip"]) && !empty($_GET["ip"])) {
        $response = shell_exec("ping -c 3 " . $_GET["ip"]);
        echo $response;
      }
      ?>
      </pre>
  </body>

  </html>

  <?php
} else {
  ?>

  <html>

  <head>
    <title>Login</title>
  </head>

  <body>
    <h1>Login</h1>
    <form method="GET" action="">
      <input type="text" name="username" placeholder="username"> <br />
      <input type="password" name="password"> <br />
      <input type="submit">
    </form>
    <p>Le premier flag est: FLAG{f1rst_fl4g} !</p>
  </body>

  </html>

  <?php
}
?>