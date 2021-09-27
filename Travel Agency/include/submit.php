<!DOCTYPE html>
<html>
  <body>

<?php
  include_once 'dbh.php';

if(isset($_POST['submit'])){

    $firstName=$_POST['fname'];
  echo "First Name: ".$firstName."<br/>";
    $lastName=$_POST['lname'];
  echo "Last Name: ".$lastName."<br/>";
    $mail=$_POST['email'];
  echo "E-mail: ".$mail."<br/>";
    $birthDate=$_POST['dob'];
  echo "Date of birth: ".$birthDate."<br/>";
    $passNumber=$_POST['passport'];
  echo "Passport Number: ".$passNumber."<br/>";
    $telephone=$_POST['tel'];
  echo "Phone Number: ".$telephone."<br/>";
    $selectCity=$_POST['city1'];
  echo "City: ".$selectCity."<br/>";
    $departureDay=$_POST['departure'];
  echo "Departure date:: ".$departureDay."<br/>";
    $arrivalDay=$_POST['arrival'];
  echo "Arrival Day: ".$arrivalDay."<br/>";
    $cName=$_POST['cardName'];
  echo "Card Name: ".$cName."<br/>";
    $cNumer=$_POST['cardNum'];
  echo "Card Number: ".$cNumer."<br/>";
    $PIN=$_POST['pin'];
  echo "PIN: ".$PIN."<br/>";
    $Expiry=$_POST['expiry'];
  echo "Expiry Date: ".$Expiry."<br/>";
    $cardSelection=$_POST['cardtype'];
  echo "Card Type: ".$cardSelection."<br/>";
    $billingAddress=$_POST['address'];
  echo "Billing Address: ".$billingAddress."<br/>";
    $postCode=$_POST['post'];
  echo "Post code: ".$postCode."<br/>";
    $State=$_POST['state'];
  echo "State: ".$State."<br/>";
    $originCity=$_POST['origin'];
  echo "City of origin ".$originCity."<br/>";


$sql1="INSERT INTO bookInfo(first_name,last_name,mail,birth_date,passport_number,tel)VALUES('$firstName','$lastName','$mail','$birthDate','$passNumber','$telephone');";

    $sql2="INSERT INTO cardInfo(card_holder,card_number,pin,expiry_date,card_select,billing_address,post_code,state,origin_city)VALUES('$cName','$cNumer','$PIN','$Expiry','$cardSelection','$billingAddress','$postCode','$State','$originCity');";

      $sql3="INSERT INTO travelInfo(select_city,departure_day,arrival_day)VALUES('$selectCity','$departureDay','$arrivalDay');";

   mysqli_query($conn, $sql1);
   mysqli_query($conn, $sql2);
   mysqli_query($conn, $sql3);


   mysqli_close($conn);

echo "You have successfully submited the form!";
}
   ?>


<?php
if(isset($_POST['submit1'])){
    $rate=$_POST['rating'];

    $sql4="INSERT INTO ratingInfo(rating)VALUES('$rate');";
  echo "Your review has been successfully sent!";
   mysqli_query($conn, $sql4);
   mysqli_close($conn);
 }
?>


   </body>
 </html>
