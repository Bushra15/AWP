<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
         .main
         {
             position:relative;
             height:100%;
             width:100%;
             background-color:floralwhite;
         }
         .ldiv
         {
            position:relative;
                width:50%;
             height:100%;
             float: left;
                left:10px;
                top:100px;
         }
         .rdiv
         {
            position:relative;
                width:50%;
             height:100%;
             float: right;
                left:10px;
                top:100px; 
         }
      </style>

   </head>
   
   <body>
   
      <?php
         
         $nameErr = $emailErr = $genderErr  = "";
         $name = $email = $gender = $comment =  "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
           
            if (empty($_POST["addresss"])) {
               $comment = "";
            }else {
               $comment = test_input($_POST["address"]);
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
     
     <div class="main">
   <div class="ldiv">

   <h2>Personal Memo..</h2>
     
     <p><h2 class = "error">* Required Fiels...</h2></p>
    
     <form method = "post" action = "<?php 
        echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
           <tr>
              <td>Name:</td>
              <td><input type = "text" name = "name">
                 <span class = "error">* <?php echo $nameErr;?></span>
              </td>
           </tr>
          
           <tr>
              <td>E-mail: </td>
              <td><input type = "text" name = "email">
                 <span class = "error">* <?php echo $emailErr;?></span>
              </td>
           </tr>
          
           
           
           <tr>
              <td>Address:</td>
              <td> <textarea name = "address" rows = "2" cols = "40"></textarea></td>
           </tr>
           
           <tr>
              <td>Gender:</td>
              <td>
                 <input type = "radio" name = "gender" value = "female">Female
                 <input type = "radio" name = "gender" value = "male">Male
                 <span class = "error">* <?php echo $genderErr;?></span>
              </td>
           </tr>
               
           <td>
              <input type = "submit" name = "submit" value = "Submit"> 
           </td>
               
        </table>
           
     </form>
     
   </div>
   <div class="rdiv">

   <?php
         echo "<h2>Your given values are as:</h2>";
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
         
         echo $website;
         echo "<br>";
         
         echo $comment;
         echo "<br>";
         
         echo $gender;
      ?>
   </div>
   </div> 
   
     
   
   </body>
</html>