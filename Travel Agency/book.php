<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book your Trip</title>
    <link rel="stylesheet" href="styles/book.css">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
       $("#btn").click(function(){

//FIRST NAME
         var fn = $("#fname").val();
         if(fn=='')
         {
           $("#fname").after('<span class="error1">Please enter your first name.</span>');
           hasError = true;
        }
         if(hasError == true)
         {
           return false;
         }
         else
         {
           $(".error1").hide();
         }

//LAST NAME

         var ln=$("#lname").val();
         if(ln=='')
         {
           $("#lname").after('<span class="error2">Please enter your last name.</span>');
           hasError = true;
        }
        if(hasError == true)
        {
          return false;
        }
        else
        {
          $(".error2").hide();
        }

//MAIL
         var mail = $("#email").val();
         //Checking if the email is valid and entered
         $(".error3").hide();
       var hasError = false;
       var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

       var emailaddressVal = $("#email").val();
       if(emailaddressVal == '') {
           $("#email").after('<span class="error3">Please enter your email address.</span>');

           hasError = true;
       }

       else if(!emailReg.test(emailaddressVal)) {
           $("#email").after('<span class="error3">Enter a valid email address.</span>');
           hasError = true;
       }

       if(hasError == true)
       {
         return false;
       }
       else
       {
         $(".error3").hide();
       }
//DATE OF BIRTH
         var dob = $("#dob").val();
         if(dob=='')
         {
           $("#dob").after('<span class="error4">Please enter your date of birth.</span>');
           hasError = true;
        }
        if(hasError == true)
        {
          return false;
        }
        else
        {
          $(".error4").hide();
        }

//PASSPORT NUMBER
        var passNum = $("#passport").val();
        if(passNum=='')
        {
          $("#passport").after('<span class="error6">Please enter your 7-digit Passport Number.</span>');
          hasError = true;
       }
       if(passNum.length < 7)
       {
         $("#passport").after('<span class="error5">The length must be 7 digits!.</span>');
         hasError = true;
      }
      if(hasError == true)
      {
        return false;
      }
      else
      {
        $(".error5").hide();
      }
//TELEPHONE NUMBER
       var telNum = $("#tel").val();
       if(telNum=='')
       {
         $("#tel").after('<span class="error6">Please enter your phone number.</span>');
         hasError = true;
      }
      if(telNum.length < 9)
      {
        $("#tel").after('<span class="error6">The length of the phone number must be 9 digits.</span>');
        hasError = true;
     }
     if(hasError == true)
     {
       return false;
     }
     else
     {
       $(".error6").hide();
     }
//SELECT CITY
        var selectedCity= $('select').find('option:selected').val();
        var price=0;
        if(selectedCity == 'dubai')
          price=1300;
        if(selectedCity == 'nyc')
           price=1600;
        if(selectedCity == 'paris')
           price=900;
        if(selectedCity == 'rome')
          price=700;
        if(selectedCity == 'vegas')
          price=500;
        if(selectedCity == 'vienna')
          price=800;
        if(selectedCity == 'miami')
          price=2000;
        if(selectedCity == 'amsterdam')
          price=1100;
   alert('The price is: '+price);
//DATE OF DEPARTURE
         var dod = $("#departure").val();
         if(dod=='')
         {
           $("#departure").after('<span class="error8">Please enter the date of departure.</span>');
           hasError = true;
        }
        if(hasError == true)
        {
          return false;
        }
        else
        {
          $(".error8").hide();
        }
//DATE OF ARRIVAL
         var doa = $("#arrival").val();
         if(doa=='')
         {
           $("#arrival").after('<span class="error9">Please enter the date of arrival.</span>');
           hasError = true;
        }
        if(hasError == true)
        {
          return false;
        }
        else
        {
          $(".error9").hide();
        }
//CARD NAME
         var cname = $("#cardName").val();
         if(cname=='')
         {
           $("#cardName").after('<span class="error10">Please enter the name of the card.</span>');
           hasError = true;
        }
        if(hasError == true)
        {
          return false;
        }
        else
        {
          $(".error10").hide();
        }
//CARD NUMBER
         var cnum  = $("#cardNum").val();
         if(cnum=='')
         {
           $("#cardNum").after('<span class="error11">Please enter your card number.</span>');
           hasError = true;
        }
        if(cnum.length > 6 || cnum.length < 6)
        {
          $("#cardNum").after('<span class="error11">The length of the card number must be 6 digits!.</span>');
          hasError = true;
       }
       if(hasError == true)
       {
         return false;
       }
       else
       {
         $(".error11").hide();
       }
//PIN
         var p = $("#pin").val();
         if(p=='')
         {
           $("#pin").after('<span class="error12">Please enter your pin number.</span>');
           hasError = true;
        }
        if(p.length < 3 || p.length > 3)
        {
          $("#pin").after('<span class="error12">The length of the pin must be 3 digits.</span>');
          hasError = true;
       }
       if(hasError == true)
       {
         return false;
       }
       else
       {
         $(".error12").hide();
       }
//EXPIRY DAY
         var exp = $("#expiry").val();
         if(exp=='')
         {
           $("#expiry").after('<span class="error13">Please enter the expiry date.</span>');
           hasError = true;
        }
        if(hasError == true)
        {
          return false;
        }
        else
        {
          $(".error13").hide();
        }
//CARD SELECTION
           var selectedVal = "";
           var selected = $("input[type='radio'][name='cardtype']:checked");
           if (selected.length > 0) {
               selectedVal = selected.val();
           }
//BILLING ADDRESS

         var billinga = $("#address").val();
         if(billinga=='')
         {
           $("#address").after('<span class="error15">Please enter the billing address.</span>');
           hasError = true;
        }
        if(hasError == true)
        {
          return false;
        }
        else
        {
          $(".error15").hide();
        }
//POST CODE
         var postCode = $("#post").val();
         if(postCode=='')
         {
           $("#post").after('<span class="error16">Please enter the post code.</span>');
           hasError = true;
        }
        if(postCode.length < 4 || postCode.length > 4)
        {
          $("#post").after('<span class="error16">The length of the post code must be 4 digits!</span>');
          hasError = true;
       }
       if(hasError == true)
       {
         return false;
       }
       else
       {
         $(".error16").hide();
       }
//STATE
         var state = $("#state").val();
         if(state=='')
         {
           $("#state").after('<span class="error17">Please enter the state where you live.</span>');
           hasError = true;
        }
        if(hasError == true)
        {
          return false;
        }
        else
        {
          $(".error17").hide();
        }
//CITY OF LIVING
         var origin = $("#origin").val();
         if(origin=='')
         {
           $("#origin").after('<span class="error18">Please enter the city where you live.</span>');
           hasError = true;
        }
        if(hasError == true)
        {
          return false;
        }
        else
        {
          $(".error18").hide();
        }


         //alert("Book info: \n"+"First Name: "+fn+"\n"+"Last Name: "+ln+"\n"+"E-mail address: "+mail+"\n"+"Date of birth: "+dob+"\n"+"Passport Number: "+passNum+"\n"+"Telephone Number: "+telNum);
         //alert("Travel info: \n"+"Date of Departure: "+dod+"\n"+"Date of Arrival: "+doa+"\n"+"City: "+selectedCity);
         //alert("Payment Info: \n"+"Cardholder Name: "+cname+"\n"+"Card Number: "+cnum+"\n"+"PIN: "+p+"\n"+"Expiry Date: "+exp+"\n"+"Billing Address: "+billinga+"\n"+"Post Code: "+postCode+"\n"+"State: "+state+"\n"+"City: "+origin+"\n"+"Price: "+price);


      a=confirm("Are you sure you want to submit?");
         if (a == true)
         {
          // location.href="bookInfo.html";
          }
         else
         {
         return false;
       }


        });
     });
