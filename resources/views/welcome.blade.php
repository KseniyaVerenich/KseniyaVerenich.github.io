<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
  
</head>
  <body>


<div class="flex-center position-ref full-height" id="textBody">
  <div class="container">
  <div class="row justify-content-center">
  <div class="col text-right">
  
<div class="links">
<br><br><br><br>
       
       <a href="https://laravelexercises.herokuapp.com/"> Portfolio </a>
       <br>
       <a href="https://github.com/KseniyaVerenich"> GitHub </a>
       <br>
       <a href="https://www.linkedin.com/in/kseniyaverenich/"> LinkedIn </a>
       <br>
       <!-- <a href="/aboutme"> About </a> -->
       <a href="/docs/KVerenich_TechCV.pdf"> Resume </a>
       
    </div>
    </div>
    
        
     
      <!-- <div class="col text-left"> -->
     
      
      <div class="title m-b-md">

        <h1 class="ml10">
        <span class="text-wrapper">
        <br><br>
         <span class="letters">Hi, I'm Kseniya Verenich. </span> 
          </span>
        </h1>     


<h1 class="ml10">
  <span class="text-wrapper">
    <span class="letters">I'm a full-stack web developer.        </span>
  </span>
</h1>

<!-- </div> -->







             
              </div>
            </div>
        </div>
    </div>






      
    <!-- Optional JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<script>


// Wrap every letter in a span
$('.ml10 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x80-\xFF || \x20]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: false})
  .add({
    targets: '.ml10 .letter',
    rotateY: [-90, 0],
    duration: 1300,
    delay: function(el, i) {
      return 45 * i;
    }
  })



  </script>



        
            
  
 


 <!-- Styles -->
 <style>
       

          /* .ml10 {
          position: relative;
          font-weight: 900;
          font-size: 1em;
        }

          .ml10 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.2em;
            padding-right: 0.05em;
            padding-bottom: 0.1em;
            overflow: hidden;
          }

            .ml10 .letter {

              display: inline-block;
              line-height: 1em;
              transform-origin: 0 0;
            } */

           #name {
               color: #FFFFFF    ;
              

           }

         

            .letters {
                background-color: #F2A488 ;
                border-color: #000000;
                color:#FAF7FF   ;
                font-family: 'Prata', serif;
                font-size:60px;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: left;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
/* 
            .content {
                text-align: center;
            } */

            .title {
                font-size: 40px;
            }

            .links > a {
                color:#FFE5DB    ; 
                padding: 20px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            
            }

            .links > a:hover {
              color:#FAF7FF;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #mainNav {
                background-color: #D1D1D1 !important;  
            }

            heady, body {
                background-color: #F2A488;  
            }

   

        </style>
