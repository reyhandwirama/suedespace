<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suedespace</title>
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

          .container-foto{
            flex-direction: column;
            align-items: center;
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
          background: linear-gradient(to top, rgba(0, 0, 0, 1), transparent),url({{$contentlast->filename}});
          background-size: cover;
          background-position-y: 10px;
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
        <img src="/asset/Logo Suedespacec -01 1.png" style="width: 100px;" alt="">
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
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item" style="margin-right:50px;margin-left:50px">
            <a class="nav-link active" href="/work">Work</a>
          </li>
        </ul>

        <a href="/login" style="text-decoration: none; color:black;"><i class="ti ti-user" style="margin-right: 20px; margin-left: 50px;"></i></a>
      </div>
    </div>
</nav>

    <div class="top-content container-fluid d-flex w-100 align-items-end" style="margin-top:20px; width: 100%; height: 500px; color: white;">
        <div class="content container">
      <h2><strong>{{$contentlast->Project_Name}}</strong></h2>
      <p style="color:yellow;">Last project / </p>
      <p style="width: 50%;">{{$contentlast->Description}}</p>
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

          <div class="container-fluid category d-flex flex-wrap justify-content-center container-foto" style="color:white; max-width: 100%; margin-bottom: 50px;">
            @foreach ($projectVideo as $item)
                <a href="/detail-work/video/{{$item->Project_id}}/view" style="text-decoration: none;">
                  <div class="card bg-dark" style="width: 20rem; color:white; margin: 10px;">
                  <img src="{{$item->filename}}" class="card-img-top" alt="image card" style="height: 200px; background-size: cover;">
                  <div class="card-body">
                  <p style="color:yellow;">{{$item->Project_Name}}</p>
                  <p class="card-text" class="myParagraph" style="text-align:justify;">{{$item->Description}}</p>
                  </div>
                </div></a>
            @endforeach
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
              @foreach ($project as $index=>$c)
            @if (($index % 3 === 0) || $index === 0)  <div class="container row-element d-flex align-items-center">
            @else
            @endif

            <a href="/detail-work/{{$c->Project_Name}}/view"><img src="{{$c->filename}}" alt="" style="margin:10px; max-height:400px;"></a>
            @if ((($index + 1) % 3 === 0 && $index > 0))  </div>
            @endif
          @endforeach


            </div>
        </div>
    </div>


   @include('komponen/footer')

    <script>
      const paragraph = document.getElementByClassName('myParagraph');
      const maxLength = 120; // Adjust for desired character limit

      if (paragraph.textContent.length > maxLength) {
        paragraph.textContent = paragraph.textContent.substring(0, maxLength) + '...';
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
