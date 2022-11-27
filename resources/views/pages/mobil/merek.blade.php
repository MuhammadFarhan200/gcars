@extends('layouts.main')

@section('page-title', 'Merek')

@section('hero-area')
  <section class="section section-bg" id="call-to-action" style="background-image: url({{ asset('frontend/images/banner-image-1-1920x500.jpg') }})">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content pt-5">
            <h2 class="text-white">Pilih Merek</h2>
            <p>Pilih salah satu merek dibawah ini untuk menemukan mobil yang anda cari.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('main-content')
  <section class="section" id="trainers">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-start align-items-center mt-5">
        @foreach ($mereks as $merek)
          <a href="/mobil?merek={{ $merek->slug }}" class="translate-effect">
            <div class="trainer-item mx-2 px-4 mb-3">
              <div class="down-content">
                {{ $merek->nama }}
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </section>
@endsection
