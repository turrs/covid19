
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Covid-19 Lutra</title>
    <style type="text/css">
            .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
            }
            .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            font: 14px arial;
            }
        </style>
        <script>
        $(document).ready(function(){
        $(".preloader").fadeOut();
        });
     </script>
  </head>
  <body >


    
    <div class="preloader" id="preloader">
    <div class="loading">
        <img src="{{asset('img/gif.gif')}}" width="80">
        <p>Harap Tunggu</p>
        <?php
        $datapositif = file_get_contents("https://api.kawalcorona.com/positif");
        $positif = json_decode($datapositif, TRUE);
        $datasembuh = file_get_contents("https://api.kawalcorona.com/sembuh");
        $sembuh = json_decode($datasembuh, TRUE);
        $datameninggal = file_get_contents("https://api.kawalcorona.com/meninggal");
        $meninggal = json_decode($datameninggal, TRUE);
        $dataid = file_get_contents("https://api.kawalcorona.com/indonesia");
        $id = json_decode($dataid, TRUE);
        $dataidprovinsi = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
        $idprovinsi = json_decode($dataidprovinsi, TRUE);
            
    ?>
    </div>
    </div>

  <div class="bg-light">
  <div class="container ">
            <div class="row">
                <div class="col-sm">
        <nav class="navbar navbar-light bg-white" style="background-color: #fff;">
        <span class="navbar-brand mb-0 h1">Covid19-Luwu Utara</span>
        <span class="navbar-text">
        <a class="btn_2 d-none d-lg-block" >Hotline 021-5210-411</a>
    </span>
        </nav>
        <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-9/16508995_1822807967982782_5930341666607881600_n.png?_nc_cat=102&_nc_sid=dd9801&_nc_oc=AQnA6R4HEH9Xhc1-EVD9p9sIy17twnetj15zkJZNCgu5gcuw9QcDzDYpJIvJNoqIVDM&_nc_ht=scontent-sin6-2.xx&oh=53f16ad256f3f8390f9f0b0d420504ff&oe=5E9F6942); width='200%' ">
      <h2 class="mb-4">
      Covid19-Lutra
      </h2>
      <p class="mb-4">
      Pusat Informasi Wabah Covid19 Luwu Utara.
      </p>
      <a href="https://bootstrapious.com/snippets" class="btn btn-primary">Dapatkan Info Lebih Lanjut</a>

    </div>
    </div>
         <div class="container " >
                <div class="row">
                        <div class="col-sm">
                        <div class="alert alert-success" role="alert">
                            Kasus Corona di Luwu Utara
                            </div>
                        </div>
                    </div>
                <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-success img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">Orang Dalam Pengawasan (ODP)</p>
												<h2 class="mb-0 number-font">19</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="{{asset('img/happy.png')}}" width="50" height="50" alt="Positif"> </div>
                                            </div>
									</div>
								</div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-warning img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">Pasien Dalam Pengawasan (PDP)</p>
												<h2 class="mb-0 number-font">2</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="{{asset('img/happy.png')}}" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-danger img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">Positif</p>
												<h2 class="mb-0 number-font">0</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
                                            <div class="ml-auto"> <img src="{{asset('img/sad.png')}}" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-secondary img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">MENINGGAL</p>
												<h2 class="mb-0 number-font">0</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="{{asset('img/cry.png')}}" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
                                </div>
                </div>
                <br>
            <div class="row">
                <div class="col-sm">
                <div class="alert alert-success" role="alert">
                    Kasus Corona di Dunia
                    </div>
                </div>
            </div>
            <div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-danger img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font"><?php echo $positif['value'] ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="{{asset('img/sad.png')}}" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-success img-card box-secondary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL SEMBUH</p>
												<h2 class="mb-0 number-font"><?php echo $sembuh['value'] ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="{{asset('img/happy.png')}}" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-secondary img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL MENINGGAL</p>
												<h2 class="mb-0 number-font"><?php echo $meninggal['value'] ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="{{asset('img/cry.png')}}" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-primary img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
                                            <p class="text-white mb-0">TOTAL INFEKSI INDONESIA</p>
												<h2 class="mb-0 number-font"><h2><?php echo $id[0]['positif'] ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="{{asset('img/indo.png')}}" width="50" height="50" alt="Positif"> </div>  
										</div>
									</div>
								</div>
							</div><!-- COL END -->
                            </div>
                            <br>
                         

                <div class="row">
                    <div class="col-sm-10"><div class="alert alert-success" role="alert">
                    Kasus Corona di Indonesia
                    </div></div>
                    <div class="col-sm-2">
                    <div>
                    <div class="col-sm-10">
                    <div class="ml-auto"> <img src="{{asset('img/indo.png')}}" width="50" height="50" alt="Positif">Indonesia</div>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-sm">
                <div class="card">
						<div class="card-header ">
							<h3 class="card-title">Grafik Kasus Corona virus di Indonesia Berdasarkan Provinsi</h3>
							</div>
								<div class="card-body">
                                <canvas id="canvas" height="280" width="600"></canvas>
                                </div>
                                
                    </div>
                </div>
            </div>
            <br>
                <div class="row">
                    <div class="col-sm">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Total Positif</div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $id[0]['positif'] ?></h5>
                                <p class="card-text">Orang</p>
                         </div>
                    </div>
                    </div>
                    <div class="col-sm">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Total Sembuh</div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $id[0]['sembuh'] ?></h5>
                                <p class="card-text">Orang</p>
                         </div>
                    </div>
                    </div>
                    <div class="col-sm">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Total Meninggal</div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $id[0]['meninggal'] ?></h5>
                                <p class="card-text">Orang</p>
                         </div>
                    </div>
                    </div>
                    <div class="col-sm">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Total Positif Sulawesi Selatan</div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $idprovinsi[13]['attributes']['Kasus_Posi'] ?></td></h5>
                                <p class="card-text">Orang</p>
                         </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-sm">
                    <div class="card">
						<div class="card-header ">
							<h3 class="card-title">Data Kasus Corona virus di Indonesia Berdasarkan Provinsi</h3>
							</div>
								<div class="card-body" >
                                <div style="height:600px;overflow:auto;margin-right:15px;">
                    <table class="table table-striped"  fixed-header  >
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>

                    @php
                        $provinsi = 37;
                        $no = 1;    
                    @endphp
                    <?php
                        for ($i= 0; $i <= 21; $i++){

                        
                        ?>
                    <tr>
                        <td> <?php echo $i+1 ?></td>
                        <td> <?php echo $idprovinsi[$i]['attributes']['Provinsi'] ?></td>
                        <td> <?php echo $idprovinsi[$i]['attributes']['Kasus_Posi'] ?></td>
                        <td> <?php echo $idprovinsi[$i]['attributes']['Kasus_Semb'] ?></td>
                        <td> <?php echo $idprovinsi[$i]['attributes']['Kasus_Meni'] ?></td>
                    </tr>
                        <?php 
                    
                    } ?>
                    </tbody>
                    </table>
                   
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
								</div>
        <!-- Optional JavaScript -->
        
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>













