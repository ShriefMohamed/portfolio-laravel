@extends('layouts.app')

@section('content')
    <div id="portfolio-main">
        @include('components.index.hero')

        @include('components.index.about')

        @include('components.index.services')

        @include('components.index.projects')

        @include('components.index.experience')

        @include('components.index.contact')
    </div>

@endsection
