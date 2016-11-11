@extends("layouts.application")
@section("content")
	<!--HOME MENU-->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="/img/alunalunbdg.jpg" alt="Alun Alun Bandung">
		      <div class="carousel-caption"><h4>Alun Alun Bandung</h4></div>
		    </div>
		    <div class="item">
		      <img src="/img/gdsate.jpg" alt="Gedung Sate">
		      <div class="carousel-caption"><h4>Gedung Sate</h4></div>
		    </div>
		    <div class="item">
		      <img src="/img/pasopati.jpg" alt="Jembatan Pasopati">
		      <div class="carousel-caption"><h4>Jembatan Pasopati</h4></div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<div class="row">
		  <div class="col-md-4 setcol";">Hello saya Riku dan saat ini akan lulus kuliah, 
		  	salam kenal ya. Berikut contoh dari hasil design grafik
		  	yang saya buat :).</div>

		  <div class="col-md-8">
		  	<div class="row setrow">
			  <div class="col-md-4 col-md-offset-8">Facebook : riku@mail.com</div>
			</div>
			<div class="row">
			  <div class="col-md-4 col-md-offset-8">Twitter : riku@mail.com</div>
			</div>
			<div class="row">
			  <div class="col-md-4 col-md-offset-8">Telepon : 022-232392</div>
			</div>
			<div class="row">
		  	  <div class="col-md-4 col-md-offset-8 setcol">Alamat : Jl. Harapan Bangsa no 23, Bandung, Indonesia</div>
		  	</div>
		  </div>  
		</div>
@stop