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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
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
                        <h2>Masukkan File Foto Content</h2>
                        <p>Nama Project : <strong>{{$request->Project_Name}}</strong></p>
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h4 class="mb-0">Drop Multiple Images</h4>
                                        </div>
                                        <div class="card-body">

                                            <label>Drag and Drop Multiple Images (JPG, JPEG, PNG, .webp)</label>

                                            <form action="/admin/upload-content/{{$request->Project_Name}}/upload" method="POST" enctype="multipart/form-data"
                                                class="dropzone" id="myDragAndDropUploader">
                                                @csrf
                                            </form>

                                            <h5 id="message"></h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            
                            
                        
                        
                    </div>
                    
                </div>
               
                
            </div>
        </div>
    </div>
    <script type="text/javascript">

        var maxFilesizeVal = 12;
        var maxFilesVal = 2;
    
        // Note that the name "myDragAndDropUploader" is the camelized id of the form.
        Dropzone.options.myDragAndDropUploader = {
    
            paramName:"file",
            maxFilesize: maxFilesizeVal, // MB
            maxFiles: maxFilesVal,
            resizeQuality: 1.0,
            acceptedFiles: ".jpeg,.jpg,.png,.webp",
            addRemoveLinks: false,
            timeout: 60000,
            dictDefaultMessage: "Drop your files here or click to upload",
            dictFallbackMessage: "Your browser doesn't support drag and drop file uploads.",
            dictFileTooBig: "File is too big. Max filesize: "+maxFilesizeVal+"MB.",
            dictInvalidFileType: "Invalid file type. Only JPG, JPEG, PNG and GIF files are allowed.",
            dictMaxFilesExceeded: "You can only upload up to "+maxFilesVal+" files.",
            maxfilesexceeded: function(file) {
                this.removeFile(file);
                // this.removeAllFiles(); 
            },
            sending: function (file, xhr, formData) {
                $('#message').text('Image Uploading...');
            },
            success: function (file, response) {
                $('#message').text(response.success);
                console.log(response.success);
                console.log(response);
            },
            error: function (file, response) {
                $('#message').text('Something Went Wrong! '+response);
                console.log(response);
                return false;
            }
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>

</body>
</html>
