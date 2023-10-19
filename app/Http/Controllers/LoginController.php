<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Managers\UserManager;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    public function login(Request $request)
    {
        try {

            //Validations
            $validateUser = Validator::make($request->all(),
            [
                'email' => 'required|max:255',
                'password' => 'required|max:255|min:8'
            ]);

            //Vérification des validations
            if($validateUser->fails()){

                return redirect(RouteServiceProvider::HOME)
                ->with('error', $validateUser->errors());
                
            }

            //Recherche d'un email d'utilisateur (envoyé dans la requête) dans la base de données
            $user = User::where('email', $request['email'])->first();

            //Si un utilisateur existe pour cet email
            if ($user) {

                //Déclaration d'un objet composé des informations de connexions (envoyées dans la requête)
                $requestCredentials = [
                    'email' => $request['email'],
                    'password' => $request['password']
                ];

                //Si l'utilisateur n'a pas fournis les bonnes informations de connexion
                if(!Auth::attempt($requestCredentials)){

                    return redirect(RouteServiceProvider::HOME)
                    ->with('error', 'Email ou Mot de Passe incorrect');
                }

                $request->session()->put('UserSession', true);
                $request->session()->put('UserId', $user['id']);
                $request->session()->put('UserName', $user['name']);
                $request->session()->put('UserEmail', $user['email']);
                $request->session()->put('UserToken', $user->createToken('NlrToken')->plainTextToken);

                return redirect(RouteServiceProvider::HOME)
                ->with('alert', 'success')
                ->with('alert-message', 'Vous êtes connecté');
            }
            else {

                return redirect(RouteServiceProvider::HOME)->with('error', 'Email ou Mot de Passe incorrect');
            }

        }
        catch (\Throwable $th) {

            //Message JSON retourné
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function logout()
    {
        Auth::logout();

        Session::forget('UserSession');
        Session::forget('UserName');

        return redirect(RouteServiceProvider::HOME)->with('info', 'Vous êtes déconnecté');
    }
}
