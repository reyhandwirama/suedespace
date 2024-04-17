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
            @include('komponen/sidebar')
            <div class="kanan d-flex flex-column align-items-center" style="padding: 40px; padding-top: 50px; width: 75%; background-color: white; border-radius: 40px; ">
                <div class="element1 d-flex" style="width: 90%; border-radius: 60px; box-shadow: -2px 5px 10px rgba(0, 0, 0, 0.5); padding: 50px;  padding-left: 0; padding-bottom: 100px;">
                    <div class="element1-kiri d-flex justify-content-center align-items-center" style="width: 100px; ">
                        <i class="fas fa-grip-vertical" style="font-size: 30px; "></i>
                        
                    </div>
                    <div class="element1-kanan w-100">
                        <h5><strong>Project Photo & Video</strong></h5>
                        <p>Create design for screens signin and sign up</p>
                        <form action="/admin/upload-project/store" id="myForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-grouping d-flex align-items-center" style="margin-bottom: 20px;">
                            <label for="" style="width: 150px;">Judul Project</label>
                            <input type="text" class="form-control" name="Project_Name">
                            </div>
                            <div class="input-grouping d-flex align-items-center" style="margin-bottom: 20px;">
                            <label for="" style="width: 150px;">Deskripsi Project</label>
                            <textarea type="textarea" class="form-control" name="Description"></textarea>
                            </div>
                            <div class="deskripsi">
                            <div class="input-group-deskripsi d-flex justify-content-between" style="margin-bottom: 20px;" id="deskripsi">
                                    <input type="text" name="judul_desc" class="form-control" style="width: 12%; margin-right: 18px;" placeholder="Judul Deskripsi">
                                    <input type="text" name="deskripsi" class="form-control" style="width: 90%;" placeholder="isi Deskripsi">
                            </div>
                            </div>
                            <a onclick="duplicateInputGroup()" class="btn bg-dark text-light">Tambah Deskripsi</a>
                            <div class="input-group-gambar d-flex justify-content-between" style="margin-top: 50px;">
                                <label for="foto">Gambar Utama</label>
                                <input type="file" accept="image/png, image/jpeg" name="foto" id="foto">
                            </div>

                            <div class="wrapper d-flex w-100 justify-content-center" style="margin-top: 20px;">
                            <button  type="submit" class="btn bg-dark text-light p-3" style="width: 50%; margin-top: 20px; border-radius: 20px;">Save Project and Add Another Image</button>
                            </div>
                            
                        </form>
                        
                        
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

  // Increment names of cloned input elements
  const inputCount = document.querySelectorAll('.input-group-deskripsi').length-1; // Get existing count
  const incrementSuffix = inputCount ? inputCount + 1 : 1; // Start at 1 or existing count + 1

  clonedInputGroup.querySelectorAll('input[type="text"]').forEach((input) => {
    const originalName = input.name;
    const newName = originalName ? `${originalName}${incrementSuffix}` : `judul_desc${incrementSuffix}`; // Handle existing and new inputs
    input.setAttribute('name', newName);
  });

  // Append the cloned group to the container (modify as needed)
  const container = document.querySelector('.deskripsi'); // Replace with your selector
  container.appendChild(clonedInputGroup);
    }

      </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
