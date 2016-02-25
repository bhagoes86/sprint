<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;
use Validator;

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

	// custom method 
	/*
	Created by Joko Irianto
	*/
	public function getRegister()
	{
		return view('auth.register');
	}

	// public function postRegister(Request $request)
	// {
	// 	// return 'hello jo';
	// 	$validator = $this->registrar->validator($request->all());

	// 	if ($validator->fails())
	// 	{
	// 		$this->throwValidationException(
	// 			$request, $validator
	// 		);
	// 	}

	// 	$this->auth->login($this->registrar->create($request->all()));

	// 	return redirect($this->redirectPath());
	// }

	public function postRegister(Request $request)
	{
		$validator = Validator::make(
		    ['name' => 'Dayle'],
		    ['name' => ['required', 'min:5']]
		);
		// $validator = Validator::make(
		//     $request, ['name' => 'required|min:5']
		// );

		if ($validator->fails())
		{
		    // The given data did not pass validation
		    return "salah";
		}
		// $validator = Validator::make(Input::all(), 
		// 		['name' => 'required|min:5']
		// 	);

	//    // Create a new validator instance.
	 //    $validator = $this->registrar->validator(
		//     ['name' => 'required|min:5']
	 //    );

		// if ($validator->fails())
		// {
		// 	$this->throwValidationException(
		// 		$request, $validator
		// 	);
		// }

	 // //    $validator = Validator::make(
		// //     ['name' => 'required|min:5']
		// // );

		return var_dump($request->all());
	}

}
