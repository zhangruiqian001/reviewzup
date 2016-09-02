@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="jumbotron rz_mask">
        <div class="container" style="text-align: center;">
            <h1 style="color: white;font-size: 4rem;margin-top: 60px;">BEST HEADLINE IN THE WORLD</h1>
            <p style="color: white;">We are visual creatures. Our system automatically pulls featured images and embeds them into each tweet. No fuss. Just beautiful media in each and every tweet.</p>
            <p><button type="button" class="btn btn-primary btn-lg">Large button</button></p>
        </div>
    </div>
    <section class="container content-section">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="section-pad">HOW IT WORKS</h2>
                <p style="padding-right: 40px;">
                    We are visual creatures. Our system automatically pulls featured images and embeds them into each tweet. No fuss. Just beautiful media in each and every tweet.
                    We are visual creatures. Our system automatically pulls featured images and embeds them into each tweet. No fuss. Just beautiful media in each and every tweet.
                    We are visual creatures. Our system automatically pulls featured images and embeds them into each tweet. No fuss. Just beautiful media in each and every tweet.
                    We are visual creatures. Our system automatically pulls featured images and embeds them into each tweet. No fuss. Just beautiful media in each and every tweet.
                </p>
                <p><button type="button" class="btn btn-primary">LEARN MORE</button></p>
            </div>
            <div class="col-lg-3">
                <h2 class="section-pad">NEW</h2>
                <img src="/images/home/1-media.jpg" class="circle-image">
            </div>
            <div class="col-lg-3">
                <h2 class="section-pad">OLD</h2>
                <img src="/images/home/1-media.jpg" class="circle-image">
            </div>
        </div>
    </section>
    <section class="container content-section">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="section-pad">HOW IT WORKS</h2>
                <p style="padding-right: 40px;">
                    We are visual creatures. Our system automatically pulls featured images and embeds them into each tweet. No fuss. Just beautiful media in each and every tweet.
                    We are visual creatures. Our system automatically pulls featured images and embeds them into each tweet. No fuss. Just beautiful media in each and every tweet.
                    We are visual creatures. Our system automatically pulls featured images and embeds them into each tweet. No fuss. Just beautiful media in each and every tweet.
                    We are visual creatures. Our system automatically pulls featured images and embeds them into each tweet. No fuss. Just beautiful media in each and every tweet.
                </p>
                <p><button type="button" class="btn btn-primary">LEARN MORE</button></p>
            </div>
            <div class="col-lg-3">
                <h2 class="section-pad">NEW</h2>
                <img src="/images/home/1-media.jpg" class="circle-image">
            </div>
            <div class="col-lg-3">
                <h2 class="section-pad">OLD</h2>
                <img src="/images/home/1-media.jpg" class="circle-image">
            </div>
        </div>
    </section>
@endsection
