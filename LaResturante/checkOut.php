<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
                <script>
                  function doClick(){
                    let page = document.referrer[35];
                    const homePage = "";
                    if (page == "-"){
                      if (document.referrer[42] == "."){
                        let newHome = "index" + document.referrer[41] + ".php";
                        window.location.assign(newHome);
                      }else{
                        let newHome = "index" + document.referrer[41] + document.referrer[42] + ".php";
                        window.location.assign(newHome);
                      }
                    }else{
                      if (document.referrer[35] == "."){
                        let newHome = "index" + document.referrer[35] + ".php";
                        window.location.assign(newHome);
                      }else{
                        let newHome = "index" + document.referrer[35] + document.referrer[36] + ".php";
                        window.location.assign(newHome);
                      }
                    }
                  }
                  
                </script>
                <a
                  href="#"
                  onclick ="doClick()"
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
                <script>
                  function doClick2(){
                    let page = document.referrer[35];
                    const homePage = "order-queue1.php";
                    if (page == "-"){
                      if(document.referrer[42] == "."){
                        let newHome = "order-queue" + document.referrer[41] + ".php";
                        window.location.assign(newHome);
                      }else{
                        let newHome = "order-queue" + document.referrer[41] + document.referrer[42] + ".php";
                        window.location.assign(newHome);
                      }
                    }else{
                      if(document.referrer[36] == "."){
                        let newHome = "order-queue" + page + ".php";
                        window.location.assign(newHome);
                      }else{
                        let newHome = "order-queue" + document.referrer[35] + document.referrer[36] + ".php";
                        window.location.assign(newHome);
                      }
                    }
                  }
                  </script>
                <a
                  href="#"
                  onclick ="doClick2()"
                  class="order-queue-text02 navbar-link"
                >
                  View Order
                </a>
                <img
                  alt="iconsbxscart3271299"
                  src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPHBhdGggZD0nTTIxLjgyMiA3LjQzMUMyMS42MzUgNy4xNjEgMjEuMzI4IDcgMjEgN0g3LjMzM0w2LjE3OSA0LjIzQzUuODY3IDMuNDgyIDUuMTQzIDMgNC4zMzMgM0gyVjVINC4zMzNMOS4wNzcgMTYuMzg1QzkuMjMyIDE2Ljc1NyA5LjU5NiAxNyAxMCAxN0gxOEMxOC40MTcgMTcgMTguNzkgMTYuNzQxIDE4LjkzNyAxNi4zNTJMMjEuOTM3IDguMzUyQzIyLjA1MiA4LjA0NCAyMi4wMDkgNy43IDIxLjgyMiA3LjQzMVonIGZpbGw9JyMxNjE2MTYnLz4KPHBhdGggZD0nTTEwLjUgMjFDMTEuMzI4NCAyMSAxMiAyMC4zMjg0IDEyIDE5LjVDMTIgMTguNjcxNiAxMS4zMjg0IDE4IDEwLjUgMThDOS42NzE1NyAxOCA5IDE4LjY3MTYgOSAxOS41QzkgMjAuMzI4NCA5LjY3MTU3IDIxIDEwLjUgMjFaJyBmaWxsPScjMTYxNjE2Jy8+CjxwYXRoIGQ9J00xNy41IDIxQzE4LjMyODQgMjEgMTkgMjAuMzI4NCAxOSAxOS41QzE5IDE4LjY3MTYgMTguMzI4NCAxOCAxNy41IDE4QzE2LjY3MTYgMTggMTYgMTguNjcxNiAxNiAxOS41QzE2IDIwLjMyODQgMTYuNjcxNiAyMSAxNy41IDIxWicgZmlsbD0nIzE2MTYxNicvPgo8L3N2Zz4K"
                  class="order-queue-image"
                />
                <a href="login.php" class="order-queue-navlink">
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
                  ></path></svg><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="order-queue-icon06"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg><svg
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
          <div
            id="Beverages"
            class="order-queue-bev-spacer1 section-container"
          ></div>

    <div class="row">
    <div class="col-75">
        <div class="container">
        <form action = "javascript:doClick3()" method="post">

            <div class="row">
            <div class="col-50">
                <h3>Billing Address</h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" placeholder="john@example.com">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" id="city" name="city" placeholder="New York">

                <div class="row">
                <div class="col-50">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" placeholder="NY">
                </div>
                <div class="col-50">
                    <label for="zip">Zip</label>
                    <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
                </div>
            </div>

            <div class="col-50">
                <h3>Payment</h3>
                <label for="fname">Accepted Cards</label>
                <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>
                <label for="cname">Name on Card</label>
                <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                <label for="ccnum">Credit card number</label>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                <label for="expmonth">Exp Month</label>
                <input type="text" id="expmonth" name="expmonth" placeholder="September">

                <div class="row">
                <div class="col-50">
                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
                </div>
            </div>

            </div>
            <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
            </label>
            <script>
                  function doClick3(){
                    let page = document.referrer[35];
                    const homePage = "";
                    if (page == "-"){
                      if(document.referrer[42] == "."){
                        let newHome = "index" + document.referrer[41] + ".php";
                        if(!alert('Order has been placed!')){window.location.assign(newHome);}
                        //window.location.assign(newHome);
                      }else{
                        let newHome = "index" + document.referrer[41] + document.referrer[42] + ".php";
                        if(!alert('Order has been placed!')){window.location.assign(newHome);}
                        //window.location.assign(newHome);
                      }
                    }else{
                      if(document.referrer[36] == "."){
                        let newHome = "index" + page + ".php";
                        if(!alert('Order has been placed!')){window.location.assign(newHome);}
                        //window.location.assign(newHome);
                      }else{
                        let newHome = "index" + document.referrer[35] + document.referrer[36] + ".php";
                        if(!alert('Order has been placed!')){window.location.assign(newHome);}
                        //window.location.assign(newHome);
                      }
                    }
                  }
                </script>
                  <input type="submit" value="Check Out" class="btn" name="order"> 
                </a>
        </form>
        </div>
    </div>

    <div class="col-25">
        <div class="container">
        <h4>Cart
            <span class="price" style="color:black">
            <i class="fa fa-shopping-cart"></i>
            </span>
        </h4>
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
        $pagename = $_SERVER['HTTP_REFERER'];
        $number = $pagename[35];
        if (!is_numeric($number)){
          if(is_numeric($pagename[42])){
            $number = $pagename[41] . $pagename[42];
          }else{
          $number = $pagename[41];
          }
        }else{
          if(is_numeric($pagename[36])){
            $number = $pagename[35] . $pagename[36];
          }
        }
        $table = "table" . $number;
        $sql = "SELECT Name, Price, Request FROM $table";
        $result = $conn->query($sql);
        $total_price = 0;

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $total_price += $row['Price'];
            echo "<p>
                            <a href = '#'>" . $row["Name"] . "</a>
                            <span class ='price'>" ."$" . $row["Price"] . "</span>
                            <br> <span class = 'request' style = font-size:15px;><td>" . $row["Request"] . "</td></span>
                </p>";
        }
            echo "<hr><p> Total <span class = 'price' style = 'color:black'><b> $$total_price </b></span> </p>";
        } else {
        echo "0 items to order";
        }
        $conn->close(); 
?></p>
    </div>
    </div>

    <style>
        body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

        .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: black;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
    transform: scale(1.02);
    background: darkgreen;
}

span.price {
  float: right;
  color: grey;
}

span.request{
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
    </style>
</html>