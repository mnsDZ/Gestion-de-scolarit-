<?php
	$con=mysqli_connect("localhost","root","","dbdb");
$i=1;
if (!$con) {echo "not connecting";}
if(isset($_GET['inputSearch'])) {
    $id = $_GET['inputSearch'];
$result =mysqli_query($con, "SELECT * FROM etudiant where nom ='$id'");
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>

    <!-- <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="logo.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

<li>
  <a href="index.php"> <i class="menu-icon fa fa-dashboard" style="color:#e74c3c;"></i>Accueil </a>
</li>
<h3 class="menu-title">Gestion de scolarité</h3><!-- /.menu-title -->

<li>
  <a href="ajout.php"> <i class="menu-icon fa fa-laptop"style="color:#e74c3c;"></i><h5 style="color:#e74c3c;">Ajouter</h5> </a>
</li>
<li>
  <a href="suppression.php"> <i class="menu-icon fa fa-pencil"></i>Supprimer </a>
</li>

<li>
  <a href="modification.php"> <i class="menu-icon fa fa-pencil" ></i>Modifier </a>
</li>
<li>
  <a href=""> <i class="menu-icon fa fa-book" ></i>L1 </a>
</li>
<li>
  <a href=""> <i class="menu-icon fa fa-book" ></i>L2 </a>
</li>
<li>
  <a href=""> <i class="menu-icon fa fa-book" ></i>L3 </a>
</li>
<li>
  <a href=""> <i class="menu-icon fa fa-book" ></i>M1 </a>
</li>
<li>
  <a href=""> <i class="menu-icon fa fa-book" ></i>M2 </a>
</li>
<li><hr style="border: 0.03em solid #e74c3c;" ></li>
<li>
  <a href="index.php"> <i class="menu-icon fa fa-chevron-circle-left"></i>Retour vers accueil </a>
</li>

</ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form" method="GET" action="index.php">
                                <input name="inputSearch" class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <input value="Rechercher" type="submit" aria-controls="bootstrap-data-table-export" class="page-link">
                            </form>
                        </div>

                        <div class="dropdown for-notification">

                        </div>

                        <div class="dropdown for-message">

                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="logo.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                        <a class="nav-link" href=""><i class="fa fa- user"></i>My Profile</a>


                        <a class="nav-link" href=""><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href=""><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Admin</a></li>
                            <li class="active">Ajouter</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>



        <div class="content mt-3">
            <div class="animated fadeIn">
                  <div class="row">

                   <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">Ajouter etudiant </div>
                      <div class="card-body card-block">
                        <form action="ajout.php" method="POST" class="" enctype="multipart/form-data">
						<!-- <div class="form-group">
                            <p>Numero d'insciption :</p>
                            <div class="input-group">
                              <input type="id" id="num_inscription" name="num_inscription" placeholder="Numero d'insciption" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            </div>
                          </div> -->
						  <div class="form-group">
                            <p>Nom :</p>
                            <div class="input-group">
                              <input type="text" id="nom" name="nom" placeholder="Nom" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            </div>
                          </div>
						  <div class="form-group">
                            <p>Prénom :</p>
                            <div class="input-group">
                              <input type="text" id="prenom" name="prenom" placeholder="prenom" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <p>Date de naissance :</p>
                            <div class="input-group">
                              <input type="date" id="date" name="date" placeholder="Date" class="form-control">
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            </div>
                          </div>

                          <div class="form-group">
                            <p> Niveau :</p>
                            <div class="input-group">
                            <select  id="niveau" name="niveau"  placeholder="Année" class="form-control">
                                <option>L1</option>
								<option>L2</option>
                                <option>L3 </option>
                                <option>M1</option>
                                <option>M2</option>
                              </select>
                                  <div class="input-group-addon"><i class="fa fa-th-list"></i></div>
                            </div>
                          </div>
						  <div class="form-group">
                            <p> Sexe :</p>
                            <div class="input-group">
                            <select  id="sexe" name="sexe"  placeholder="Sexe" class="form-control">
                                <option>Homme</option>
                                <option>Femme </option>
                              </select>
                                  <div class="input-group-addon"><i class="fa fa-th-list"></i></div>
                            </div>
                          </div>
						  <div class="form-group">
                            <p>Adresse :</p>
                            <div class="input-group">
                              <input type="text" id="adresse" name="adresse" placeholder="Votre adresse" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            </div>
                          </div>
						  
                         <div  class="form-actions form-group"><button  type="submit" class="btn btn-primary btn-block">Ajouter</button></div>
                        </form>
                      </div>
                    </div>
                  </div>


                


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
	

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>

<?php

if($_POST){
    $connect = mysqli_connect("localhost","root","","dbdb") or die(mysqli_connect_error());
mysqli_query($connect,"SET NAMES UTF8");
	//$connect=new PDO('mysql:host=localhost;dbname=dbdb','root',"");

	//$id=$_POST['num_inscription'];
	$nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $date_naissance=$_POST['date'];
	$niveau=$_POST['niveau'];
    $sexe=$_POST['sexe'];
    $adresse=$_POST['adresse'];
	//$r=mysql_query("select *from scolarite where id=$id");
	//if(mysql_num_rows($r)>=1){
	//	echo "not existing";
	//}
	//else{
		$sql="INSERT INTO `dbdb`.`etudiant` (`num_inscription`, `nom`, `prenom`, `date_naissance`, `niveau`, `sexe`, `adresse`) 
        VALUES (NULL, '$nom', '$prenom','$date_naissance', '$niveau', '$sexe','$adresse')";

        mysqli_query($connect,$sql);
				//if ($r){

                    //header("location:index.php");
				//else echo "IMPOSIBLE";
				

}


?>	