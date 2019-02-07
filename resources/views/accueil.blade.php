@extends('layouts.master')

@section('content')
<div class="content" style="height: 1050px;">
		<div class="slider">
	           <div id="main-slider" class="carousel slide" data-ride="carousel">
	              <div class="carousel-inner">
	              	<div class="overlay">
	              		<div class="container">
	              	<div class="row">
	              		<div class="col-lg-12" style="margin-bottom: 60px;margin-top: 100px;">
	              			<span style="color: #FFF;margin-left: 216px;font-size: 100px;font-family: Blackadder ITC">Le centre d'écoute</span>
	              		</div>
	              	</div>
	              	<div class="row">
	              		<div class="col-lg-12" style="margin-bottom: 30px;">
	              			<span style="color: #FFF;margin-left: 470px;font-size: 100px;font-family: Blackadder ITC">et</span>
	              		</div>
	              	</div>
	              	<div class="row">
	              		<div class="col-lg-12">
	              			<span style="color: #FFF;margin-left: 10px;font-size: 100px;font-family: Blackadder ITC">de soutien psychologique et social</span>
	              		</div>
	              	</div>
	              </div>
	              	</div>
	                <div class="carousel-item active">
	                  <img class="d-block w-100" src="{{ asset('assets/img/a2.jpg') }}" alt="First slide">
	                </div>
	                <div class="carousel-item">
	                  <img class="d-block w-100" src="{{ asset('assets/img/a1.jpg') }}" alt="Second slide">
	                </div>
	                <div class="carousel-item">
	                  <img class="d-block w-100" src="{{ asset('assets/img/a3.jpg') }}" alt="Third slide">
	                </div>
	              </div>
	              <ol class="carousel-indicators">
	                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
	                <li data-target="#main-slider" data-slide-to="1"></li>
	                <li data-target="#main-slider" data-slide-to="2"></li>
	              </ol>
	            </div>
	            <div style="margin-left: 20px;">
			   	<span style="font-size: 25px;">L</span>e centre d’écoute est composé de personnes bénévoles de l’université.

			Le centre d’écoute veille à l’encadrement des écoutants, à la coopération avec les organismes externes à la faculté et établit les liens avec les autres services des affaires estudiantines (la Commission Pédagogique de la Faculté, les Services administratifs et les Associations d’étudiants, Centre de jeunesse, Association de bienfaisance pour le service de santé…).

			Au niveau de ce centre, il existe une assistante sociale qui écoute et traite les problèmes d’ordre social des étudiants.

			Ses objectifs :

			<ul>
				<li>accueillir, écouter et orienter les étudiants</li>

			<li>prévenir : par l’organisation des semaines de prévention à thème</li>

			<li>participer à l intégration des nouveaux arrivants ( organiser des séances d’information, d’accompagnement et d’aides adaptés aux difficultés liées à la période d’intégration en collaboration avec l’Espace Accueil Information et orientation  (EAIO ) , … )</li>

			<li>comprendre l’étudiant</li>

			<li>permettre à l’étudiant de clarifier son vécu immédiat</li>

			<li>aider l’étudiant à percevoir son problème plus simplement</li>
			</ul>
	   			</div>
	    </div>
</div>

<br><br>


@endsection
