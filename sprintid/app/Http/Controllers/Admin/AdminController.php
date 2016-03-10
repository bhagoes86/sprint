<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	public function index()
	{
    $data = [
      'sidebar'     => 'dashboard',
    ];
		return view('admin.index', $data);
	}

  public function getListPrint()
  {
    $data = [
      'sidebar'     => 'listToPrint',
    ];
    return view('admin.list_print', $data);
  }

}
