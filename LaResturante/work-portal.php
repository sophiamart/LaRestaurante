<!DOCTYPE html>
<html lang="en">

<style>
   .custom-button {
       background-color: black;
       color: white;
       padding: 10px 20px;
       border: none;
       border-radius: 5px;
       cursor: pointer;
       font-size: 16px;
   }

   .custom-button:hover {
       background-color: #333;
   }
</style>

<style>
    table, th, td {border: 1px solid black;}
    table {width: 100%;}
    th {width: 20%}
    td {width: 20%;}
    table {border-collapse: collapse;}
    table, th, td {text-align: center;}
    th, td {padding: 15px;}
    table:nth-child(even) {background-color: #f2f2f2;}
    th {background-color: black; color: white;}
  </style>

<p><?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password

$dbname = "La_Resturante_Database"; // database name

// Create connection
// MySQLi is Object-Oriented method
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}
$sql = "SELECT Price FROM Food_Menu WHERE Name='Tiramisu'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<span style="font-size: 20px;"> $' . $row["Price"];
  }
} else {
  echo "0 results";
}
 
?></p>

  <head>
    <title>Work-Portal - La Restaurante</title>
    <meta property="og:title" content="Work-Portal - La Restaurante" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Jost;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: 0.02;
        line-height: 1.55;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
  </head>
  <body>
    <link rel="stylesheet" href="./style.css" />
    <div>
      <link href="./work-portal.css" rel="stylesheet" />

      <div class="work-portal-container">
        <div class="work-portal-navbar">
          <header
            data-role="Header"
            class="work-portal-header max-width-container"
          >
            <div class="work-portal-left">
              <a href="#Table" class="work-portal-text navbar-link">Tables</a>
              <a href="#Food" class="work-portal-text01 navbar-link">
                Food Orders
              </a>
              <a href="#Drink" class="work-portal-text02 navbar-link">
                Drink Orders
              </a>
            </div>
            <div class="work-portal-navbar1">
              <div class="work-portal-middle">
                <div class="work-portal-left1"></div>
                <a
                  href="index1.php"
                  id="home"
                  class="work-portal-logo-center navbar-logo-title"
                >
                  LA RESTURANTE
                </a>
                <div class="work-portal-right">
                  <span>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  </span>
                </div>
              </div>
              <div class="work-portal-icons">
                <a href="login.php" class="work-portal-navlink">
                  <img
                    alt="AccountCircle3271301"
                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPHBhdGggZD0nTTEyIDJDNi40OCAyIDIgNi40OCAyIDEyQzIgMTcuNTIgNi40OCAyMiAxMiAyMkMxNy41MiAyMiAyMiAxNy41MiAyMiAxMkMyMiA2LjQ4IDE3LjUyIDIgMTIgMlpNMTIgNUMxMy42NiA1IDE1IDYuMzQgMTUgOEMxNSA5LjY2IDEzLjY2IDExIDEyIDExQzEwLjM0IDExIDkgOS42NiA5IDhDOSA2LjM0IDEwLjM0IDUgMTIgNVpNMTIgMTkuMkM5LjUgMTkuMiA3LjI5IDE3LjkyIDYgMTUuOThDNi4wMyAxMy45OSAxMCAxMi45IDEyIDEyLjlDMTMuOTkgMTIuOSAxNy45NyAxMy45OSAxOCAxNS45OEMxNi43MSAxNy45MiAxNC41IDE5LjIgMTIgMTkuMlonIGZpbGw9JyMxNjE2MTYnLz4KPC9zdmc+Cg=="
                    class="work-portal-image"
                  />
                </a>
              </div>
            </div>
            <div data-role="BurgerMenu" class="work-portal-burger-menu">
              <svg viewBox="0 0 1024 1024" class="work-portal-icon">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <div data-role="MobileMenu" class="work-portal-mobile-menu">
              <div class="work-portal-nav">
                <div class="work-portal-container01">
                  <span class="work-portal-logo-center1">MOBILLIO</span>
                  <div
                    data-role="CloseMobileMenu"
                    class="work-portal-close-mobile-menu"
                  >
                    <svg viewBox="0 0 1024 1024" class="work-portal-icon02">
                      <path
                        d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <div class="work-portal-middle1">
                  <span class="work-portal-text04">SHOP</span>
                  <span class="work-portal-text05">LOOKBOOK</span>
                  <span class="work-portal-text06">SPECIAL</span>
                  <span class="work-portal-text07">ABOUT</span>
                  <span class="work-portal-text08">BLOG</span>
                  <span class="work-portal-text09">CONTACT</span>
                </div>
              </div>
              <div>
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="work-portal-icon04"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="work-portal-icon06"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="work-portal-icon08"
                >
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                </svg>
              </div>
            </div>
          </header>
        </div>

        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['login'])) {
 $username = $_POST['username'];
 $password = $_POST['password'];

 // Check if entered username and password match the hardcoded values
 if ($username === "waiter" && $password === "waiter123") {
   // Successful login
   echo "<p>Login successful!</p>";
 } else {
   // Display error message
   echo "<p>Wrong input, please try again.</p>";
   echo '<a href="login.php">Back to login</a>';
   exit();
 }
}
}
?>

        <div class="work-portal-main">
          <div
            id="Table"
            class="work-portal-bev-spacer section-container"
          ></div>
          <div class="section-container column">
            <div class="work-portal-banner">
              <div class="work-portal-container02">
                <h3 class="work-portal-text10 Heading-3">TABLES</h3>
              </div>
            </div>
          </div>
          <div class="work-portal-bev-spacer1 section-container"></div>
          <div class="work-portal-features">
            <h1 class="work-portal-text11">Tables</h1>
            <div class="work-portal-container03">





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "La_Resturante_Database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tableNum = $_POST['table_number'];

    if (isset($_POST['party_size'])) {
        $partySize = $_POST['party_size'];

        $sql2 = "UPDATE Tables SET PartySize='$partySize' WHERE TableNum='$tableNum'";
        if ($conn->query($sql2) === TRUE) {
            echo '<meta http-equiv="refresh" content="0">';
        } else {
            echo "Error updating party size: " . $conn->error;
        }
    }

    if (isset($_POST['yes'])) {
        $sql = "UPDATE Tables SET Occupied = 1 WHERE TableNum = '$tableNum'";
        if ($conn->query($sql) === TRUE) {
            echo '<meta http-equiv="refresh" content="0">';
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } elseif (isset($_POST['no'])) {
        $sql = "UPDATE Tables SET Occupied = 0 WHERE TableNum = '$tableNum'";
        if ($conn->query($sql) === TRUE) {
            echo '<meta http-equiv="refresh" content="0">';
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}
?>





<?php
for ($tableNum = 1; $tableNum <= 16; $tableNum++) {
    echo '<div class="tables-feature-card tables-root-class-name' . $tableNum . '">';
    echo '<h2 class="tables-text"><span>Table ' . $tableNum . '</span></h2>';

    // Retrieve data for each table from the database
    $sql = "SELECT TableNum, TableSize, PartySize, Occupied FROM Tables WHERE TableNum='$tableNum'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fontSize = 'font-size: 16px;';
            $buttonSize = 'font-size: 14px; padding: 5px 10px;';

            echo '<p><span style="font-size: 20px;">Table ' . $row["TableNum"] . '</span></p>';
            echo '<p><span style="font-size: 16px;">Table Size - ' . $row["TableSize"] . '</span><br>';
            echo '<span style="font-size: 16px;">Party Size - ' . $row["PartySize"] . '</span><br>';
            echo '<span style="font-size: 16px;">Occupied - ';
            if ($row["Occupied"] == 1) {
                echo 'Yes';
            } else {
                echo 'No';
            }
            echo '</span></p>';
            echo "<br>";

            // Form for updating party size and occupied status
            echo '<form action="work-portal.php" method="post">';
            echo '<input type="hidden" name="table_number" value="' . $row["TableNum"] . '">'; 
            echo '<p><span style="' . $fontSize . '">Edit Party Size</span></p>';
            echo '<p>';
            echo '<select name="party_size" onchange="this.form.submit()" style="font-size: 14px;">';
            for ($i = 0; $i <= $row["TableSize"]; $i++) {
                $selected = ($i == $row["PartySize"]) ? "selected" : "";
                echo "<option value='$i' $selected>$i</option>";
            }
            echo '</select>';
            echo '</p>';
            echo '<br>';
            echo '<p><span style="' . $fontSize . '">Edit Occupied</span></p>';
            echo '<p>';
            echo '<input type="submit" class="custom-button" name="yes" value="Yes" style="' . $buttonSize . '">';
            echo '<input type="submit" class="custom-button" name="no" value="No" style="' . $buttonSize . '">';
            echo '</p>';
            echo '</form>';
        }
    } else {
        echo "Table information not available.";
    }

    echo '</div>';
}
?>





              
            </div>
          </div>
          <div
            id="Food"
            class="work-portal-bev-spacer2 section-container"
          ></div>




          <div class="work-portal-banner1">
            <div class="work-portal-container04">
              <h3 class="work-portal-text12 Heading-3">FOOD ORDERS</h3>
            </div>
          </div>


