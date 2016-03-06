<?php namespace App\Http\Controllers;

use App\Repositories\PrintList\PrintListRepository;

class HomeController extends Controller {

	protected $printList, $user_id;
	
	public function __construct(PrintListRepository $printList)
	{
		$this->middleware('auth');
		$this->printList	= $printList;
		$this->user_id 		= \Auth::user()->id;
	}

	public function index()
	{
		$data = [
			'printList'		=> $this->printList->getAilListMyPrint($this->user_id),
			'user_data'		=> \App\User::find($this->user_id),
		];
		return view('contents.dashboard.index', $data);
	}

	public function getRegister()
	{
		return "hello world";
	}

}
