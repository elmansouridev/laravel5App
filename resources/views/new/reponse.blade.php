@extends('layouts.app')


@section('content')

@foreach($qs as $q)

<table style="width: 100%;">
    <tr>
        <td><span style="font-size: 90px;margin-left: 30px;"></span></td>
        <td><span style="font-size: 90px;margin-left: 200px;">{{ $q->inscription->nom }}</span>
            <span style="font-size: 90px;margin-left: 20px;">{{ $q->inscription->prenom }}</span>
        </td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td><span style="font-size: 50px;margin-left: 10px;">{{ $q->Question1 }}</span></td>
        <td><span style="font-size: 50px;float: right;margin-right: 20px;">:السؤال الأول</span> </td>
    </tr>
    <tr>
        <td></td>
        <td><span style="font-size: 50px;margin-left: 10px;">{{ $q->Question2 }}</span></td>
        <td><span style="font-size: 50px;float: right;margin-right: 20px;">:السؤال الثاني</span> </td>
    </tr>
    <tr>
        <td></td>
        <td><span style="font-size: 50px;margin-left: 10px;">{{ $q->Question3 }}</span></td>
        <td><span style="font-size: 50px;float: right;margin-right: 20px;">:السؤال الثالث</span> </td>
    </tr>
</table>
<br><br><br><br>


    <div class="container" style="margin-bottom: 40px;">
        <div class="row">
            <div class="col-lg-12"></div>
        </div>
    </div>


@endforeach

@endsection