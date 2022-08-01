
@extends("layouts.master")

@section('topbar')
    @include("Frontend.hometopbar")
@endsection

@section('navbar')
    @include("Frontend.homenavbar")
@endsection

@section('slider')
    @include("Frontend.homeslider")
@endsection

@section('content')
    @include("Content.decentemployment")
    @include("Content.whoweare")
    @include("Content.whatwedo")
    @include("Content.newdemand")
    @include("Content.clientlogo")
@endsection   
