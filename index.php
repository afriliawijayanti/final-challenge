<!doctype html>
<html lang="en">
  <style type="text/css">
  	.teks-putih{
  		color: white !important;
  	}
  </style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  </head>
  <body>
    <!-- NavBar -->

    <nav class="navbar navbar-expand-lg" style="background-color:#2a3166;">
	  <div class="container-fluid">
	    <a class="navbar-brand teks-putih" href="#">Todo List</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active teks-putih" aria-current="page" href="index.php?halaman=home">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link teks-putih" href="index.php?halaman=todo">Todo</a>
	        </li>
	        
	      </ul>
	      <form class="d-flex" role="search">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-succes teks-putihs" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>

    <!-- NavBar -->


    <!-- Content-->

    	<div class="container-fliud teks-putih">
    		<div class="row d-flex justify-content-center mt-3" style="min-height: 400px;" >
    			<div class="col-md-10 p-4 rounded-2" style="background-color: #3778c2">
    				<?php
    					if ($_GET['halaman']=='home') {
    						include "home.php";
    					}
    					else if ($_GET['halaman']=='todo') {
    						include "todo.php";
    					}
						else if ($_GET['halaman']=='edit_todo') {
                            include "edit_todo.php";
                        }
    				?>
    			</div>
    		</div>  		
    	</div>

    <!-- Content-->
    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloundflare.com/ajax/libs/jquery/3.3.1/jqueery.min.js"></script>
	<script type="text/javascript">
		$(".alert").delay(1000).slideUp(200, function() {
		$(this).alert('close');
		});
	</script>

</body>
</html>