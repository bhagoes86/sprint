<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the

	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
	 * this code below was made by 
	 * Joko Irianto
	 */
	
	public function getLogin(Request $request)
	{
		// notification that account was regist 
		if (\Session::has('message')) {
		    \Session::forget('message');
		    \Alert::success('Akun anda telah terdaftar, Silahkan login' , 'Selamat!')->persistent("close");
		}

		return view('auth.login');
	}

	public function getRegister()
	{	
		return view('auth.register');
	}


	public function postRegister(Request $request)
	{	  
	    $v = Validator::make($request->all(), [
	        'name' 		=> 'required|max:255',
			'email' 	=> 'required|email|max:255|unique:users',
			'password' 	=> 'required|confirmed|min:6',
			'no_hp' 	=> 'required|unique:users|digits_between:8,25|numeric'
	    ]);

	    if ( $v->fails() ) {
	        return redirect()->back()->withErrors($v->errors())->withInput();;
	    }

	    // calling method saving data 
	    $this->create($request->all());

	    \Session::flash('message', 'Success');

		return redirect('auth/login');
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' 		=> $data['name'],
			'email' 	=> $data['email'],
			'password' 	=> bcrypt($data['password']),
			'no_hp' 	=> $data['no_hp'],
		]);
	}

}
