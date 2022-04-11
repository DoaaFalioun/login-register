<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact-Page</title>

<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>
<style>
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

/* li a.active {
  color: white;
  background-color: #04AA6D;
} */
  h3{
    font-size: medium;
  }


    .container {
        background-color: white;
        margin: 400px;
        margin-top: 6px;
        display: flex;
        width: 650px;
        height: 1000px;
        box-shadow: 0 0 40px 20px rgba(0,0,0,0.1);
        perspective: 1000px;
    }

    .heading {
        color:black;
        font-size: 35px;
        text-transform: uppercase;
        text-align: center;
    }
    
    
    .container-form {
    
     margin: 0 auto;
     color: #000;
    }


    
    
    .form-field {
        display: flex;
        justify-content: space-between;
    }
        




    
    .form-control {
       display: block;
     margin-right: 1700px;
     margin-left: 1700px;
    
    }
   
    .form-select{
        display: block;
     margin-right: 270px;
     margin-left: 270px;
    }
</style>
<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
 <div class="container">
     <div class="container-form">
         <form action="#">
         <h2 class="heading heading-yellow">Contact</h2>
         <div class="row row-cols-2">
          ____________________________________________
          <br>
          <div class="col"><h3>
            Klantenservice:
            <br>
            <br>
            Nummer: 06 12345678(12 18 uur, niet in weekend)
            <br>
            Email: magazijnt@mboutrecht.nl(24/7)
          </h3>
        </div>
        ____________________________________________
          <br>
          <br>

          <div class="col"><h3>Locatie: Daltonlaan 200 Utrecht</h3></div>
          <div class="col"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.5907106589993!2d5.157540315987322!3d52.08718017596639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c668a2ee3d4063%3A0x98813670b98f268d!2sDaltonlaan%20200%2C%203584%20BJ%20Utrecht!5e0!3m2!1sen!2snl!4v1633288418629!5m2!1sen!2snl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <br>
            <br>
            ____________________________________________
          <H3>
            
            
            <br>
            Bellen is alleen doordeweeks. Je kan alles vragen.
          </H3>

          ___________________________________________
          <h5>
            <a style="text-decoration: none; color:#000;" href="home.php">Klik hier Om naar HOME te gaan</a>
            <br>
          </h5>
        
          
          </div>
        </div>
        </div>
         

 </div>

        


</body>
</html>