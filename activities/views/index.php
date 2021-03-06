<!DOCTYPE html>
<?php
require_once (dirname ( dirname ( dirname ( dirname ( dirname ( __FILE__ ) ) ) ) ) . '/config.php');
include ('header.php');
?>
<body>
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../css/style_escribiendo.css" rel="stylesheet" type="text/css">


	<!-- Slider -->
	<div id="myCarousel" class="carousel slide">

		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>

		<div class="carousel-inner">

			<div class="item active">
				<img src="../img/slide01.png" alt="01" class="img-responsive"
					style="min-width: 100%;">
				<div class="carousel-caption"></div>
			</div>

			<div class="item">
				<img src="../img/slide02.png" alt="02" class="img-responsive"
					style="min-width: 100%;">
				<div class="carousel-caption"></div>
			</div>


		</div>

		<a class="carousel-control left" href="#myCarousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a> <a class="carousel-control right" href="#myCarousel"
			data-slide="next"> <span class="icon-next"></span>
		</a>

	</div>
	<!-- Slider End -->

	<!-- Actividades -->
	<div class="row_activities">
		<div class="container">

			<div class="row">
				<div class="col tit_actv"></div>
			</div>

			<div class="row">
				<div class="col-lg-4 col_height" style="background-color: #085B7F;">
					<h4 class="subtit_actv">Género: Afiches</h4>
					<h2 class="h2tit_actv">
						<a class="h2tit_actv"> Este es mi barrio</a>
					</h2>
					<hr>
					<br>
					<p class="text-justify text_actv">
						En esta actividad los estudiantes deben escribir un texto
						informativo en el que describan cómo es el lugar en el que viven.
						Con esta actividad, el docente puede trabajar los criterios de
						coherencia y desarrollo de ideas, además de enfatizar la escritura
						como proceso recursivo.<br> <br> Ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</p>
				</div>
				<div class="col-lg-5 img1_actv"></div>
				<div class="col-lg-4 col_height" style="background-color: #097C5E;">
					<h4 class="subtit_actv">Género: Experiencias Personales</h4>
					<h2 class="h2tit_actv">
						<a class="h2tit_actv">Vacaciones en la montaña</a>
					</h2>
					<hr>
					<br>
					<p class="text-justify text_actv">
						Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
						aut fugit, sed quia consequuntur magni dolores eos qui ratione
						voluptatem sequi nesciunt. <br> <br> Ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Excepteur sint occaecat cupidatat.
				
				</div>
			</div>

			<div class="row">
				<div class="col-lg-2 img2_actv"></div>
				<div class="col-lg-4 col_height" style="background-color: #7C3709;">
					<h4 class="subtit_actv">Género: Anécdotas</h4>
					<h2 class="h2tit_actv">
						<a class="h2tit_actv">Perdidos en el cerro</a>
					</h2>
					<hr>
					<br>
					<p class="text-justify text_actv">
						Ut enim ad minima veniam, quis nostrum exercitationem ullam
						corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
						consequatur? <br> <br> Lorem ipsum dolor sit amet, consectetur
						adipiscing elit, sed do eiusmod tempor incididunt ut labore et
						dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquipt.
				
				</div>
				<div class="col-lg-4 col_height" style="background-color: #757A0A;">
					<h4 class="subtit_actv">Género: Retratos de hechos</h4>
					<h2 class="h2tit_actv">
						<a class="h2tit_actv">Mi día viernes</a>
					</h2>
					<hr>
					<br>
					<p class="text-justify text_actv">
						Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
						aut fugit, sed quia consequuntur magni dolores eos qui ratione
						voluptatem sequi nesciunt. <br> <br> Ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Excepteur sint occaecat cupidatat.
				
				</div>
				<div class="col-lg-4 img3_actv"></div>
			</div>
			<br>
			<br>
		</div>
	</div>

	<!-- Actividades END -->


	<!-- Quienes Somos -->
	<div class="container">

		<div class="row">
			<div class="col-md-6 tit_blue">
				<h2>Quiénes Somos</h2>
				<br>
				<p class="text_grey1">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
					eiusmod tempor ore. Ad minim veniam, quis nostrud exercitation
					ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
					<br> Excepteur sint occaecat cupidatat. Nemo enim ipsam voluptatem
					quia voluptas sit aspernatur aut odit aut fugit. Ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
					commodo consequat.
				</p>
			</div>

			<div class="col-md-2 tit_blue" align="center">
				<h4>Profesores</h4>
				<img src="../img/index/img_profesor.jpg">
				<p class="text_grey">Est non commodo luctus, nisi erat porttitor
					ligula. Cras mattis consectetur. Fusce dapibus, tellus ac cursus
					commodo, tortor mauris.</p>
				<p>
					<a class="btn btn-default" href="#" role="button">Leer más &raquo;</a>
				</p>
			</div>

			<div class="col-md-2 tit_blue" align="center">
				<h4>Correctores</h4>
				<img src="../img/index/img_ayudante.png">
				<p class="text_grey">Duis nisi erat porttitor ligula, eget lacinia
					odio sem nec elit. Cras mattis consectetur purus sit amet
					fermentum. Tellus ac cursus commodo, tortor mauris condimentum
					nibh.</p>
				<p>
					<a class="btn btn-default" href="#" role="button">Leer más &raquo;</a>
				</p>
			</div>

			<div class="col-md-2 tit_blue" align="center">
				<h4>Estudiantes</h4>
				<img src="../img/index/img_student.png">
				<p class="text_grey">Cras mattis consectetur purus sit amet
					fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
					condimentum nibh.</p>
				<p>
					<a class="btn btn-default" href="#" role="button">Leer más &raquo;</a>
				</p>
			</div>
		</div>

	</div>
	<!-- Quienes Somos END -->




	<!-- Caracteristicas -->
	<div class="row_caract">
		<div class="container">
			<div class="col-md-3" align="center">
				<img src="../img/caract_01_01.png">
				<h4>Crea tu Perfil</h4>
			</div>
			<div class="col-md-3" align="center">
				<img src="../img/caract_01_03.png">
				<h4>Crea Actividades</h4>
			</div>
			<div class="col-md-3" align="center">
				<img src="../img/caract_01_05.png">
				<h4>Participa en el Foro</h4>
			</div>
			<div class="col-md-3" align="center">
				<img src="../img/caract_01_08.png">
				<h4>Conviértete en Corrector</h4>
			</div>
		</div>
	</div>
	<!-- Caracteristicas End -->
</body>
<?php include 'footer.html'; ?>