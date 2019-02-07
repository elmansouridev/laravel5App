@extends('layouts.app')


@section('content')


<form class="form-horizental" style="border: 1px solid #CCC;" action="{{ url('admin/'.$ins->id) }}" method="post">
<input type="hidden" name="_method" value="PUT">
{{ csrf_field() }}

        <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-12 col-md-offset">
                            <span>
                                 vous arrivez a rendre l'utilisateur <span style="font-size: 20px;">{{$ins->name}}</span> comme admin ?
                            </span>
            </div>  
            <div class="col-md-12 col-md-offset" style="height: 10px;"></div>
            <div class="col-md-12 col-md-offset">
            <a id="send" style="width: 10%;" href="{{ url('admin') }}" class="form-control btn btn-primary">Retour</a>
                <input type="submit" value="Oui" style="width: 10%;margin-left: 70px;" class="form-control btn btn-primary">
                
            </div>   
            <div class="col-md-12 col-md-offset">
                <input type="hidden" name="is_admin" value="{{$ins->is_admin}}">
            </div>               

            
        </div>
    </div>

</form>

    <br><br><br><br><br><br><br>

@endsection



                        