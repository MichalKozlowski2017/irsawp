@extends('layouts.app')
@section('content')
@include('partials.banner')
@include('partials.onas')
@include('partials.oferta')
{!! get_the_posts_navigation() !!}
@endsection
