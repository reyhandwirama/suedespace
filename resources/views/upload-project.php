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
                        <form action="" id="myForm">
                            <div class="input-grouping d-flex align-items-center" style="margin-bottom: 20px;">
                            <label for="" style="width: 150px;">Judul Project</label>
                            <input type="text" class="form-control">
                            </div>
                            <div class="input-group-deskripsi d-flex justify-content-between" style="margin-bottom: 20px;" id="deskripsi">
                                    <input type="text" class="form-control" style="width: 12%; margin-right: 18px;" placeholder="Judul Deskripsi">
                                    <input type="text" class="form-control" style="width: 90%;" placeholder="isi Deskripsi">
                            </div>
                            <button onclick="duplicateInputGroup()" class="btn bg-dark text-light">Tambah Deskripsi</button>
                            <div class="input-group-gambar d-flex" style="margin-top: 50px;">
                                <label for=""> Gambar</label>
                                <div class="container">
                                    <div class="row justify-content-center">
                                      <div class="">
                                        <div id="drop-area" class="mb-3">
                                          <h4>Drag and Drop Files Here</h4>
                                          <p>or</p>
                                          <input type="file" id="file-input" multiple>
                                        </div>
                                        <ul id="file-list" class="list-group"></ul>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            
                        </form>
                        
                        <div class="wrapper d-flex w-100 justify-content-end" style="margin-top: 10px;">
                        <button class="btn bg-dark text-light" style="width: 200px; margin-top: 20px; border-radius: 20px;">Save Project</button>
                    </div>
                    </div>
                    
                </div>
               
                
            </div>
        </div>
    </div>

    <script>
    
    function duplicateInputGroup() {
    const originalInputGroup = document.querySelector('.input-group-deskripsi');
    const clonedInputGroup = originalInputGroup.cloneNode(true);

    // Clear the input values in the cloned element
    clonedInputGroup.querySelectorAll('input').forEach((input) => {
      input.value = '';
    });

    // Append the cloned element after the original
    originalInputGroup.parentNode.insertBefore(clonedInputGroup, originalInputGroup.nextSibling);
  }

  document.getElementById('myForm').addEventListener('submit', function (event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Add any additional custom logic here if needed

        // Perform form submission or any other action as needed
    });
    
    document.addEventListener('DOMContentLoaded', () => {
    const dropArea = document.getElementById('drop-area');
    const fileInput = document.getElementById('file-input');
    const fileList = document.getElementById('file-list');

    dropArea.addEventListener('dragover', (e) => {
      e.preventDefault();
      dropArea.classList.add('highlight');
    });

    dropArea.addEventListener('dragleave', () => {
      dropArea.classList.remove('highlight');
    });

    dropArea.addEventListener('drop', (e) => {
      e.preventDefault();
      dropArea.classList.remove('highlight');

      const files = e.dataTransfer.files;
      handleFiles(files);
    });

    fileInput.addEventListener('change', () => {
      const files = fileInput.files;
      handleFiles(files);
    });

    function handleFiles(files) {
      for (const file of files) {
        const listItem = document.createElement('li');
        listItem.className = 'list-group-item';
        listItem.textContent = file.name;
        fileList.appendChild(listItem);
      }
    }
  });
      </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
