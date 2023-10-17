<!-- Modal -->
<div class="ms_register_popup">
    <div id="myModal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog register_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button id="close_modal_register" type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="{{ asset('images/Logo Modaux Auth/logo-modaux-auth.png') }}" width="368" alt="" class="img-fluid" />
                    </div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                    
                        <div class="ms_register_form">
                            <h2>Créer un compte</h2>
                            <div class="form-group">
                                <input type="text" placeholder="Nom" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                <span class="form_icon">
                                    <i class="fa_icon form-user" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <span class="form_icon">
                                    <i class="fa_icon form-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Mot de Passe" class="form-control" name="password">
                                <span class="form_icon">
                                    <i class="fa_icon form-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirmation du Mot de Passe" class="form-control" name="confirm_password">
                                <span class="form_icon">
                                    <i class=" fa_icon form-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <button type="submit" class="save_btn">Créer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>