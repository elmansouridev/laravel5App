@extends('layouts.app')


@section('content')

<form class="form-horizental" action="{{ url('inscriptions') }}" method="post" style="height: 1700px;">
{{ csrf_field() }}

	<div class="container">
		<div class="row">
			<div class="col-lg-12"></div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Numéro d'Apogée
			</div>
			<div class="col-lg-4">
				<input type="text" value="{{ old('napogee') }}" name="napogee" class="form-control">
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
			<div class="col-lg-4">
				@foreach($errors->get('napogee') as $message)
				<ul>
					<li>{{ $message }}</li>
				</ul>
				@endforeach
			</div>
			@endif
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Nom
			</div>
			<div class="col-lg-4">
				<input type="text" value="{{ old('nom') }}" name="nom" class="form-control">
			</div>
			<div class="col-lg-4">
				الاسم العائلي
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('nom') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Prénom
			</div>
			<div class="col-lg-4">
				<input type="text" value="{{ old('prenom') }}" name="prenom" class="form-control">
			</div>
			<div class="col-lg-4">
				الاسم الشخصي
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('prenom') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Date de Naissance
			</div>
			<div class="col-lg-4">
				<input id="date" value="{{ old('dateNais') }}" type="Date" name="dateNais" class="form-control">
			</div>
			<div class="col-lg-4">
				تاريخ الازدياد
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('dateNais') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>



	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Lieu de Naissance
			</div>
			<div class="col-lg-4">
				<input type="text" value="{{ old('lieuNais') }}" name="lieuNais" class="form-control">
			</div>
			<div class="col-lg-4">
				مكان الازدياد
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('lieuNais') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Année de réussite en BAC
			</div>
			<div class="col-lg-4">
				<input type="text" value="{{ old('anneeBac') }}" name="anneeBac" class="form-control">
			</div>
			<div class="col-lg-4">
				سنة استحقاق الباك
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('anneeBac') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Moyen en BAC
			</div>
			<div class="col-lg-4">
				<input type="text" value="{{ old('moyenBac') }}" name="moyenBac" class="form-control">
			</div>
			<div class="col-lg-4">
				المعدل المحصل عليه في شهادة الباك
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('moyenBac') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Filière étudie au Lycée
			</div>
			<div class="col-lg-4">
				<input type="text" value="{{ old('filiereLycee') }}" name="filiereLycee" class="form-control">
			</div>
			<div class="col-lg-4">
				الشعبة الدراسية بالثانوية
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('filiereLycee') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Filière d'inscription à la faq
			</div>
			<div class="col-lg-4">
				<select name="fiiereInscFaq" value="{{ old('fiiereInscFaq') }}" class="form-control">
				  <option value="SMP">SMP</option>
				  <option value="SMC">SMC</option>
				  <option value="SMA">SMA</option>
				  <option value="SMI">SMI</option>
				  <option value="SVI">SVI</option>
				  <option value="STU">STU</option>
				</select>
			</div>
			<div class="col-lg-4">
				الشعبة الدراسية بالكلية
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12"></div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Année d'inscription à la faq
			</div>
			<div class="col-lg-4">
				<input type="text" value="{{ old('anneeInscFaq') }}" name="anneeInscFaq" class="form-control" >
			</div>
			<div class="col-lg-4">
				سنة التسجيل في الكلية
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('anneeInscFaq') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Modules valides
			</div>
			<div class="col-lg-4">
				<input type="number" value="{{ old('modulesValides') }}" name="modulesValides" class="form-control" >
			</div>
			<div class="col-lg-4">
				عدد الوحدات المحصلة
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('modulesValides') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Adresse
			</div>
			<div class="col-lg-4">
				<input type="text" value="{{ old('adresse') }}" name="adresse" class="form-control" >
			</div>
			<div class="col-lg-4">
				العنوان
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('adresse') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Travail des parents
			</div>
			<div class="col-lg-4">
				<input type="text" value="{{ old('travailParent') }}" name="travailParent" class="form-control" >
			</div>
			<div class="col-lg-4">
				مهنة الأب و الأم
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('travailParent') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Boursier
			</div>
			<div class="col-lg-4">
				<div class="form-check form-check-inline" style="margin-left: 130px;">
				 <label class="form-check-label" for="inlineRadio1">نعم</label>
				  <input class="form-check-input" type="radio" name="boursier" id="inlineRadio1" value="oui">
				  <input class="form-check-input" type="radio" name="boursier" id="inlineRadio2" value="non">
				  <label class="form-check-label" for="inlineRadio2">لا</label>
				</div>
			</div>
			<div class="col-lg-4">
				حاصل على المنحة
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('boursier') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Nombre d'enfant de la famille
			</div>
			<div class="col-lg-4">
				<input type="number" value="{{ old('nbrEnfantFamille') }}" name="nbrEnfantFamille" class="form-control" >
			</div>
			<div class="col-lg-4">
				عدد الاخوة داخل العائلة
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('nbrEnfantFamille') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				Marrakech le
			</div>
			<div class="col-lg-2" style="margin-left: 80px;">
				<input type="date" value="{{ old('marrakechLe') }}" name="marrakechLe" class="form-control" >
			</div>
		</div>
		<div class="row">
		<div class="col-lg-4"></div>
			@if(count($errors))
<div class="col-lg-4">
	@foreach($errors->get('marrakechLe') as $message)
	<ul>
		<li>{{ $message }}</li>
	</ul>
	@endforeach
</div>
@endif
		</div>
	</div>

	

	<div class="container">
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-2" style="margin-left: 80px;">
				<input type="submit" value="Valider" style="margin-right: 80px;" class="form-control btn btn-primary">
			</div>
		</div>
	</div>
	
</form>
@endsection