</script>
  </head>
  <body>


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
      <li><a href="#book.php">Book your trip</a></li><br>
      <li><a href="aboutus.html">About Us</a></li><br>
      <li><a href="getTravelers.php">List of Travelers</a></li>

      <br><br><br><br>
       <div style="text-align:center;padding:1em 0;"> <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/785842"><span style="color:gray;">Current local time in</span><br />Skopje, North Macedonia</a></h3> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Europe%2FSkopje" width="100%" height="115" frameborder="0" seamless></iframe> </div>



        </ul>
    </nav>

    <article>
    <form action="include/submit.php" method="POST">
     <fieldset>
      <legend>Fill in the following form to book your trip</legend>
      <div>
       <label>First Name:
         <input id="fname" name="fname" type="text" placeholder="First name only">
         <span class="error1"></span>
      </label>
      </div>
      <div>
        <label>Last Name:
          <input id="lname" name="lname" type="text" placeholder="First name only">
          <span class="error2"></span>
        </label>
      </div>
      <div>
        <label>E-mail Address:
          <input id="email" name="email" type="email" placeholder="example@domain.com">
          <span class="error3"></span>
        </label>
      </div>
      <div>
        <label>Date of Birth:
          <input id="dob" name="dob" type="date">
          <span class="error4"></span>
        </label>
      </div>
      <div>
        <label>Passport Number:
          <input id="passport" name="passport" type="number" placeholder="Eg. 0000000">
          <span class="error5"></span>
        </label>
      </div>
      <div>
        <label>Telephone Number:
          <input id="tel" name="tel" type="tel" placeholder="Eg. 070 123 456">
          <span class="error6"></span>
        </label>
      </div>
      </fieldset>

      <fieldset>
        <legend>Choose your destination and travel information</legend>
        <div>
          <label>Select the city:
            <select id="city1" name="city1">
                <option value="dubai">Dubai</option>
                <option value="nyc">New York</option>
                <option value="paris">Paris</option>
                <option value="rome">Rome</option>
                <option value="vegas">Las Vegas</option>
                <option value="vienna">Vienna</option>
                <option value="miami">Miami</option>
                <option value="amsterdam">Amsterdam</option>
              <span class="error7"></span>
            </select>
          </label>
          </div>
          <div>
            <label>Choose a date of departure:
              <input id="departure" name="departure" type="date">
              <span class="error8"></span>
            </label>
          </div>
          <div>
            <label>Choose a date of arrival:
              <input id="arrival" name="arrival" type="date">
             <span class="error9"></span>
            </label>
          </div>
        </fieldset>

        <fieldset>
          <legend>Billing information</legend>
          <div>
            <label>Cardholder Name:
              <input id="cardName" name="cardName" type="text" placeholder="Owner of the card">
             <span class="error10"></span>
            </label>
          </div>
          <div>
            <label>Card Number:
              <input id="cardNum" name="cardNum" type="number" title="Sixteen digit number">
            <span class="error11"></span>
            </label>
          </div>
          <div>
            <label>PIN:
              <input id="pin" name="pin" type="password"  title="The last three digits on the back of your card.">
             <span class="error12"></span>
            </label>
          </div>
          <div>
            <label>Expiry Date:
              <input id="expiry" name="expiry" type="date" type="month">
             <span class="error13"></span>
            </label>
          </div>
          <div class="card-type">
           <label>Select card type:
            <input value="Visa" name="cardtype" type="radio">
            <label for="visa">VISA</label>
            <input name="cardtype" type="radio" value="Mastercard">
            <label for="mastercard">Mastercard</label>
            <input value="American Express" name="cardtype" type="radio">
            <label for="amex">American Express</label>
           <span class="error14"></span>
          </label>
        </div>
        <div>
          <label>Billing Address:</label>
            <textarea id="address" name="address" rows=4></textarea>
           <span class="error15"></span>
          </label>
        </div>
        <div>
          <label>Post Code:</label>
           <input id="post" name="post" type="number" >
          <span class="error16"></span>
         </label>
       </div>
       <div>
         <label>State:
           <input id="state" name="state" type="text">
          <span class="error17"></span>
         </label>
       </div>
       <div>
         <label>City:
           <input id="origin" name="origin" type="text">
          <span class="error18"></span>
         </label>
       </div>
     <div>
    <button id="btn" name="submit" type="submit">Book the trip</button>

     </div>
     </form>


<form action="include/submit.php" method="POST">
<fieldset>
  <label>Please Rate our service and add additional comment!</label>
    <textarea id="rating" name="rating" rows="9" cols="130"></textarea><br>
  <button id="btn" name="submit1" type="submit">Send the review</button>
</fieldset>
</form>


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