<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 1</h2>
<br>

<p><?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password

$dbname = "La_Resturante_Database"; // database name

// Create connection
// MySQLi is Object-Oriented method
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}
$sql = "SELECT Name, Price, Description, Request FROM Table1";
$result = $conn->query($sql);

?></p>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table1 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table1'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>


<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 2</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table2 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table2'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>



<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 3</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table3 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table3'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>


<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 4</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table4 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table4'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 5</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table5 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table5'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 6</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table6 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table6'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 7</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table7 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table7'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 8</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table8 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table8'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 9</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table9 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table9'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 10</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table10 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table10'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 11</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table11 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table11'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 12</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table12 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table12'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 13</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table13 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table13'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 14</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table14 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table14'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 15</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table15 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table15'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 16</h2>
<br>

<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table16 WHERE Type = 'Food'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table16'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>




          <div
            id="Drink"
            class="work-portal-bev-spacer3 section-container"
          ></div>
          <div class="work-portal-banner2">
            <div class="work-portal-container08">
              <h3 class="work-portal-text13 Heading-3">DRINK ORDERS</h3>
            </div>
          </div>


<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 1</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table1 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table1'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>



<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 2</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table2 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table2'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 3</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table3 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table3'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 4</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table4 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table4'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 5</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table5 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table5'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 6</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table6 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table6'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 7</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table7 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table7'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 8</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table8 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table8'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 9</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table9 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table9'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 10</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table10 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table10'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 11</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table11 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table11'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 12</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table12 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table12'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 13</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table13 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table13'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 14</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table14 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table14'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>

