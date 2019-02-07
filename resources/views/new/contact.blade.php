@extends('layouts.app')



@section('content')


        <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-12 col-md-offset">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <table class="table" id="datatable" >
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Admin</th>
                                <th>Action</th>
                            </tr>   
                            </thead>
                            <tbody>                         
                          @foreach($insc as $ins)
                    <tr>
                        <td>{{ $ins->name }}</td>
                        <td>{{ $ins->email }}</td>

                        <td>
                            <input id="chckbox" type="checkbox" name="is_admin" value="{{ $ins->is_admin }}" {{$ins->is_admin?'checked="checked"':''}} >
                        </td>
                        <td>
                                    <a id="send" href="{{ url('admin/'.$ins->id.'/edit') }}" class="remove-check">{{$ins->is_admin?'':'se rendre admin'}}</a>
                                    <a id="send" href="{{ url('admin/'.$ins->id.'/editer') }}" class="remove-check">{{$ins->is_admin?'enlever':''}}</a>

                        </td>
                    </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection

