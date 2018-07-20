<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HOME</title>

    <!-- Bootstrap -->
    <link href="{{ asset('guest/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('guest/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('guest/css/animate.css')}}">
	<link href="{{ asset('guest/css/animate.min.css')}}" rel="stylesheet"> 
	<link href="{{ asset('guest/css/style.css')}}" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
  </head>
  <body>	
	<header id="header">
        <nav class="navbar navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <div class="navbar-brand">
						<a href="/"><h1>SMK ASSALAAM</h1></a>
					</div>
                </div>				
                <div class="navbar-collapse collapse">							
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation"><a href="{{ route('login' )}}" >Login</a></li>						
						</ul>
					</div>
				</div>		
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	
	<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">						
						<img src="{{ asset('guest/img/bu.jpg')}}" class="img-responsive" alt="" height="4000"
						width="5000"> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2><span>Selamat Datang Di Website Kami</span></h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									<p>APLIKASI PIKET SEKOLAH</p>
								</div>
							</div>
						</div>
				    </div>
			
				    <div class="item">
						<img src="{{ asset('guest/img/kk.JPG')}}" class="img-responsive" alt="" width="5000"
						height="4000"> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								<h2>SMK ASSALAAM BANDUNG</h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">								
							</div>
						</div>
				    </div> 
				
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->
	
	<div class="about">
		<div class="container">
			</div>	
		</div>			
	</div>
	<hr>
	
	<div class="services">
		<div class="container">
			<div class="text-center">
				<h2>SMK ASSALAAM</h2>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<i class="fa fa-cloud"></i>
				<h3>Profile</h3>
				<p>SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian teknik kendaraan ringan (roda empat) plus sepeda motor dalam proses pendidikan pelatihan.</p>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
				<i class="fa fa-book"></i>	
				<h3>Visi</h3>
				<p>Menjadikan SMK Assalaam sebagai sekolah IDAMAN</p>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
				<i class="fa fa-gear"></i>	
				<h3>Misi</h3>
				<p>Intelek dalam melaksanakan proses pembelajaran
Disiplin dalam segala aspek kehidupan
Amanah dalam melaksanakan tugas
Maju dan menang untuk kepentingan bersama
Aktif dalam merespon perkembangan
Norma islam sebagai landasan dalam beraktifitas.</p>
			</div>
		</div>			
	</div>
	<div class="gallery">
		<div class="text-center">
			<h2>Gallery</h2>
		</div>
		<div class="container">		
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/or.JPG')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Lab Komputer RPL</h4>
						<p>Smk Assalaam menyediakan lab komputer untuk membantu para siswa nya dalam mempermudah pengerjaan .</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/org.JPG')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Lab Komputer RPL</h4>
						<p>Smk Assalaam menyediakan lab komputer untuk membantu para siswa nya dalam mempermudah pengerjaan.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/tkr.JPG')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Bengkel TKR</h4>
						<p>Smk Assalaam menyediakan Bengkel mobil untuk membantu para siswa nya dalam mempermudah pengerjaan.</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
		
		<div class="container">
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/tsm.JPG')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Bengkel TSM</h4>
						<p>Smk Assalaam menyediakan Bengkel motor untuk membantu para siswa nya dalam mempermudah pengerjaan.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/rpl.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Lab Komputer RPL</h4>
						<p>Smk Assalaam menyediakan lab komputer untuk membantu para siswa nya dalam mempermudah pengerjaan.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/ba.JPG')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Kelas</h4>
						<p>Smk Assalaam menyediakan kelas untuk membantu para siswa nya mempermudah dalam proses pembelajaran.</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
	</div>
		
	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					</ul>	
				</div>
			</div>
			
			<div class="col-md-4 col-md-offset-4">
				<div class="copyright">
					&copy; Day 2015 by <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Bootstrap Themes</a>.All Rights Reserved.
				</div>
                <!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Day
                -->
			</div>						
		</div>				
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('guest/js/jquery.js')}}"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('guest/js/bootstrap.min.js')}}"></script>	
	<script src="{{ asset('guest/js/wow.min.js')}}"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
</html>