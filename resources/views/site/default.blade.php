@extends('site.layouts.basic')

@section('title', 'Home')

@section('content')

    <div class="high-content">

        <div class="left">
            <div class="infos">
                <h1>Management App</h1>
                <p>Software for business management, ideal for your company!<p>
                <div class="call">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="white-text">Complete and uncomplicated management</span>
                </div>
                <div class="call">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="white-text">Your company in the cloud</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="right">
            <div class="contact">
                <h1>Contact</h1>
                <br>
                @component('site.layouts._components.form_contact', ['contact_reasons' => $contact_reasons])
                @endcomponent
            </div>
        </div>
    </div>

@endsection