<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suedespace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css" rel="stylesheet">
    <style>
        @media (max-width: 991px) {
          .navbar-brand.position-absolute {
            position: static !important;
            left: auto !important;
            transform: none !important;
          }

          .collapse .ti{
            display: block;
            margin-left: 50px;
          }
          .gambar{
            display: flex;
            flex-direction: column;
          }

          .top-content{
            flex-direction: column;
            justify-content: center;
          }

          .top-content .content h2{
            width: 80%;
          }

          .top-content .kanan{
            margin-top:100px;
            display: flex;
            flex-direction: column;
            align-items: center;
          }
          .footer{
            flex-direction: column;
          }

          .footer .element-kanan{
            margin-top:20px;
          }

          .category{
            flex-direction: column;
          }

          .middle-content .category .wrap p {
            width: 25%;
          }

          .top-content .content h2{
            width: 60%;
          }
          
          .top-content .content p{
            width: 40%;
          }
          
          .category .kanan{
            width:100%;
          }

          .category .kiri{
            width:100%;
          }

          .third-content .sosmed{
            flex-direction: column;
          }

          .third-content .sosmed .circle{
            margin-bottom: 20px;
          }

          .second-content .category {
            margin-left: 5px;
          }
          .middle-content .category .wrap, .second-content .category .wrap{
            width: 100%;
          }

          .second-content .container .row-content{
            flex-direction: column;
            padding: 0;
          }
        }
        @media (min-width: 991px) {
          .top-content .content h2{
            width: 50%;
          }
        }

        @media (max-width: 1400px) {
          .second-content .container .row-content{
            flex-direction: column;
            padding: 0;
          }

        }

        body{
            font-family: 'Poppins';font-size: 1.1rem;
            background-color: #010101;
        }


        .footer .element-kanan img{
          height: 30px;
          margin: 5px;
        }
        
        .top-content {
          position: relative;
        }

        .top-content::before {
          content: "";
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          background: linear-gradient(to top, rgba(0, 0, 0, 1), transparent),url('asset/burai.png');
          background-size: cover;
          filter: brightness(300%);
          z-index: -1; /* Place the overlay behind the content */
        }

    
      </style>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
      var navLinks = document.querySelectorAll(".navbar-nav .nav-link");

      navLinks.forEach(function(link) {
        link.addEventListener("click", function() {
          navLinks.forEach(function(innerLink) {
            innerLink.classList.remove("active");
          });
          link.classList.add("active");
        });
      });
    });
    </script>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" style="left: 80px;" href="#">
            <img src="./asset/Logo Suedespacec -01 1.png" style="width: 100px;" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item" style="margin-right:50px;margin-left:50px">
                <a class="nav-link " aria-current="page" href="/">Intro</a>
              </li>
              <li class="nav-item" style="margin-right:50px;margin-left:50px">
                <a class="nav-link " href="/about">About</a>
              </li>
              <li class="nav-item" style="margin-right:50px;margin-left:50px">
                <a class="nav-link active" href="#">Work</a>
              </li>
            </ul>
            <a href="/login" style="text-decoration: none; color:black;"><i class="ti ti-user" style="margin-right: 20px; margin-left: 50px;"></i></a>
            
          </div>

         
        </div>
    </nav>

    <div class="top-content container-fluid d-flex w-100 align-items-end" style="margin-top:20px; width: 100%; height: 500px; color: white;">
        <div class="content container">
      <h2><strong>PeeWeeGaskins 
        Burai (Official Music Video)</strong></h2>
      <p style="color:yellow;">Last project / </p>
      <p style="width: 50%;">Our last big project was PeeWeeGaskins Music Video and it was a hit on their 
        social media platform</p>
    </div>
    </div>
    
    <div class="middle-content" style="display:flex; flex-direction:column; align-items:center; margin-top:200px; ">
        <div class="content-header" style="color:white; display:flex; flex-direction: column; align-items: center;">
            <h2 style="margin-bottom:20px; ">PODCAST</h2>
            <img src="/asset/slash.png" alt="" style="height: 20px; margin-bottom:100px;">
          </div>
          <div class="content-summary container" style="color: white; text-align: center;">
            <h2 style="padding:0 10% 0 10%; margin-bottom:50px"><strong>Podcast with some friends?
              no problem, we can handle it
              sit back and have fun in your podcast</strong></h2>
            <p style="padding:0 15% 0 15%; margin-bottom:200px">We will definitely made you feel relaxed and enjoying your podcast while you talk about funny things you’ve done in the past with your friends dying in laughter. 
              Trust me, our crew will handle it like no other</p>
          </div>

          <div class="category d-flex justify-content-between align-items-center container" style="color:white; max-width: 60%; margin-bottom: 50px;">
                <div class="card bg-black" style="width: 30rem; color:white; margin: 10px;">
                    <img src="asset/project1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p style="color:yellow;">Music</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card bg-black" style="width: 30rem; color:white; margin: 10px;">
                    <img src="asset/project1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p style="color:yellow;">Converse</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
          </div>
          <div class="category d-flex justify-content-between align-items-center container" style="color:white; max-width: 60%; ">
                <div class="card bg-black" style="width: 30rem; color:white; margin: 10px;">
                    <img src="asset/project1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p style="color:yellow;">Converse</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card bg-black" style="width: 30rem; color:white; margin: 10px;">
                    <img src="asset/project1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p style="color:yellow;">Converse</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
          </div>
    </div>
    <div class="select-project" id="select-project"></div>
    <div class="second-content" style="display:flex; flex-direction:column; align-items:center; margin-top: 300px; margin-bottom: 400px">
      <div class="content-header" style="color:white; display:flex; flex-direction: column; align-items: center;">
          <h2 style="margin-bottom:20px; ">SELECT PROJECT</h2>
          <img src="/asset/slash.png" alt="" style="height: 20px; margin-bottom:100px;">
        </div>
        <div class="d-flex justify-content-center">
            <div class="gambar">
              <div class="row-content d-flex align-items-center">
                <a href="detail-work.php"><img src="./asset/rafael-romero-6F9KWbQFQ44-unsplash.png" alt="" style="margin:10px"></a>
              <a href="detail-work.php"><img src="./asset/alex-ware-O4QwznYbK1E-unsplash.png" alt="" style="margin:10px"></a>
              <a href="detail-work.php"><img src="./asset/cesar-rincon-XHVpWcr5grQ-unsplash.png" alt="" style="margin:10px"></a>
              </div>
              <div class="row-content d-flex align-items-center">
                <a href="detail-work.php"><img src="./asset/drake-s-takes-vKnRYW-mtek-unsplash.png" alt="" style="margin:10px"></a>
              <a href="detail-work.php"><img src="./asset/ivana-cajina-_7LbC5J-jw4-unsplash.png" alt="" style="margin:10px"></a>
              <a href="detail-work.php"><img src="./asset/maksym-tymchyk-cetn_UpJNDw-unsplash.png" alt="" style="margin:10px"></a>
              </div>
              
              
            </div>
        </div>
    </div>
    

    <div class="footer d-flex bg-light justify-content-between align-items-center p-3" >
      <p style="margin-top:0; margin-bottom:0;">SuedeSpace - Jakarta selatan, No.012, IN</p>
      <div class="element-kanan">
        <a href=""><img src="/asset/Vector.png" alt=""></a>
        <a href=""><img src="/asset/Vector-1.png" alt=""></a>
        <a href=""><img src="/asset/Vector-2.png" alt=""></a>
      </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>