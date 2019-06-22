@extends('layouts.app')
@section('content')
    @foreach($data as $da)
    <h5 class="card-title">Quection number {!! $da->id !!}</h5>
    <p class="card-text"> {!!$da->userID!!}</p>
    <div class="line-ellipse light"><span>{!!$da->answer!!}</span></div>
    <p class="card-text-small">Created: {!! $da->created_at !!}<br></p>
    <p class="card-text-small">card-catagary<br></p>
    <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(15,103,122);">correct</button></div>
    <div class="form-group"><button class="btn btn-danger" type="submit" style="background-color: red;">Incorrect</button></div>
    @endforeach
@endsection
