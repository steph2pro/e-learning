

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="126x126" href="assets/imgs/logo.png">
        <link rel="stylesheet" type="text/css" href="assets/css/Style1.css" media="screen">

        
 <link rel="stylesheet1" href="fontawesome.min.css" />
        <title>inscription</title>

  <?php
if(isset($_SESSION['error']) == true) {
    $error= $_SESSION['error'];

    echo '<script type="text/javascript">';
    echo 'alert("'.$error.'")';
    echo '</script>';

    unset($_SESSION['error']);
}

?>

   <style type="text/css">
body{
display: flex;
justify-content: center;
align-items: center;
background-color: aliceblue;
background-size: cover;
font-family: "Comic Sans MS", cursive;

}
*{
font-family: "Comic Sans MS", cursive;
}

h1{
    font-size: 25pt;
    color: black;
    border-bottom: solid 1px rgba(255, 255, 255, 0.3);
}

form{
    width: 600px;
    margin-top: 10px;
    background-color: white;
    padding: 60px;
    box-sizing: border-box;
    border-radius: 15px;
    min-width: 1px;
} .line {
        position: relative;
        text-align: center;
    }

    .line:before {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 4px;
        background-color: dodgerblue;
    }

    .line h1 {
        position: relative;
        display: inline-block;
        padding: 0 10px;
        background-color: white;
    }
    
input[type="text"]{
    border-radius: 45px;
    border: solid 3px dodgerblue;
    background-color: #f2f2f2;
    margin-bottom: 20px;
    outline: none;
    padding: 10px 70px;

}

input[type="password"]{
    border-radius: 45px;
    border: solid 3px dodgerblue;
    background-color: #f2f2f2;
    margin-bottom: 20px;
    outline: none;
    cursor: pointer;
    padding: 15px 70px;


}

input[type="submit"]{
    background-color:dodgerblue;
    font-size: bold;
    cursor: pointer;
    color: #f2f2f2;
    padding: 15px 40px;
}

   </style>     
 </head>   


        <fieldset> 
       

    <body>
        <fieldset> <h1> BIENVENUE SUR LEARHUB </h1></fieldset>

    </br>

        <section>
            
        <div id="form">
            
                    
    <div id="container">

            <form action="controleurs/connexionControl.php" method="POST">
              
                                    
                <div class="line">
                    <h1>connectez vous !!!</h1>
                </div>
                                        
                   <p>
                     <label><b>Nom d'utilisation</b></label><br>
                     <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required style="width: 95%;padding: 13px">
                   </p>
                   <p>
                     <label><b>mot de pass</b></label><br>
                     <input type="password" placeholder="Entrer le mot de pass" name="password" required style="width: 95%;padding: 13px">
                   </p>
                   


                  <center> <input type="submit" id='submit'name= "submit" value='CONNEXION' style="padding: auto 25px;"></center>
                   
            </form>

   </div>
                  </div>
                </body>
             </html>