<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Html\FormBuilder;

class PrintController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	
		$data = [
			'place'			=> app('App\Repositories\Place\PlaceRepository')->getAll()->lists('name_place', 'id'),
		];
		return view('contents.print.step-1', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		// validation
		$v = \Validator::make($request->all(), [
	        	'url_file' 		=> 'required',
		//	'place_id'		=> 'required|numeric',
		//	'type_print'		=> 'required|numeric'
	    	]);

	    	if ( $v->fails() ) {
	        	return redirect()->back()->withErrors($v->errors())->withInput();;
	    	}

		// section untuk file
		if( $request->hasFile('url_file') ) {
			$file_extensi = $request->file('url_file')->getClientOriginalExtension();

			$request->file('url_file')->move(base_path() . '/public/file', "hello_file." . $file_extensi);

			return "hello file ".$file_extensi;
		}

		//app('App\Repositories\PrintList\PrintListRepository')->savePrintList($request->all());

		return $request->all();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
