<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Suedespace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="icon" href="/asset/Logo-Astronot.ico" type="image/x-icon">

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
            @include('komponen/sidebar')
            <div class="kanan d-flex flex-column align-items-center" style="padding: 40px; padding-top: 50px; width: 75%; background-color: white; border-radius: 40px; ">
                <div class="element1 d-flex" style="width: 90%; border-radius: 60px; box-shadow: -2px 5px 10px rgba(0, 0, 0, 0.5); padding: 50px;  padding-left: 0; padding-bottom: 100px;">
                    <div class="element1-kiri d-flex justify-content-center align-items-center" style="width: 100px; ">
                        <i class="fas fa-grip-vertical" style="font-size: 30px; "></i>
                        
                    </div>
                    <div class="element1-kanan w-100">
                        <h5><strong>Project Photo & Video</strong></h5>
                        <p>Uploading Photo Project</p>
                        <button onclick="window.location.href = '/admin/upload-project'" class="btn bg-dark text-light" style="width: 300px; margin-top: 20px; border-radius: 20px;">Add Project</button>

                        <div class="container mt-5">
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" style="text-align: center;">Pin</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project as $index=>$p)
                                        <tr>
                                            <th scope="row">{{$index+1}}</th>
                                            <td>{{$p->Project_Name}}</td>
                                            <td>{{$p->created_at}}</td>
                                            <td style="text-align: center;">
                                                <a class="btn @if ($p->status == 1) btn-dark @else btn-light @endif custom-button" href="/admin/project/{{$p->Project_id}}/status" onclick="return confirm('Anda yakin ingin menampilkan project ini di halaman utama ?')" style="height: 25px; width: 25px; border-radius: 8px; border: 1px solid black;"></a>
                                                </button>
                                            </td>
                                            <td>
                                            <a class="btn btn-dark" href="/admin/project/{{$p->Project_id}}/delete" onclick="return confirm('Anda yakin ingin menghapus project ini ?')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
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
