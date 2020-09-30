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
  <img src="assets/img/monas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jakarta</h5>
    <p class="card-text">Berdasarkan data kasus pasien covid-19 dari Kementerian Kesehatan RI hari ini 22 September 2020 sampai dengan pukul 12.00 WIB, total jumlah penambahan kasus Positif di DKI mencapai 1.236 orang, Sehingga akumulasi kasus positif di DKI Jakarta sampai hari ini sebanyak 64.554 kasus.Jumlah kasus sembuh sebanyak 843 orang sehingga akumulasi kasus sembuh di DKI sampai hari ini ada sebanyak 50.389 Orang..</p>
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
  <img src="assets/img/diagram.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kenaikan COvid-19 Di DKI Jakarta</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  </div>
</div>


<div class="card-footer">
      <small class="text-muted">Copyright © 2018 Concept. All rights reserved</small>
    </div>


    @endsection