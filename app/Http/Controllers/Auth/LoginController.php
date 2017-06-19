<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginWithFacebook(Request $request)
    {
        // get data from request
        $code = $request->get('code');

        // get fb service
        $fb = \OAuth::consumer('Facebook');

        // check if code is valid

        // if code is provided get user data and sign in
        if ( ! is_null($code))
        {
            // This was a callback request from facebook, get the token
            $token = $fb->requestAccessToken($code);

            // Send a request with it
            $result = json_decode($fb->request('/me'), true);

            $this->loginBySocial($result['email'], $result['name'], $result['id'], 'facebook');

            $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
            echo $message. "<br/>";

            //Var_dump
            //display whole array.
            dd($result);
        }
        // if not ask for permission first
        else
        {
            // get fb authorization
            $url = $fb->getAuthorizationUri();

            // return to facebook login url
            return redirect((string)$url);
        }
    }

    public function loginWithGoogle(Request $request)
    {
        // get data from request
        $code = $request->get('code');

        // get google service
        $googleService = \OAuth::consumer('Google');

        // check if code is valid

        // if code is provided get user data and sign in
        if ( ! is_null($code))
        {
            // This was a callback request from google, get the token
            $token = $googleService->requestAccessToken($code);

            // Send a request with it
            $result = json_decode($googleService->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);

            $this->loginBySocial($result['email'], $result['name'], $result['id'], 'google');

            $message = 'Your unique Google user id is: ' . $result['id'] . ' and your name is ' . $result['name'];

            echo $message. "<br/>";

            //Var_dump
            //display whole array.
            dd($result);
        }
        // if not ask for permission first
        else
        {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();

            // return to google login url
            return redirect((string)$url);
        }
    }

    public function loginBySocial($email, $name, $providerId, $providerName)
    {
        $user = User::firstOrCreate(
            ['email' => $email],
            ['name' => $name]
        );

        $user->socialProviders()->create(
            ['provider_id' => $providerId, 'provider' => $providerName]
        );

        if ($user) {
            auth()->login($user);
            return redirect($this->redirectTo);
        }

        return redirect('/');
    }
}
