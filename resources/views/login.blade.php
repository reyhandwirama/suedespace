<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    
    <style>

      @media (max-width: 991px) {
        .login-component .kiri{
          display: none;
        }
        .login-component .kanan{
          border-radius: 10px 10px 10px 10px;
        }

      }

      @media (min-width: 991px) {
        .login-component .kanan{
          border-radius: 0 10px 10px 0;
        }
        
      }
       body{
            font-family: 'Poppins';font-size: 1.1rem;
            background-color: #010101;
        }
      .login-component .kiri{
        background: url("asset/background-login.png");
        height: 500px;
        background-position: -280px 0px;
        background-repeat: no-repeat;
        background-size: cover;
        width: 50%;
      }

      input:focus {
        outline: none; /* Remove the default focus outline */
        border-color: transparent; /* Set border color to transparent */
      }
        
      </style>

    
</head>
<body >
    <div class="login-form d-flex justify-content-center align-items-center vh-100">
      <div class="login-component d-flex" style="width: 50%;">
        <div class="kiri w-100" ></div>
        <div class="kanan w-100 d-flex flex-column bg-light align-items-center">
          <h1 style="margin-left:30px;margin-bottom: 50px;margin-top: 25px;"><strong>LOGIN</strong></h1>
          @if ($errors->any())
            <div class="alert alert-danger m-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          <form action="sesi/login" style="margin: 30px; justify-self: center;" method="POST">
            @csrf
            <div class="username d-flex w-100 p-2 justify-content-center align-items-center bg-light" style="border: 1px solid black; border-radius: 10px; margin-bottom: 20px;">
              <i class="fa fa-user" style="width: 20px;"></i>
              <input type="text" name="username" value="{{Session::get('username')}}" placeholder="Username" style="width: 95%; border:none; background: transparent;" required> 
            </div>
            <div class="password d-flex w-100 p-2 justify-content-center align-items-center bg-light" style="border: 1px solid black; border-radius: 10px; margin-bottom: 20px;">
              <i class="fa fa-key" style="width: 20px;"></i>
              <input type="password" name="password" placeholder="Password" style="width: 95%; border:none; background: transparent;" required> 
            </div>
            <button class="btn w-100 bg-dark text-light" style="margin-top: 20px; border-radius: 20px;">Login</button>
            <a href="/" class="btn w-100 bg-dark text-light" style="margin-top: 20px; border-radius: 20px;">Cancel</a>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

