@extends('layout')

@section('title', 'Home')

@section('content')

<!-- Nouveaux Projets Musique -->
@include('sections.TypeArtiste.news', ['UserName' => Session::get('UserName')])

<!-- Services -->
@include('sections.services')

@if (Session::get('UserSession') == true)

    <!-- Récemment Ecoutées -->
    @include('sections.recently')

@endif

<!-- ------------------------------ DELIMITER ------------------------------ -->
<!-- types-of-artists -->
@include('sections.types-of-artists')
<!-- ----------------------------------------------------------------------- -->

<!-- Top 15 Musique -->
@include('sections.TypeArtiste.top15')

<!-- Artists Musique -->
@include('sections.TypeArtiste.artists')

<!-- Albums Musique -->
@include('sections.TypeArtiste.albums')

<!-- ------------------------------ DELIMITER ------------------------------ -->
<!-- types-of-beatmakers -->
@include('sections.types-of-beatmakers')
<!-- ----------------------------------------------------------------------- -->

<!-- Top 15 Pack -->
@include('sections.TypeBeatMaker.top15')

<!-- Artists Musique -->
@include('sections.TypeBeatMaker.beatmakers')

<!-- Albums Musique -->
@include('sections.TypeBeatMaker.packs')

<!-- ------------------------------ DELIMITER ------------------------------ -->
<!-- types-of-beatmakers -->
@include('sections.types-of-logo')
<!-- ----------------------------------------------------------------------- -->

<!----Main div close---->
@endsection