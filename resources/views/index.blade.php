@extends('layout/main')

@section('title', 'COVNET')


@section('container')
<div class="card bg-dark text-white">
  <img src="assets/img/covid.jpg" class="card-img" alt="...">
  <div class="card-body">
    <h5 class="card-title">COVNET</h5>
    <p class="card-text">Menyediakan berita terbaru tentang Covid-19 di Indonesia, dan info tentang derektori test Covid-19</p>
  </div>
</div>
<div class="container mt-3">
        <div class="row">
            <div class="col-10">
                <h5 class="text-center">Berita Terbaru</h5>
        </div>
    </div>
</div>
<div class="card-deck">
  <div class="card">
    <img src="assets/img/vaksin.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Kapan Vaksin Ada</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    <a href="vaksin" class="btn btn-primary">Lihat Selengkapnya</a>
  </div>
  <div class="card">
    <img src="assets/img/monas.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Kasus Tertinggi</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    <a href="tinggi" class="btn btn-primary">Lihat Selengkapnya</a>
  </div>
  <div class="card">
    <img src="assets/img/aceh.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Kasus Terendah</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    <a href="rendah" class="btn btn-primary">Lihat Selengkapnya</a>
  </div>
</div>

<div class="container mt-3">
        <div class="row">
            <div class="col-10">
               <br><h5 class="text-center">Derektori yang menyediakan tempat test Covid-19</h5></br>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="assets/img/pulo.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RS Kartika Pulomas</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="pulomas" class="btn btn-primary">Lihat Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="assets/img/tebet.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Rumah Sakit Tebet</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-i</p>
            <a href="/tebet" class="btn btn-primary">Lihat Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="assets/img/fatmawati.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RSUP Fatmawati</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="/fatmawati" class="btn btn-primary">Lihat Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="assets/img/siloam.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Siloam Hospitals Asri</h5>
        <p class="card-text"> with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="/siloam" class="btn btn-primary">Lihat Selengkapnya</a>
      </div>
    </div>
  </div>
</div>
<div class="container mt-3">
        <div class="text-center">
            <div class="col-10">
            <a href="direktori" class="btn btn-primary">View More</a>
        </div>
    </div>
</div>
<div class="card-footer">
      <small class="text-muted">Copyright © 2018 Concept. All rights reserved</small>
    </div>
    @endsection