<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Html\FormBuilder;
use App\Repositories\PrintList\PrintListRepository;

class PrintController extends Controller {

	protected $user_id;
	protected $printList;
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(PrintListRepository $printList)
	{
		$this->middleware('auth');
		$this->printList	= $printList;	
		$this->user_id 		= \Auth::user()->id;
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
	        	'url_file' 		=> 'required|max:5000',
			//    	'url_file' 		=> 'required|max:5000|mimes:doc,docx,pdf,xls,xlsx,ods,odt',
			'place_id'		=> 'required|numeric',
			'type_print'		=> 'required|numeric', 
	    	]);

	    	if ( $v->fails() ) {
	        	return redirect()->back()->withErrors($v->errors())->withInput();;
	    	}
		
		// generate code print
		$code = app('App\Repositories\PrintList\PrintListRepository')->_get_code();

		$file_name = "";
	
		// section untuk file
		if( $request->hasFile('url_file') ) {
			$file_extensi 	= $request->file('url_file')->getClientOriginalExtension();
			$file_name 	= $code . "." . $file_extensi;

			if ( $file_extensi == "doc" || $file_extensi == "docx" || $file_extensi == "pdf" ||  $file_extensi == "xls" || $file_extensi == "xlsx" || $file_extensi == "ods" || $file_extensi == "odt") {
				$request->file('url_file')->move(base_path() . '/public/file', $code . "." . $file_extensi);
			} else {
				return redirect()->back()->withErrors('Sorry the file must be with extension doc, docx or pdf');
			}

		} else {
	        	return redirect()->back()->withErrors($v->errors())->withInput();
		}

		// saving data
		app('App\Repositories\PrintList\PrintListRepository')->savePrintList($request->all(), $this->user_id, $code, $file_name);
		return redirect('konfirm/' . $code);

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

	public function confirm($code)
	{	
		$data['print'] = $this->printList->getModel()->where('code', $code)->where('user_id', $this->user_id)->first();
		if( ! $data['print'] ) {
			return redirect('print/');
		}
		return view('contents.print.step-2', $data);
	}

	public function ambil($code)
	{
		$data = [
			'print'		=> $this->printList->getModel()->where('code', $code)->where('user_id', $this->user_id)->first(),
			
		];
		return view('contents.print.step-3', $data);
	}
	
}
