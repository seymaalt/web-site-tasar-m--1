<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Ikon Kutuphanesi -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
	
	<!-- Css -->
	<link rel="stylesheet" href="style.css">

	<!--------------------------------->


</head>

<body>


      <nav class="navbar  navbar-expand-sm  navbar-light bg-light fixed-top"> 
<a href="#" ><img src="images/logo1.png" style="width: 200px;" title="sblog"></a>
  <div class="container">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Hakkımda</a>
		  <div class="line"></div>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="EgitimBilgilerim.html">Eğitim Bilgilerim </a>
		  <div class="line"></div>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Sehrim.html">Şehrim </a>
		  <div class="line"></div>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Mirasimiz.html">Mirasımız</a>
		  <div class="line"></div>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ilgialanlarım.html">İlgi Alanlarım</a>
		  <div class="line"></div>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="iletisim.html">İletişim </a>
		  <div class="line"></div>
        </li>
         <li class="nav-item">
			 <a class="nav-link active" aria-current="page" href="login.php"> GİRİŞ</a>
		  <div class="line"></div>				
        
      </ul>
    
    </div>
  </div>
</nav>

	  
	
	<main>

		<div class="container" style="margin: 100px auto;text-align:center; width:700px;">
			
			<?php 

				include("kullanici.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
				    header("Refresh: 1; url=index.html");
				   
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "!!!TEKRAR DENEYİN!!!";
			            header("Refresh: 1; url=login.php");
			    }
			
			?>
			
		</div>

	</main>




	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	

</body>

</html>