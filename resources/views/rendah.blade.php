@extends('layout/main')

@section('title', 'COVNET')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h5 class="text-center">Detail</h5>
            </div>
        </div>
    </div>

 <div class="card mb-3">
  <img src="assets/img/aceh.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Banda Aceh Darussalam</h5>
    <p class="card-text">Banda Aceh Darussalam adalah Provinsi yang paling sedikit kasus Covid-19</p>
  </div>
</div>     


<div class="container">
        <div class="row">
            <div class="col-10">
                <h5 class="text-center">Diagram </h5>
            </div>
        </div>
    </div>
<div class="card mb-3">
  <img src="assets/img/daceh.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Diagram Kasus Covid-19 di Aceh</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  </div>
</div>

<div class="card-footer">
      <small class="text-muted">Copyright © 2018 Concept. All rights reserved</small>
    </div>


    @endsection