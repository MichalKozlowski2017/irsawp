@extends('layouts.app')
@section('content')
@include('partials.banner')
@include('partials.onas') 
{!! get_the_posts_navigation() !!}
@endsection
