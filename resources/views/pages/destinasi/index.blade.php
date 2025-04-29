@extends('layout.app')

@section('title', 'Destinasi Pandawa Trip')

@section('content')
@include('components.searchbarDestinasi')
@include('pages.destinasi.cards')
@include('components.destinasiModal')

@endsection