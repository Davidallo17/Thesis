@extends('layout.homepage')

@section('home')
<div class="content-main-header">

    <h2>Indoor Air Quality Dashboard</h2>
</div>
<div class="content-main-body">
    <div class="row">
        <div class="col content-main-parameter col-sm-4"> Carbon Monoxide:</div>
        <div class="col content-col content-main-var-bad col-sm-4"> 20</div>
    </div>
    <div class="row">
        <div class="col content-main-parameter col-sm-4"> Particulate Matter 2.5:</div>
        <div class="col content-col content-main-var-good col-sm-4"> 20</div>
    </div>
    <div class="row">
        <div class="col content-main-parameter col-sm-4"> Particulate Matter 10:</div>
        <div class="col content-col content-main-var-good col-sm-4"> 20</div>
    </div>
    <div class="row">
        <div class="col content-main-parameter col-sm-4"> Indoor Air Quality</div>
        <div class="col content-col content-main-var-good col-sm-4"> 20</div>
    </div>
    <div class="row">
        <div class="col content-main-parameter col-sm-4"> Temperature</div>
        <div class="col content-col content-main-var-good col-sm-4"> 20</div>
    </div>
    <div class="row">
        <div class="col content-main-parameter col-sm-4"> Humidity</div>
        <div class="col content-col content-main-var-good col-sm-4"> 20</div>
    </div>
    <div class="row">
        <div class="col  col-sm-5"> <a href="" class="btn btn-red content-main-button">Generate PDF</a></div>
        <div class="col  col-sm-5 "> <a href="" class="btn btn-red content-main-button">Send SMS</a></div>
    </div>
</div>
@endsection
      
