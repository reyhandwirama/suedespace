<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suedespace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css" rel="stylesheet">
    <link rel="icon" href="/asset/Logo-Astronot.ico" type="image/x-icon">

    <style>
        @media (max-width: 1100px){
          iframe{
            width: 200px;
            height: 100px;
          }
        }
        @media (max-width: 1300px) {
          .second-content .container .first-row, .second-row{
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0;
          }
          .navbar-brand.position-absolute {
            position: static !important;
            left: auto !important;
            transform: none !important;
          }
          iframe{
            width: 500px;
            height: 300px;
          }

          .kiri .body-header{
            width: 100%;
          }

          .middle-content .kiri{
            margin: 0;
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

          /* .middle-content .kanan{
            margin: 200px;
          } */
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
    @include('komponen/navbar')


    <div class="middle-content container-fluid d-flex justify-content-center" style=" margin-top:100px; margin-bottom:150px; color:white;">
      <div class="kiri d-flex flex-column" style="width: 55%; margin:50px">
            <div class="header">
                <h1><strong>{{$project->Project_Name}}</strong></h1>
            </div>
            <div class="body-header" style="width: 80%; margin-top:50px">
                <p style="text-align: justify">{{$project->Description}}</p>
            </div>
            <iframe width="760" height="415" name="iframe" src="https://www.youtube.com/embed/{{$project->url}}" frameborder="0" allowfullscreen allow="autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>
        <div class="kanan d-flex justify-content-center align-items-center"  style="width: 20%">
          <div class="wrapping">
          @if (is_string($project->Type_Content))
              <?php
                  $dataArray = explode("%", $project->Type_Content);
              ?>

              @foreach ($dataArray as $item)
                  <?php
                      $splitData = explode(";", $item);

                      // Access data elements directly for clarity
                      $title = $splitData[0];
                      $value = $splitData[1] ?? null; // Use null for missing content
                  ?>

                  <p><strong>{{ $title }}</strong></p>
                  <p>{{ $value }}</p>
              @endforeach
            @else
                <p>Error: Type_Content is not a string</p>
            @endif
          </div>
        </div>

    </div>


    @include('komponen/footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
