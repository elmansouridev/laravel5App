@extends('layouts.app')


@section('content')

@foreach($insc as $ins)
<a href="{{ url('inscriptions/'.$ins->id.'/invoice') }}"><h1 style="margin-left: 100px;">Telecharger PDF</h1></a>
<form class="form-horizental" id="form1">

<img class="image" src="{{ asset('assets/img/image.png') }}" style="height: 100px;">

<div v-for="ins in insc">
	
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Numéro d'Apogée
			</div>
			<div class="col-lg-4">
				{{ $ins->napogee }}
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Nom
			</div>
			<div class="col-lg-4">
				{{ $ins->nom }}
			</div>
			<div class="col-lg-4">
				الاسم العائلي
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Prénom
			</div>
			<div class="col-lg-4">
				{{ $ins->prenom }}
			</div>
			<div class="col-lg-4">
				الاسم الشخصي
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Date de Naissance
			</div>
			<div class="col-lg-4">
				{{ $ins->dateNais }}
			</div>
			<div class="col-lg-4">
				تاريخ الازدياد
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Lieu de Naissance
			</div>
			<div class="col-lg-4">
				{{ $ins->lieuNais }}
			</div>
			<div class="col-lg-4">
				مكان الازدياد
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Année de réussite en BAC
			</div>
			<div class="col-lg-4">
				{{ $ins->anneeBac }}
			</div>
			<div class="col-lg-4">
				سنة استحقاق الباك
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Moyen en BAC
			</div>
			<div class="col-lg-4">
				{{ $ins->moyenBac }}
			</div>
			<div class="col-lg-4">
				المعدل المحصل عليه في شهادة الباك
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Filière étudie au Lycée
			</div>
			<div class="col-lg-4">
				{{ $ins->filiereLycee }}
			</div>
			<div class="col-lg-4">
				الشعبة الدراسية بالثانوية
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Filière d'insccription à la faq
			</div>
			<div class="col-lg-4">
				{{ $ins->fiiereInscFaq }}
			</div>
			<div class="col-lg-4">
				الشعبة الدراسية بالكلية
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Année d'insccription à la faq
			</div>
			<div class="col-lg-4">
				{{ $ins->anneeInscFaq }}
			</div>
			<div class="col-lg-4">
				سنة التسجيل في الكلية
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Modules valides
			</div>
			<div class="col-lg-4">
				{{ $ins->modulesValides }}
			</div>
			<div class="col-lg-4">
				عدد الوحدات المحصلة
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Adresse
			</div>
			<div class="col-lg-4">
				{{ $ins->adresse }}
			</div>
			<div class="col-lg-4">
				العنوان
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Travail des parents
			</div>
			<div class="col-lg-4">
				{{ $ins->travailParent }}
			</div>
			<div class="col-lg-4">
				مهنة الأب و الأم
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Boursier
			</div>
			<div class="col-lg-4" name="boursier">
				{{ $ins->boursier }}
			</div>
			<div class="col-lg-4">
				حاصل على المنحة
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Nombre d'enfant de la famille
			</div>
			<div class="col-lg-4">
				{{ $ins->nbrEnfantFamille }}
			</div>
			<div class="col-lg-4">
				عدد الاخوة داخل العائلة
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Marrakech le
			</div>
			<div class="col-lg-2" style="margin-left: 80px;">
				{{ $ins->marrakechLe }}
			</div>
		</div>
	</div>

</div>
	
</form>
@endforeach
<br><br><br><br><br><br><br>


@endsection

@section('javascripts')

 <script src="{{ asset('js/vue.js') }}"></script>

<script src="{{ asset('js/axios.js') }}"></script>
 

<script>
	var app = new Vue({
		el: '#app',
		data: {
			message: 'je suis mohamed',
			insc: []
		},
		methods: {
			getInscriptions : function(){
				axios.get('http://localhost:8000/getInscriptions')
				.then(response => {
					this.insc = response.data;
				})
				.catch(error => {
					console.log('errors : ', error)
				})
			}
		},
		mounted: function(){
			this.getInscriptions();
		}
	});
</script>

@endsection