@if (Session::get('alert') == 'success')

<div class="alert alert-success alert-dismissible fade show" role="alert">

  <strong>{{ Session::get('alert-message') }}</strong>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif 

    

@if (Session::get('alert') == 'danger')

<div class="alert alert-danger alert-dismissible fade show" role="alert">

  <strong>{{ Session::get('alert-message') }}</strong>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif

     
@if (Session::get('alert') == 'warning')

<div class="alert alert-warning alert-dismissible fade show" role="alert">

  <strong>{{ Session::get('alert-message') }}</strong>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif

     

@if (Session::get('alert') == 'info')

<div class="alert alert-info alert-dismissible fade show" role="alert">

  <strong>{{ Session::get('alert-message') }}</strong>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif

    

@if ($errors->any())

<div class="alert alert-danger alert-dismissible fade show" role="alert">

  <strong>Vérifiez les erreurs dans le formulaire ...</strong>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif


@if (Session::has('error'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">

  <strong>Identifiant ou Mot de Passe incorrect ...</strong>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

@endif