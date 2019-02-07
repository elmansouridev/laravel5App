@extends('layouts.app')


@section('content')

<form action="{{ url('questionaire') }}" method="post">
{{ csrf_field() }}
		
		<div class="container" style="margin-bottom: 40px;">
		<div class="row">
			<div class="col-lg-12"></div>
		</div>
		<div class="row">

			<div class="col-lg-12">
				<input type="hidden" name="inscription_id" value="{{ $insc->id }}">
			</div>

		</div>
	</div>

		<div class="container" style="margin-bottom: 40px;">
		<div class="row">
			<div class="col-lg-6">
				
			</div>
			<div class="col-lg-6">
				<span style="font-size: 50px;margin-left: 10px;">أجب على الأسئلة التالية</span>
			</div>
		</div>
		</div>

	<div class="container" style="margin-bottom: 40px;">
		<div class="row">
			<div class="col-lg-12"></div>
		</div>
	</div>

	<div class="container" style="margin-bottom: 40px;">
		<div class="row">
			@if(count($errors))
			<div class="col-lg-4">
				@foreach($errors->get('Question1') as $message)
				<ul>
					<li>{{ $message }}</li>
				</ul>
				@endforeach
			</div>
			@endif
			<div class="col-lg-4">
				<div class="form-check form-check-inline" style="margin-left: 130px;">
				 <label class="form-check-label" for="inlineRadio1">نعم</label>
				  <input class="form-check-input" type="radio" name="Question1" id="inlineRadio1" value="نعم">
				  <input class="form-check-input" type="radio" name="Question1" id="inlineRadio2" value="لا" style="margin-left: 60px;">
				  <label class="form-check-label" for="inlineRadio2">لا</label>
				</div>
			</div>
			<div class="col-lg-4">
				<span style="font-weight: bold;">السؤال الأول</span>
			</div>
		</div>
	</div>



	<div class="container" style="margin-bottom: 40px;">
		<div class="row">
			<div class="col-lg-12"></div>
		</div>
	</div>



	<div class="container" style="margin-bottom: 40px;">
		<div class="row">
			@if(count($errors))
			<div class="col-lg-4">
				@foreach($errors->get('Question2') as $message)
				<ul>
					<li>{{ $message }}</li>
				</ul>
				@endforeach
			</div>
			@endif
			<div class="col-lg-4">
				<div class="form-check form-check-inline" style="margin-left: 130px;">
				 <label class="form-check-label" for="inlineRadio1">نعم</label>
				  <input class="form-check-input" type="radio" name="Question2" id="inlineRadio1" value="نعم">
				  <input class="form-check-input" type="radio" name="Question2" id="inlineRadio2" value="لا" style="margin-left: 60px;">
				  <label class="form-check-label" for="inlineRadio2">لا</label>
				</div>
			</div>
			<div class="col-lg-4">
				<span style="font-weight: bold;">السؤال الثاني</span>
			</div>
		</div>
	</div>

	<div class="container" style="margin-bottom: 40px;">
		<div class="row">
			<div class="col-lg-12"></div>
		</div>
	</div>

	<div class="container" style="margin-bottom: 40px;">
		<div class="row">
			@if(count($errors))
			<div class="col-lg-4">
				@foreach($errors->get('Question2') as $message)
				<ul>
					<li>{{ $message }}</li>
				</ul>
				@endforeach
			</div>
			@endif
			<div class="col-lg-4">
				<div class="form-check form-check-inline" style="margin-left: 130px;">
				 <label class="form-check-label" for="inlineRadio1">نعم</label>
				  <input class="form-check-input" type="radio" name="Question3" id="inlineRadio1" value="نعم">
				  <input class="form-check-input" type="radio" name="Question3" id="inlineRadio2" value="لا" style="margin-left: 60px;">
				  <label class="form-check-label" for="inlineRadio2">لا</label>
				</div>
			</div>
			<div class="col-lg-4">
				<span style="font-weight: bold;">السؤال الثالث</span>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-2">
				
			</div>
			<div class="col-lg-2"></div>
			<div class="col-lg-2">
				<input type="submit" value="Suivant" style="margin-right: 80px;" class="form-control btn btn-primary">
			</div>
		</div>
	</div>

	

	
</form>
<br><br><br><br><br><br><br><br><br><br><br><br>

@endsection