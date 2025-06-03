@extends('layout.app')

@section('title', 'Pandawa Trip')

@section('content')
    @include('pages.beranda.hero')
    @include('pages.beranda.pelayanan')
    @include('pages.beranda.paketBeranda', ['pakets' => $pakets])
    @include('pages.beranda.destinasiBeranda', ['destinasis' => $destinasis])
@endsection
