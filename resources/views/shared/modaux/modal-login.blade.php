<!----Login Popup Start---->
<div class="ms_register_popup">
    <div id="myModal1" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog login_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button id="close_modal_login" type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="{{ asset('images/Logo Modaux Auth/logo-modaux-auth.png') }}" width="368" alt="" class="img-fluid" />
                    </div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="ms_register_form">
                            <h2>Se connecter</h2>
                            <div class="form-group">
                                <input type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                @if(!empty($messageErrorLogin))
                                    <span class="text-danger">{{ $messageErrorLogin }}</span>
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
                            <button type="submit" class="save_btn">Se connecter</button>
                            <!-- <a href="profile.html" class="ms_btn" target="_blank">login now</a> -->
                            <div class="popup_forgot">
                                <a href="#">Mot de Passe oublié ?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
