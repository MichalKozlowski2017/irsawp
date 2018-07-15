@extends('layouts.app')
@section('content')
@include('partials.banner')
@include('partials.onas')
@include('partials.oferta')
@include('partials.cennik')
@include('partials.promo')
@include('partials.contact')
{!! get_the_posts_navigation() !!}
@endsection
