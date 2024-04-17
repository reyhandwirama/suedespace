<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuedeSpace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" href="asset/Logo-Astronot.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css" rel="stylesheet">
    <style>
        @media (max-width: 991px) {
          .navbar-brand.position-absolute {
            position: static !important;
            left: auto !important;
            transform: none !important;
          }

          .middle-content{
            margin-top: 200px;
          }

          .collapse .ti{
            display: block;
            margin-left: 50px;
          }
          .gambar{
            display: flex;
            flex-direction: column;
            align-items:center;
          }

          .content-summary{
            flex-direction: column;
          }


          .footer{
            flex-direction: column;
          }

          .footer .element-kanan{
            margin-top:20px;
          }

          .container{
            display: flex;
            justify-content: center;
          }

          .top-content{
            margin-top: 150px;
          }

          .middle-content .gambar .row-element{
            flex-direction: column;
            padding: 0;
          }

        }

        @media (min-width: 991px) {
          .middle-content{
            margin-top: 300px;
          }
        }
        @media (max-width: 1300px) {
          .middle-content .gambar .row-element{
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
        <img src="/asset/Logo Suedespacec -01 1.png" style="width: 100px;" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item" style="margin-right:50px;margin-left:50px">
            <a class="nav-link active" aria-current="page" href="#">Intro</a>
          </li>
          <li class="nav-item" style="margin-right:50px;margin-left:50px">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item" style="margin-right:50px;margin-left:50px">
            <a class="nav-link" href="/work">Work</a>
          </li>
        </ul>

        <a href="/login" style="text-decoration: none; color:black;"><i class="ti ti-user" style="margin-right: 20px; margin-left: 50px;"></i></a>
      </div>
    </div>
</nav>

    <div class="top-content ">
        <img src="./asset/Main Page_Banner top.png" alt="" class="img-fluid" style="width: 100%;">
    </div>

    <div class="middle-content" style="display:flex; flex-direction:column;">
      <div class="content-header" style="color:white; display:flex; flex-direction: column; align-items: center;">
        <h2 style="margin-bottom:20px;">SMALL & CRAFTYY</h2>
        <img src="/asset/slash.png" alt="" style="height: 20px; margin-bottom:50px;">
      </div>
      <div class="content-summary container" style="color: white; text-align: center;">
        <h2 style="padding:0 10% 0 10%; margin-bottom:50px"><strong>SuedeSpace It is one of the Production Houses  involved in Multimedia.</strong></h2>
        <p style="padding:0 15% 0 15%; margin-bottom:200px">We partner with global brands and emerging businesses to create exciting and meaningful experiences, whether digital or non-digital. We partner with global brands and emerging businesses to create exciting and meaningful experiences, whether digital or non-digital.</p>
      </div>
      <div class="d-flex justify-content-center">
        <div class="gambar">
          @foreach ($project as $index=>$c)
            @if (($index % 3 === 0) || $index === 0)  <div class="container row-element d-flex align-items-center">
            @endif
              
            <a href="/detail-work/{{$c->Project_Name}}/view"><img src="{{$c->filename}}" alt="" style="margin:10px; max-height:400px;"></a>
            @if ((($index + 1) % 3 === 0 && $index > 0))  </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
      <div class="button-navigasi container" style="padding: 15px; background-color:yellow; display: flex; align-items: center; justify-content: space-between; width:250px; border-radius:50px; margin-top: 200px; margin-bottom:200px">
        <h4 style="position: relative; top: 5px;">View Project</h4>
        <a href="/work" style="text-decoration: none;"><h4 style="position: relative; top:5px; padding:10px; background-color: black; border-radius: 50%; width: 50px; height: 50px; color: white; display: flex; justify-content: center; align-items:center;" >></h4></a>
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
