@extends('layout')

@section('title', 'Accueil')

@section('content')

<!-- Nouveaux Projets -->
@include('sections.news')

@if (Session::get('UserSession') == true)

    <!-- Récemment Ecoutées -->
    @include('sections.recently')

@endif

<!-- Top 15 -->
@include('sections.top15')

<!-- Artists -->
@include('sections.artists')

<!-- Banniere NLR -->
@include('sections.nlrBan')

<!-- Albums -->
@include('sections.albums')

<!-- Genres -->
@include('sections.genders')

<!-- Banniere NLR -->
@include('sections.nlrBan')

<!----Main div close---->
@endsection