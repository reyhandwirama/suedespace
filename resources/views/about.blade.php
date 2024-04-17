<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suedespace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css" rel="stylesheet">
    <link rel="icon" href="asset/Logo-Astronot.ico" type="image/x-icon">

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

          .second-content .gambar .first-row, .second-row{
            flex-direction: column;
            padding: 0;
          }
        }
        @media (min-width: 991px) {
          .middle-content .category .wrap p {
            width: 25%;
          }

          .second-content .category .wrap p{
            width: 25%;
          }
          .second-content .category .wrap{
            margin-left: 50px;
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
        
        .top-content .kiri {
          background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent),url('asset/Logo-Astronot.png');
          background-size: cover;
        }

        .category .kiri {
          position: relative;
        }

        .category .kiri::before {
          content: "";
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          background: linear-gradient(to top, rgba(0, 0, 0, 1), transparent),url('asset/category-photo.png');
          background-size: cover;
          filter: brightness(300%);
          z-index: -1; /* Place the overlay behind the content */
        }
        .category .kanan {
          position: relative;
        }

        .category .kanan::before {
          content: "";
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          background: linear-gradient(to top, rgba(0, 0, 0, 1), transparent),url('asset/category-sosmed.png');
          background-size: cover;
          filter: brightness(300%);
          z-index: -1; /* Place the overlay behind the content */
        }

        .category .sosmed {
          position: relative;
        }

        .category .sosmed::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: 
              linear-gradient(to top, rgba(0, 0, 0, 1), transparent), /* Top gradient */
              linear-gradient(to right, rgba(0, 0, 0, 1), transparent), /* Right gradient */
              url('asset/media-social.png'); /* Image */
            background-size: cover;
            filter: brightness(250%);
            z-index: -1; /* Place the overlay behind the content */
          }
          
          .sosmed img{
            max-height: 80px;
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
          <a class="navbar-brand " style="left: 80px;" href="#">
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
                <a class="nav-link active" href="#">About</a>
              </li>
              <li class="nav-item" style="margin-right:50px;margin-left:50px">
                <a class="nav-link" href="/work">Work</a>
              </li>
            </ul>
            <a href="/login" style="text-decoration: none; color:black;"><i class="ti ti-user" style="margin-right: 20px; margin-left: 50px;"></i></a>
          </div>
        </div>
    </nav>

    <div class="top-content container d-flex w-100" style="margin-top:100px; ;">
        <div class="kiri" style="width: 100%; height: 500px; ">
        </div>
        <div class="kanan" style="width: 100%;">
            <img src="asset/Logo-Suedespace.png" alt="" class="img-fluid">
            <p style="color:white; padding: 30px;">Lorem ipsum dolor sit amet consectetur. Quisque aliquam tempus sed eget habitasse. Sit est lorem risus amet enim neque lacus. Eget purus at lacus varius et tempor. Lacus arcu massa nulla eget amet. Amet mattis convallis blandit curabitur scelerisque ac. Lorem ipsum dolor sit amet consectetur. Quisque aliquam tempus sed eget habitasse. Sit est lorem risus amet enim neque lacus. Eget purus at lacus varius et tempor. Lacus arcu massa nulla eget amet. Amet mattis convallis blandit curabitur scelerisque ac.</p>
        </div>
    </div>
    
    <div class="middle-content" style="display:flex; flex-direction:column; align-items:center; margin-top:200px; ">
        <div class="content-header" style="color:white; display:flex; flex-direction: column; align-items: center;">
            <h2 style="margin-bottom:20px; ">PHOTO & VIDEO STUDIO</h2>
            <img src="/asset/slash.png" alt="" style="height: 20px; margin-bottom:100px;">
          </div>
          <div class="content-summary container" style="color: white; text-align: center;">
            <h2 style="padding:0 10% 0 10%; margin-bottom:50px"><strong>Need some headshots for your company? or even Niche Story Film? we can provide that</strong></h2>
            <p style="padding:0 15% 0 15%; margin-bottom:200px">We produce unique form of visual art that you don’t see on a lot of social media today
              created by our best team  to suit your all visual needs</p>
          </div>

          <div class="category d-flex justify-content-between " style="color:white; ">
            <div class="kiri" style="height: 700px; width: 100%;">
              <div class="wrap d-flex flex-column h-100 justify-content-around p-3" style="margin-left: 30px;">
              <h3 style="margin-top: -100px;"><strong>Photo Studio</strong></h3>
              <p>We provide indoor Photo studio
                with the best gear and equipment to capture your photoshoot and 
                visual needs </p>
              </div>
            </div>
            <div class="kanan" style="height: 700px; width: 100%;">
              <div class="wrap wrap d-flex flex-column h-100 justify-content-around align-items-end p-3"  style="margin-right: 30px;">
              <h3 style="margin-top: -100px;"><strong>Video Graph</strong></h3>
              <p>We provide indoor filming studio that can be transformed to many scenes your film need and we even provide the crew to fulfill your film crew</p>
              </div>
            </div>
          </div>
    </div>

    <div class="second-content" style="display:flex; flex-direction:column; align-items:center; margin-top: 50px;">
      <div class="content-header" style="color:white; display:flex; flex-direction: column; align-items: center;">
          <h2 style="margin-bottom:20px; ">Media Socials</h2>
          <img src="/asset/slash.png" alt="" style="height: 20px; margin-bottom:100px;">
        </div>
        <div class="content-summary container" style="color: white; text-align: center;">
          <h2 style="padding:0 10% 0 10%; margin-bottom:250px"><strong>Don’t have all the time to handle your social media? We can handle it for you</strong></h2>
        </div>

        <div class="category d-flex justify-content-between " style="color:white; width:100%;">
          <div class="sosmed container-fluid" style="height: 700px; width: 100%;" >
            <div class="wrap d-flex flex-column h-100 justify-content-between p-3">
              <h3 style="margin-top: 50px;"><strong>Social Media
                & Podcast</strong></h3>
                <div class="body-text">
                  <p>we provide the service to handle all your social media need from creating ideas, executing your social media programs, editing and posting your social media account or even fully handle your social media.</p>
                  <p style="margin-bottom: 100px;">Want to make a podcast? we can provide you with the sets and equipments so you can just sit back and do your podcast peacefully</p>
                </div>
              </div>
            </div>
          
        </div>
    </div>

    <div class="third-content container" style="display:flex; flex-direction:column; align-items:center; margin-top: 300px;">
      <div class="content-header container" style="color:white; display:flex; flex-direction: column; align-items: center; ">
          <h1 style="padding:0 15% 0 15%; margin-bottom:20px"><strong>Manage all your channels from SuedeSpace</strong></h1>
      </div>
      <div class="sosmed d-flex w-100 justify-content-around align-items-center" style="margin-top: 100px; margin-bottom: 200px;">
        <a href=""><div class="circle " style="padding: 20px; border-radius: 100%; background-color: #1E1E1E;"><img src="asset/Facebook_Logo.png" alt=""></div></a>
        <a href=""><div class="circle " style="padding: 20px; border-radius: 100%; background-color: #1E1E1E;"><img src="asset/instagram-logo.png" alt=""></div></a>
        <a href=""><div class="circle " style="padding: 30px; border-radius: 100%; background-color: #1E1E1E;"><img src="asset/youtube-logo.png" alt="" style="height: 60px; width: 60px;"></div></a>
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