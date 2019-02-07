
@extends('layouts.app')

@section('footer')
@section('content')

	

	<div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-12 col-md-offset">
                <div class="panel panel-default">
                		
                    <div class="panel-body">
                        <table class="table" id="datatable">
                            <thead>
                            <tr>
								<th>N° Apogee</th>
								<th>Nom</th>
								<th>Prénom</th>
								<th>date de creation</th>
								<th>Actions</th>
							</tr>
						</tr>	
                            </thead>
                            <tbody>                         
		                  @foreach($insc as $ins)
						<tr>
						<td>{{ $ins->napogee }}</td>
						<td>{{ $ins->nom }}</td>
						<td>{{ $ins->prenom }}</td>
						<td>{{ $ins->created_at }}</td>
						<td>
							<form action="{{ url('inscriptions/'.$ins->id) }}" method="post">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<a href="{{ url('inscriptions/'.$ins->id) }}" class="btn btn-primary">Imprimer</a>
							<a href="{{ url('inscriptions/'.$ins->id.'/edit') }}" class="btn btn-success">editer</a>
							<button type="submit" class="btn btn-danger" onclick="return confirm('voulez vous vraiment supprimer ce formulaire ?');" role="button">Supprimer</button>

							<a href="{{ url('reponse/'.$ins->id) }}" class="btn btn-light">Voir les reponses</a>
							</form>
							
							@endforeach
						</td>
					</tr>
						
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br><br><br><br><br><br><br><br><br><br>

@endsection

@section('javascripts')





