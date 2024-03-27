<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuedeSpace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    
    <style>

        *{
            margin: 0;
            padding: 0;
        }
       body{
            font-family: 'Roboto', sans-serif;font-size: 1.1rem;
            background-color: #F0F0F0;
        }
        .sidebar li .submenu{ 
            list-style: none; 
            margin: 0; 
            padding: 0; 
            padding-left: 1rem; 
            padding-right: 1rem;
        }

        .dashboard-admin .kiri a{
            text-decoration: none;
            color: #010101;
        }
      </style>

    <script>
        document.addEventListener("DOMContentLoaded", function(){
            var myButton = document.getElementsByClassName("myButton");
            document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
                
                element.addEventListener('click', function (e) {

                let nextEl = element.nextElementSibling;
                let parentEl  = element.parentElement;	

                    if(nextEl) {
                        e.preventDefault();	
                        let mycollapse = new bootstrap.Collapse(nextEl);
                        
                        if(nextEl.classList.contains('show')){
                        mycollapse.hide();
                        } else {
                            mycollapse.show();
                            // find other submenus with class=show
                            var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                            // if it exists, then close all of them
                            if(opened_submenu){
                            new bootstrap.Collapse(opened_submenu);
                            }
                        }
                    }
                }); // addEventListener
            }) // forEach
    }); 
    </script>
    
</head>
<body >
    <div class="wrapper d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="dashboard-admin container-fluid d-flex justify-content-around">
            <div class="kiri" style="width: 20%; padding: 20px;border-radius: 40px; background-color: white; height: 90vh;">
                <div class="header-content d-flex justify-content-between w-100" style="border-bottom: 1px solid grey;">
                    <div class="header-kiri">
                        <h3>Hello</h3>
                        <h3><strong>Pratama</strong></h3>
                    </div>
                    <div class="header-kanan d-flex justify-content-center align-items-center">
                        <img src="asset/Logo Suedespacec -01 1.png" alt="" style="height: 50px;">
                    </div>
                </div>
                <nav class="sidebar py-2 mb-4">
                    <ul class="nav flex-column" id="nav_accordion">
                        <li class="nav-item has-submenu">
                            <a class="nav-link" href="#"><i class="fa-solid fa-bars-progress" style="margin-right: 5px;"></i> <strong>Project</strong> <i class="fa-solid fa-caret-right"></i></a>
                            <ul class="submenu collapse">
                                <li><a class="nav-link" href="/project">Project Photo & video</a></li>
                                <li><a class="nav-link" href="/project">Media social</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tambah-admin"><i class="fa-solid fa-user" style="margin-right: 5px;"></i> <strong>Tambah Admin</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/"><i class="fa-solid fa-right-from-bracket" style="margin-right: 5px;"></i><strong>Logout</strong> </a>
                        </li>
                    </ul>
                    </nav>
            </div>
            <div class="kanan d-flex flex-column align-items-center justify-content-around" style="width: 75%; padding: 100px; background-color: white; height: 90vh; border-radius: 40px;">
                <div class="element1 d-flex" style="width: 70%; border-radius: 60px; box-shadow: -2px 5px 10px rgba(0, 0, 0, 0.5); padding: 50px;  padding-left: 0; padding-bottom: 70px; ">
                    <div class="element1-kiri d-flex justify-content-center align-items-center" style="width: 100px; ">
                        <i class="fas fa-grip-vertical" style="font-size: 30px; "></i>
                        
                    </div>
                    <div class="element1-kanan">
                        <h5><strong>Project Photo & Video</strong></h5>
                        <p>Create design for screens signin and sign up</p>
                        <button onclick="window.location.href = '/project'" class="btn bg-dark text-light" style="width: 200px; margin-top: 20px; border-radius: 20px;">Add Project</button>
                    </div>
                    
                </div>
                <div class="element2 d-flex" style="width: 70%; border-radius: 60px; box-shadow: -2px 5px 10px rgba(0, 0, 0, 0.5); padding: 50px;  padding-left: 0; padding-bottom: 70px; ">
                    <div class="element2-kiri d-flex justify-content-center align-items-center" style="width: 100px; ">
                        <i class="fas fa-grip-vertical" style="font-size: 30px; "></i>
                        
                    </div>
                    <div class="element2-kanan">
                        <h5><strong>Project Photo & Video</strong></h5>
                        <p>Create design for screens signin and sign up</p>
                        <button onclick="window.location.href = '/project'" class="btn bg-dark text-light" style="width: 200px; margin-top: 20px; border-radius: 20px;">Add Project</button>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>