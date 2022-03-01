@extends('site.layouts.basic')

@section('title', $title)

@section('content')

    <div class="page-content">
        <div class="page-title">
            <h1>Contact us</h1>
        </div>

        <div class="page-info">
            <div class="default-contact">
                @component('site.layouts._components.form_contact')
                @endcomponent
            </div>
        </div>
    </div>

    <div class="foot">
        <div class="social-media">
            <h2>Social media</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="contact-area">
            <h2>Contact</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>managementApp@domain.com</span>
        </div>
        <div class="location">
            <h2>Localization</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>

@endsection