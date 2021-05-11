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
	<title>Web Teknoloji Projesi</title>
</head>
<body>

    <nav id="nav1" class="navbar navbar-expand-sm  fixed-top">
         <a href="#" ><img src="images/logo1.png" style="width: 200px;" title="sblog"></a>
          <div id="" class="collapse navbar-collapse justify-content-center">
            <ul id="menu" class="navbar-nav">
                <li class="nav-item " ><a href="Anasayfa.html" class="nav-link ml-4 ">Hakkımda    </a> </li>
                <li class="nav-item " ><a href="EgitimBilgilerim.html" class="nav-link ml-4">Eğitim Bilgilerim    </a> </li>
                <li class="nav-item " ><a href="Sehrim.html" target="_self" class="nav-link ml-4 ">Şehrim </a> </li>
                <li class="nav-item " ><a href="#" class="nav-link ml-4 ">Mirasımız    </a> </li>
                <li class="nav-item " ><a href="#" class="nav-link ml-4 ">İlgi Alanlarım    </a> </li>
                <li class="nav-item " ><a href="iletisim.html" class="nav-link ml-4 ">İletişim     </a> </li>
               
            </ul>

          </div>
     </nav>
           

    <header>
		<div class=" text-light jumbotron balikcilar-jumbotron">
			<div class="container">
				<div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">
						Giriş Ekranı
					</h1>
				</div>
			</div>
		</div>
	</header>
	
	
	<main>
		<div class="container">
			
			<form action="git-Login.php" method="POST">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email '123@sakarya.edu.tr'" required="required">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Şifre '123'" required="required">
				</div>
				<button class="btn btn btn-info" type="submit">Gönder</button>
				<br><br><br>
			</form>
		</div>
	</main>
	<footer class="py-5 bg-info text-white text-center">
		Web-Teknolojileri-Projesi © Ekrem Eren Yılmaz 2020
	</footer>
	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>




</body>
</html>