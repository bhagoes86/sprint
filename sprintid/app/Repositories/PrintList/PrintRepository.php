<?php


namespace App\Repositories\PrintList;

use DB;
use App\Models\PrintList;
use App\Models\Place;
use App\Repositories\Base\BaseRepository;

class PrintListRepository extends BaseRepository
{
	public function __construct(PrintList $printList)
	{
        	$this->model = $printList;
    	}

	public function savePrintList($data, $user_id, $code, $url_file) {
		
		// generate code
		$data['code'] 			= $code;
		$data['url_file'] 		= $url_file;

		return $this->model->create([
			'user_id'		=> $user_id,
			'url_file'		=> $data['url_file'],
			'type_print'		=> $data['type_print'],
			'place_id'		=> $data['place_id'],
			'text_note'		=> $data['text_note'],
			'code'			=> $data['code']
		]);
	}

	public function _get_code()
	{
	
		$code = DB::select('call get_code()');
		
		if(isset($code[0])) return $code[0]->random_code;
		else return 0;
	}	
}

