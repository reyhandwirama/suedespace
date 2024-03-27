<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    
    <style>

        @media(max-width:1400px){
            .header-content{
                flex-direction: column-reverse;
            }

            .header-content .header-kanan{
                margin-bottom: 20px;
            }
        }
        
        *{
            margin: 0;
            padding: 0;
        }
       body{
            font-family: 'Roboto', sans-serif;font-size: 1.1rem;
            background-color: #F0F0F0 ;
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

        #drop-area {
        border: 2px dashed #ccc;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        }

        #drop-area.highlight {
        border-color: #007bff;
        }


          /* Custom styles for the checkbox */
        .custom-checkbox input[type="checkbox"] {
        display: none; /* Hide the default checkbox */
        }

        .custom-checkbox label {
        display: inline-block;
        width: 20px;
        height: 20px;
        border: 2px solid #000;
        border-radius: 5px;
        cursor: pointer;
        }

        .custom-checkbox input[type="checkbox"]:checked + label {
        background-color: #000; /* Change background color when checked */
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
    <div class="wrapper mt-5" >
        <div class="dashboard-admin container-fluid d-flex justify-content-around">
            <div class="kiri" style="width: 20%; padding: 20px;border-radius: 40px; background-color: white; height: 90vh;">
                <div class="header-content d-flex justify-content-between w-100 p-2" style="border-bottom: 1px solid grey; ">
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
            <div class="kanan d-flex flex-column align-items-center" style="padding: 40px; padding-top: 50px; width: 75%; background-color: white; border-radius: 40px; ">
                <div class="element1 d-flex" style="width: 90%; border-radius: 60px; box-shadow: -2px 5px 10px rgba(0, 0, 0, 0.5); padding: 50px;  padding-left: 0; padding-bottom: 100px;">
                    <div class="element1-kiri d-flex justify-content-center align-items-center" style="width: 100px; ">
                        <i class="fas fa-grip-vertical" style="font-size: 30px; "></i>
                        
                    </div>
                    <div class="element1-kanan w-100">
                        <h5><strong>Project Photo & Video</strong></h5>
                        <p>Create design for screens signin and sign up</p>
                        <button onclick="window.location.href = '/upload-project'" class="btn bg-dark text-light" style="width: 300px; margin-top: 20px; border-radius: 20px;">Add Project</button>

                        <div class="container mt-5">
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Project Name</th>
                                    <th scope="col" style="text-align: center;">Pin</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Project 1</td>
                                    <td style="text-align: center;">
                                        <button class="btn btn-light custom-button" style="height: 25px; width: 25px; border-radius: 8px; border: 1px solid black;" id="myButton" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                                        </button>
                                            <!-- Modal for Confirmation -->
                                        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda yakin ingin menampilkannya di halaman utama?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <button type="button" class="btn btn-primary" onclick="executeCode()">Yes</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                    <td>
                                      <button class="btn btn-dark">Edit</button>
                                      <button class="btn btn-dark">Delete</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Project 2</td>
                                    <td style="text-align: center;">
                                        <button class="btn btn-dark custom-button" style="height: 25px; width: 25px; border-radius: 8px; border: 1px solid black;" id="myButton" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                                        </button>
                                        <!-- Modal for Confirmation -->
                                        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda yakin ingin menampilkannya di halaman utama?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <button type="button" class="btn btn-primary" onclick="executeCode()">Yes</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                    <td>
                                      <button class="btn btn-dark">Edit</button>
                                      <button class="btn btn-dark">Delete</button>
                                    </td>
                                  </tr>
                                  
                                  
                                  <!-- Add more rows as needed -->
                                </tbody>
                              </table>
                            </div>
                          </div>
                    </div>
                    
                </div>
               
                
            </div>
        </div>
    </div>
    
    
    </div>
    <script>
            document.addEventListener("DOMContentLoaded", function () {
                const myButton = document.getElementById("myButton");
                
                myButton.addEventListener("click", function () {
                    // Add the "clicked" class to change background color
                    myButton.classList.add("clicked");
                });
            });

            function executeCode() {
                // Your code to execute when 'Yes' is clicked
                alert("Executing your code...");

                // You can add more code here to perform actions after confirmation

                // Close the modal
                const modal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                modal.hide();
            }
    
      </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
