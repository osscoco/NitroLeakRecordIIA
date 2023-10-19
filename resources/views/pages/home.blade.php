@extends('layout')

@section('title', 'Home')

@section('content')

<div class="mycont">

<!-- Nouveaux Projets Musique -->
@include('sections.TypeArtiste.news')

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

<!-- Artistes Musique -->
@include('sections.TypeArtiste.artists')

<!-- Albums Musique -->
@include('sections.TypeArtiste.albums')

<!-- ------------------------------ DELIMITER ------------------------------ -->
<!-- types-of-beatmakers -->
@include('sections.types-of-beatmakers')
<!-- ----------------------------------------------------------------------- -->

<!-- Top 15 Prod -->
@include('sections.TypeBeatMaker.top15')

<!-- BeatMakers Prod -->
@include('sections.TypeBeatMaker.beatmakers')

<!-- Pack Prod -->
@include('sections.TypeBeatMaker.packs')

<!-- ------------------------------ DELIMITER ------------------------------ -->
<!-- types-of-beatmakers -->
@include('sections.types-of-logo')
<!-- ----------------------------------------------------------------------- -->


</div>

<!----Main div close---->
@endsection