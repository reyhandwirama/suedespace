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

          .middle-content {
            flex-direction: column;
            align-items: center;
          }

          .middle-content .kiri{
            width: 80%;
          }

          .middle-content .kanan{
            margin: 100px;
            align-self: start;

          }
          
          .middle-content .gambar .first-row, .second-row{
            flex-direction: column;
            padding: 0;
          }
        }
        @media (min-width: 992px) {
          .middle-content .category .wrap p {
            width: 25%;
          }

          .middle-content .kiri{
            width: 40%;
          }

          .top-content .content h2{
            width: 60%;
          }
          
          .top-content .content p{
            width: 40%;
          }

          .middle-content .kanan{
            margin: 200px;
          }
        }

        @media (max-width: 1400px) {
          .second-content .container .first-row, .second-row{
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
          background: linear-gradient(to top, rgba(0, 0, 0, 1), transparent),url('asset/work-background.png');
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
          <a class="navbar-brand position-absolute" style="left: 80px;" href="#">
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
                <a class="nav-link active" href="/work">Work</a>
              </li>
            </ul>
            <a href="/login" style="text-decoration: none; color:black;"><i class="ti ti-user" style="margin-right: 20px; margin-left: 50px;"></i></a>
          </div>
        </div>
    </nav>

    
    <div class="middle-content container-fluid d-flex justify-content-center" style="margin-top:200px; margin-bottom:200px; color:white;">
        <div class="kiri d-flex flex-column">
            <div class="header">
                <h1><strong>Photoshoot x Ganindra Bimo</strong></h1>
            </div>
            <div class="body-header" style="width: 80%; margin-top: 50px;">
                <p>We got the opportunity to capture some of the photos for the Antagonist of Serigala Terakhir 2 Film, Ganindra Bimo as Reno.
                  even in real life, Reno or Ganindra Bimo give us really menancing look and visual than we ever imagined. </p>
            </div>
            <img src="asset/detail-work.png" style="margin-top:100px" alt="">
        </div>
        <div class="kanan">
            <p><strong>FORMAT</strong></p>
            <p>Actor Photoshoot</p>

            <p><strong>COLLABORATION</strong></p>
            <p>Ganindra Bimo</p>
            
            <p><strong>DATE</strong></p>
            <p>18-9-2023</p>

            <p><strong>CAMERA</strong></p>
            <p>Fujifilm GFX 50R</p>
        </div>
        
    </div>

    <div class="second-content" style="display:flex; flex-direction:column; align-items:center; margin-top: 300px; margin-bottom: 400px">
        <div class="container">
            <div class="gambar">
              <div class="first-row d-flex align-items-center">
                <a href="detail-work.php"><img src="./asset/rafael-romero-6F9KWbQFQ44-unsplash.png" alt="" style="margin:10px"></a>
              <a href="detail-work.php"><img src="./asset/alex-ware-O4QwznYbK1E-unsplash.png" alt="" style="margin:10px"></a>
              <a href="detail-work.php"><img src="./asset/cesar-rincon-XHVpWcr5grQ-unsplash.png" alt="" style="margin:10px"></a>
              </div>
              <div class="second-row d-flex align-items-center">
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