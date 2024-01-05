<!DOCTYPE html>
<html lang="en">

<style>
    table, th, td {border: 1px solid black;}
    table {width: 100%;}
    th {width: 20%}
    td {width: 20%;}
    table {border-collapse: collapse;}
    table, th, td {text-align: center;}
    th, td {padding: 15px;}
    table:nth-child(even) {background-color: #f2f2f2;}
    th {background-color: teal; color: white;}
  </style>
  
<style> 
input[type=submit] {
  color: var(--dl-color-gray-white);
  font-style: normal;
  margin-top: var(--dl-space-space-twounits);
  text-align: center;
  transition: 0.3s;
  font-weight: 400;
  padding-top: var(--dl-space-space-unit);
  border-color: var(--dl-color-gray-black);
  border-width: 0px;
  margin-right: var(--dl-space-space-unit);
  padding-left: var(--dl-space-space-twounits);
  border-radius: var(--dl-radius-radius-radius4);
  margin-bottom: var(--dl-space-space-twounits);
  padding-right: var(--dl-space-space-twounits);
  padding-bottom: var(--dl-space-space-unit);
  background-color: var(--dl-color-gray-black);
}
input[type=submit]:hover {
  transform: scale(1.02);
  background: darkgreen;
}
</style>

  <head>
    <title>Order-Queue - Mobillio Online Store</title>
    <meta property="og:title" content="Order-Queue - Mobillio Online Store" />
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
      <link href="./order-queue.css" rel="stylesheet" />

      <div class="order-queue-container">
        <div class="order-queue-navbar">
          <header
            data-role="Header"
            class="order-queue-header max-width-container"
          >
            <div class="order-queue-navbar1">
              <div class="order-queue-middle">
                <div class="order-queue-left">
                  <span>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;
                  </span>
                </div>
                <a
                  href="index12.php"
                  id="home"
                  class="order-queue-logo-center navbar-logo-title"
                >
                  LA RESTURANTE
                </a>
                <div class="order-queue-right">
                  <span>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  </span>
                </div>
              </div>
              <div class="order-queue-icons">
                <a
                  href="order-queue12.php"
                  class="order-queue-text02 navbar-link"
                >
                  Place Order
                </a>
                <a href = "checkOut.php">
                <img
                  alt="iconsbxscart3271299"
                  src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPHBhdGggZD0nTTIxLjgyMiA3LjQzMUMyMS42MzUgNy4xNjEgMjEuMzI4IDcgMjEgN0g3LjMzM0w2LjE3OSA0LjIzQzUuODY3IDMuNDgyIDUuMTQzIDMgNC4zMzMgM0gyVjVINC4zMzNMOS4wNzcgMTYuMzg1QzkuMjMyIDE2Ljc1NyA5LjU5NiAxNyAxMCAxN0gxOEMxOC40MTcgMTcgMTguNzkgMTYuNzQxIDE4LjkzNyAxNi4zNTJMMjEuOTM3IDguMzUyQzIyLjA1MiA4LjA0NCAyMi4wMDkgNy43IDIxLjgyMiA3LjQzMVonIGZpbGw9JyMxNjE2MTYnLz4KPHBhdGggZD0nTTEwLjUgMjFDMTEuMzI4NCAyMSAxMiAyMC4zMjg0IDEyIDE5LjVDMTIgMTguNjcxNiAxMS4zMjg0IDE4IDEwLjUgMThDOS42NzE1NyAxOCA5IDE4LjY3MTYgOSAxOS41QzkgMjAuMzI4NCA5LjY3MTU3IDIxIDEwLjUgMjFaJyBmaWxsPScjMTYxNjE2Jy8+CjxwYXRoIGQ9J00xNy41IDIxQzE4LjMyODQgMjEgMTkgMjAuMzI4NCAxOSAxOS41QzE5IDE4LjY3MTYgMTguMzI4NCAxOCAxNy41IDE4QzE2LjY3MTYgMTggMTYgMTguNjcxNiAxNiAxOS41QzE2IDIwLjMyODQgMTYuNjcxNiAyMSAxNy41IDIxWicgZmlsbD0nIzE2MTYxNicvPgo8L3N2Zz4K"
                  class="order-queue-image"
                />
    </a>
                  <img
                    alt="AccountCircle3271301"
                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPHBhdGggZD0nTTEyIDJDNi40OCAyIDIgNi40OCAyIDEyQzIgMTcuNTIgNi40OCAyMiAxMiAyMkMxNy41MiAyMiAyMiAxNy41MiAyMiAxMkMyMiA2LjQ4IDE3LjUyIDIgMTIgMlpNMTIgNUMxMy42NiA1IDE1IDYuMzQgMTUgOEMxNSA5LjY2IDEzLjY2IDExIDEyIDExQzEwLjM0IDExIDkgOS42NiA5IDhDOSA2LjM0IDEwLjM0IDUgMTIgNVpNMTIgMTkuMkM5LjUgMTkuMiA3LjI5IDE3LjkyIDYgMTUuOThDNi4wMyAxMy45OSAxMCAxMi45IDEyIDEyLjlDMTMuOTkgMTIuOSAxNy45NyAxMy45OSAxOCAxNS45OEMxNi43MSAxNy45MiAxNC41IDE5LjIgMTIgMTkuMlonIGZpbGw9JyMxNjE2MTYnLz4KPC9zdmc+Cg=="
                    class="order-queue-image1"
                  />
                </a>
              </div>
            </div>
            <div data-role="BurgerMenu" class="order-queue-burger-menu">
              <svg viewBox="0 0 1024 1024" class="order-queue-icon">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <div data-role="MobileMenu" class="order-queue-mobile-menu">
              <div class="order-queue-nav">
                <div class="order-queue-container1">
                  <span class="order-queue-logo-center1">MOBILLIO</span>
                  <div
                    data-role="CloseMobileMenu"
                    class="order-queue-close-mobile-menu"
                  >
                    <svg viewBox="0 0 1024 1024" class="order-queue-icon02">
                      <path
                        d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <div class="order-queue-middle1">
                  <span class="order-queue-text03">SHOP</span>
                  <span class="order-queue-text04">LOOKBOOK</span>
                  <span class="order-queue-text05">SPECIAL</span>
                  <span class="order-queue-text06">ABOUT</span>
                  <span class="order-queue-text07">BLOG</span>
                  <span class="order-queue-text08">CONTACT</span>
                </div>
              </div>
              <div>
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="order-queue-icon04"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="order-queue-icon06"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="order-queue-icon08"
                >
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                </svg>
              </div>
            </div>
          </header>
        </div>
        <div class="order-queue-main">
          <div
            id="Beverages"
            class="order-queue-bev-spacer section-container"
          ></div>
          <div class="section-container column">
            <div class="order-queue-banner">
              <div class="order-queue-container2">
                <h3 class="order-queue-text09 Heading-3">ORDERS</h3>
              </div>
            </div>
          </div>
          <div
            id="Beverages"
            class="order-queue-bev-spacer1 section-container"
          ></div>



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
$sql = "SELECT Name, Price, Description, Request FROM Table12";
$result = $conn->query($sql);

?></p>

<form method="POST">
        <label>Select a Name to Remove</label>
        <select name="Name">
            <?php 
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $result,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $category["Name"];
                ?>">
                    <?php echo $category["Name"];
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>
        </select>
        <input type="submit" value="Submit" name="submit">
    </form>
    <br>

    <?php 
    $Name = $_POST['Name'];
    $sql2 = "DELETE FROM Table12 WHERE Name = ('$Name')";
    $result2 = $conn->query($sql2);
    ?>

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
$sql = "SELECT Name, Price, Description, Request FROM Table12";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr>
          <th>Name</th>
          <th>Price</th>
          <th>Description</th>
          <th>Request</th>
        </tr>";
  while ($row = $result->fetch_assoc()) {
    $previousRequest = isset($row["Request"]) && !empty($row["Request"]) ? $row["Request"] : "No Request";

      echo "<form method='post'>";
      echo "<tr>
              <td>" . $row["Name"] . "</td>
              <td>" . "$" . $row["Price"] . "</td>
              <td>" . $row["Description"] . "</td>
              <td>
                  <span>" . $previousRequest . "</span><br>
                  <input type='text' name='request' placeholder='Enter request'>
                  <input type='hidden' name='name' value='" . $row["Name"] . "'>
                  <input type='submit' value='Submit'>
              </td>
            </tr>";
      echo "</form>";
  }

  echo "</table>";
} else {
  echo "0 items to order";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $request = $_POST['request'];

    $sql = "UPDATE Table12 SET Request='$request' WHERE Name='$name'";

    if ($conn->query($sql) === TRUE) {
        echo '<meta http-equiv="refresh" content="0">';
    } else {
        echo "Error updating request: " . $conn->error;
    }
}
?>




<a href="checkOut.php">          
          <button class="order-queue-button button">Place Order</button></a>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
  </body>
  <p><?php
  $conn->close(); 
  ?></p>
</html>
