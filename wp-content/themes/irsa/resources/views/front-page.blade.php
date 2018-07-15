@extends('layouts.app')
@section('content')
@include('partials.banner')
@include('partials.onas')
@include('partials.oferta')
@include('partials.cennik')
{!! get_the_posts_navigation() !!}
@endsection