<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 15</h2>
<br>


<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table15 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table15'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>


<br>
<br>
<br>
<h2 style="font-weight: bold;">Table 16</h2>
<br>


<div
<p>
<div
<p>
<div
<p>
<?php
$servername = "localhost";
$username = "root"; // Mysql username
$password = ""; // Mysql Password
$dbname = "La_Resturante_Database"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error ."</p>");
}

$sql = "SELECT Name, Price, Description, Request, Finished FROM Table16 WHERE Type = 'Beverage'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Request</th>
                <th>Finished</th>
                <th>Edit Status</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>$" . $row["Price"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Request"] . "</td>
                <td style='color: " . ($row["Finished"] == 1 ? "green" : "red") . "'>";

        // Check if Finished is 1 or 0 and display Yes or No accordingly
        echo $row["Finished"] == 1 ? "Yes" : "No";

        echo "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='table' value='Table16'>
                        <input type='hidden' name='name' value='" . $row["Name"] . "'>
                        <input type='submit' name='finished' value='Finished' class='custom-button'>
                        <input type='submit' name='not_finished' value='Not Finished' class='custom-button'>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No Order Placed";
}

?>
</div>






<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['finished']) || isset($_POST['not_finished'])) {
        $table = $_POST['table']; 

        if ($table === 'Table1') {
            // Handle Table1 update
            $name = $_POST['name'];
            $sql = "UPDATE Table1 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table2') {
            // Handle Table2 update
            $name = $_POST['name'];
            $sql = "UPDATE Table2 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table3') {
            // Handle Table3 update
            $name = $_POST['name'];
            $sql = "UPDATE Table3 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table4') {
            // Handle Table4 update
            $name = $_POST['name'];
            $sql = "UPDATE Table4 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table5') {
            // Handle Table5 update
            $name = $_POST['name'];
            $sql = "UPDATE Table5 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table6') {
            // Handle Table6 update
            $name = $_POST['name'];
            $sql = "UPDATE Table6 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table7') {
            // Handle Table7 update
            $name = $_POST['name'];
            $sql = "UPDATE Table7 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table8') {
            // Handle Table8 update
            $name = $_POST['name'];
            $sql = "UPDATE Table8 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table9') {
            // Handle Table9 update
            $name = $_POST['name'];
            $sql = "UPDATE Table9 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table10') {
            // Handle Table10 update
            $name = $_POST['name'];
            $sql = "UPDATE Table10 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
             echo '<meta http-equiv="refresh" content="0">';
            } else {
             echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table11') {
            // Handle Table11 update
            $name = $_POST['name'];
            $sql = "UPDATE Table11 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
             echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table12') {
            // Handle Table12 update
            $name = $_POST['name'];
            $sql = "UPDATE Table12 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table13') {
            // Handle Table13 update
            $name = $_POST['name'];
            $sql = "UPDATE Table13 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table14') {
            // Handle Table14 update
            $name = $_POST['name'];
            $sql = "UPDATE Table14 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
             echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table15') {
            // Handle Table15 update
            $name = $_POST['name'];
            $sql = "UPDATE Table15 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
             echo "Error updating record: " . $conn->error;
            }
        } elseif ($table === 'Table16') {
            // Handle Table16 update
            $name = $_POST['name'];
            $sql = "UPDATE Table16 SET Finished = " . (isset($_POST['finished']) ? 1 : 0) . " WHERE Name = '$name'";
            if ($conn->query($sql) === TRUE) {
              echo '<meta http-equiv="refresh" content="0">';
            } else {
              echo "Error updating record: " . $conn->error;
            }
      }
    }
}
?>


    <script src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
  </body>
  <p><?php
  $conn->close(); 
  ?></p>
</html>
