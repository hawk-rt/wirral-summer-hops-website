---
title: Redirecting...
description: Redirecting to our ticket booking page.
url: https://www.trybooking.com/uk/events/landing/49231?embed
---
@extends('_layouts/main')

@section('body')
    <div class="container py-3">
        <div class="row text-center">
            <h1>Your are being redirected to our ticket booking page... <span id="countdown">5</span></h1>
            <p class="lead"><a href="{{ $page->url }}">Click here</a> if you are not redirected automatically.</p>
        </div>
    </div>
@endsection