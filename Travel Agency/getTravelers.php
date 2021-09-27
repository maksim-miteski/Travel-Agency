<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/getTravelers.css">
    <title>List of travelers</title>

  </head>

  <header>
    <img id="headLogo" src="images/header.png">
  </header>

  <section>
    <nav>
      <p>User: <?php echo $_SESSION['username']; ?></p>
      <p><a href="logout.php">Logout</a></p>
      <ul>
      <li><a href="Home.html">Home</a></li><br>
      <li><a href="destination.html">Find a destination</a></li><br>
      <li><a href="book.php">Book your trip</a></li><br>
      <li><a href="aboutus.html">About Us</a></li><br>
      <li><a href="#getTravelers.php">List of Travelers</a></li>
     <br><br><br><br>
      <div style="text-align:center;padding:1em 0;"> <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/785842"><span style="color:gray;">Current local time in</span><br />Skopje, North Macedonia</a></h3> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Europe%2FSkopje" width="100%" height="115" frameborder="0" seamless></iframe> </div>

        </ul>
    </nav>

    <article>

  <body>
<h2>Travelers Personal Information</h2>
  <?php
 include_once 'include/dbh.php';

 $sql="SELECT * FROM bookInfo;";
 $result=mysqli_query($conn, $sql);
 $resultCheck=mysqli_num_rows($result);


 if($resultCheck > 0){
   while($row=mysqli_fetch_assoc($result)){
echo "<table>
  <tr>
  <th>First Name</th>
  <th>Last Name</th>
  <th>E-mail</th>
  <th>Date of birth</th>
  <th>Passport Number</th>
  <th>Phone Number</th>
  </tr>";
      echo "<tr>";
      echo "<td>" . $row['first_name'] . "</td>";
      echo "<td>" . $row['last_name'] . "</td>";
      echo "<td>" . $row['mail'] . "</td>";
      echo "<td>" . $row['birth_date'] . "</td>";
      echo "<td>" . $row['passport_number'] . "</td>";
      echo "<td>" . $row['tel'] . "</td>";
      echo "</tr>";
echo "</table>";
   }
 }
?>
<h2>Payment Information</h2>

<?php
include_once 'include/dbh.php';

$sql="SELECT * FROM cardInfo;";
$result=mysqli_query($conn, $sql);
$resultCheck=mysqli_num_rows($result);


if($resultCheck > 0){
 while($row=mysqli_fetch_assoc($result)){
echo "<table>
<tr>
<th>Card Holder</th>
<th>Card Number</th>
<th>PIN</th>
<th>Expiry Date</th>
<th>Card Type</th>
<th>Billing Address</th>
<th>Post Code</th>
<th>State</th>
<th>City</th>
</tr>";
    echo "<tr>";
    echo "<td>" . $row['card_holder'] . "</td>";
    echo "<td>" . $row['card_number'] . "</td>";
    echo "<td>" . $row['pin'] . "</td>";
    echo "<td>" . $row['expiry_date'] . "</td>";
    echo "<td>" . $row['card_select'] . "</td>";
    echo "<td>" . $row['billing_address'] . "</td>";
    echo "<td>" . $row['post_code'] . "</td>";
    echo "<td>" . $row['state'] . "</td>";
    echo "<td>" . $row['origin_city'] . "</td>";
    echo "</tr>";
echo "</table>";
 }
}
?>

<h2>Travel Information</h2>

<?php
include_once 'include/dbh.php';

$sql="SELECT * FROM travelInfo;";
$result=mysqli_query($conn, $sql);
$resultCheck=mysqli_num_rows($result);


if($resultCheck > 0){
 while($row=mysqli_fetch_assoc($result)){
echo "<table>
<tr>
<th>Visiting city</th>
<th>Departure Day</th>
<th>Arrival Day</th>

</tr>";
    echo "<tr>";
    echo "<td>" . $row['select_city'] . "</td>";
    echo "<td>" . $row['departure_day'] . "</td>";
    echo "<td>" . $row['arrival_day'] . "</td>";
    echo "</tr>";
echo "</table>";
 }
}
?>


</div>
</article>
</section>
</body>

<footer>
<a class="weatherwidget-io" href="https://forecast7.com/en/40d71n74d01/new-york/" data-label_1="NEW YORK" data-label_2="WEATHER" data-theme="original" >NEW YORK WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
<img id="footer_img" src="images/footer.jpg">
</footer>

</html>
