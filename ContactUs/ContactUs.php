<!DOCTYPE html>

<html lang="en">

<head>
   <title>ShortForm: Contact Us</title>
   <meta charset="UTF-8">
   <meta name="ContactUs" content="Contact">
   <meta name="Miu Nakata" content="Contact">

  <link rel = "stylesheet" type = "text/css" href = "ContactUs.css"/>

</head> 

<body>
    
     <?php include("../Header/Header.php") ?>

    <tr>
        <td>    
    <h3>Contact Us</h3>

    <p id = "about"> 
      Shortform is a project by Aram, Alyssa, Miu and Sebastian, students at UT Austin. <br>
      <b>Aram</b> is a third year Radio-Television-Film major who has experience in film production, set assistance and as a director of photography. <br>
      <b>Alyssa</b> is a third year Informatics major with a background in computer science and front-end development who has worked with the local arts community, especially in radio at KVRX. <br>
      <b>Miu</b> is a second year Radio-Television-Film major, a hair and makeup artist and an award winning filmmaker at SXSW, Slay Horror Film Festival and more. <br>
      <b>Sebastian</b> is a a third year Informatics major with a background in computer science, data science and full-stack development. <br>
      </p>
    
      <h1><br>Our Email: <br>
          <a href="mailto:abaali@utexas.edu"><i>Aram Baali</i></a><br>
          <a href="mailto:nakatmiu@utexas.edu"><i>Miu Nakata</i></a><br>
          <a href="mailto:alyssalin@utexas.edu"><i>Alyssa Lin</i></a><br>
          <a href="mailto:sebastiangranhold@utexas.edu"><i>Sebastian Granhold</i></a><br>
                
                


    
    
                
    <div class=".contact-form">
    <form>
        
    <p>
      <label> Your Name: <input name = "name" type = "text" size = "30" id="inputs"/> </label>
   </p>

   <p>
      <label> Email Address: <input name = "email" type = "text" size = "30" id="inputs"/> </label>
   </p>
    <p>
      <label> Phone Number: <input name = "phone" type = "text" size = "30" id="inputs"/> </label>
   </p>



   <p>
      <label> Additional Comments: <br />
         <textarea name = "comments" rows = "4" cols = "36"> Enter your comments here: </textarea>
      </label>
   </p>

  
        
        <td class="buttons">
   <p>
      <input type = "submit" value = "Enter" />
      <input type = "reset" value = "Reset" />
   </p>

    
        
           
        

</form>
    </div>
    <h1><br>
        <a href="https://spring-2022.cs.utexas.edu/cs329e-bulko/nakatmiu/Shortform/ShortForm-main/Homepage/Body.php"><i>Homepage</i></a></h1>
    
    <?php include("../Footer/Footer.php") ?>
</body>
</html>