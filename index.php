<!DOCTYPE html>
<html>
<head>
  <title>Essa é a página pessoal de Matheus Dalia</title>
    <?php
    // Retrieve the Google Fonts CSS file
    $googleFontsUrl = 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap';
    $googleFontsCSS = file_get_contents($googleFontsUrl);
    ?>
    <style>
        <?php echo $googleFontsCSS; ?>
        
        /* Additional styles */
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <script src="https://kit.fontawesome.com/4944c9e8ea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    justify-content: center;
    align-items: center;
}

    ul {
    
    width: 450px;
    margin: 4px;
    box-sizing: border-box;

    }

    ul li{
        display: flex;
        background:rgba(255,255,255,.1);
        padding: 10px 20px;
        color: #fff;
        margin:0;
        transition: .5s;
    }

    ul li:nth-child(1){
        background:rgba(255,255,255,.6);
        color: rgb(29, 120, 115);
    }

    ul li:nth-child(2){
        background:rgba(255,255,255,.4);
        color: rgb(29, 120, 115);
        margin: 10px;
    }

    input{
        width: 90px;
        margin: 20px;
        box-sizing: border-box;
        background: rgb(29, 120, 115);
    }

    h1{
        margin: 30px;
        font-size: 50px;
        color: rgb(29, 120, 115);
    }


    .description{
        margin: 5px;
        text-align: center;
    }

    .banner {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: rgb(253, 245, 246);
        min-width: 1200px; 
        min-height: 800px; 
        margin: 0 auto; 
        gap: 20px; 
        
    }

    .wrapper{
        margin: 30px;
    }

    .wrapper .button{
        display: inline-block;
        height: 60px;
        width: 60px;
        float: left;
        margin: 0 5px;
        overflow: hidden;
        background: rgb(29, 120, 115);;
        border-radius: 50px;
        cursor: pointer;
        box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
        transition: all 0.3s ease-out;
    }


    .wrapper .button:hover{
        width: 600px;
    }

    .wrapper .button .icon{
        display: inline-block;
        height: 60px;
        width: 60px;
        text-align: center;
        border-radius: 50px;
        box-sizing: border-box;
        line-height: 60px;
    }

    .wrapper .buton:nth-child(1):hover .icon{
        background:rgb(29, 120, 115);
    }

    .wrapper .button .icon i{
        font-size: 25px;
        line-height: 60px;
        color: white;
    }

    .wrapper .button:hover .icon i{
        color: rgb(255, 184, 184);;
    }

    .wrapper .button span{
        font-size: 18px;
        color: rgb(253, 245, 246);
        font-weight: 500;
        line-height:60px;
        margin-left: 10px;
        transition: all 0.3s ease-out;
    }


    .perfil {
        border-radius: 50%;
        width: 500px;
        height: 500px;
        margin: 40px;
    }

    /* Style all font awesome icons */
    .fa {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        border-radius: 20%;

        
      }
      
      /* Add a hover effect if you want */
      .fa:hover {
        opacity: 0.7;
      }
      
      /* Set a specific color for each brand */
      
      /* Facebook */
      .fa-twitter {
        background: #55ACEE;
        color: white;
      }
      
      /* Twitter */
      .fa-instagram {
        background: #125688;
        color: white;
      }


    .footer {
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 2;
        margin-top: 20px;
    }

    .footer-text {
        font-family: 'Poppins', sans-serif;
        font-weight: normal;
        color: rgb(29, 120, 115);
        font-size: 12px;
        line-height: 100px;
        
}
  </style>
  <script>
    function incrementCount() {
      // Get the current count
      var countElement = document.getElementById("count");
      var count = parseInt(countElement.textContent);
      
      // Increment the count
      count++;
      
      // Update the count on the page
      countElement.textContent = count;
    }
  </script>
</head>
<body>
<div class = "banner">
        <h1>Matheus Dalia</h1>
        <p class = "description">Baixista, desenvolvedor, ex-bbb, lateral-esquerdo do Central, 
           <br>motorista de kombi e atirador de facas.
        </p>
         <div class="wrapper">
           <div class = "button"> 
             <div class = "icon"><i class="fas fa-question"></i> </div>  
             <span>"At least give them a chance not to like it.... get heard!"</span>
            </div>
        </div>
        <ul>
            <li>It's not about being different anymore</li>
            <li>it's about doing what I want</li>
        </ul>

        <input></input>

        <button onclick="incrementCount()">Clica aqui</button>
        <p id="count">0</p>

        <div class = "social-sites">
            <a href="https://twitter.com/flea333" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/matheusdalia/" class="fa fa-instagram"></a>

        </div>
  
  <footer>©2021 Matheus Dalia Technologies. All rights reserved.</footer>
</body>
</html>
