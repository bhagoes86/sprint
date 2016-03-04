<?php


namespace App\Repositories\PrintList;

use App\Models\PrintList;
use App\Repositories\Base\BaseRepository;

class PrintListRepository extends BaseRepository
{
	public function __construct(PrintList $printList)
	{
        	$this->model = $printList;
    	}

	public function savePrintList($data) {
		
		// Available alpha caracters
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

		// generate a pin based on 2 * 7 digits + a random character
		$pin = mt_rand(1000000, 9999999)
		    . mt_rand(1000000, 9999999)
		    . $characters[rand(0, strlen($characters) - 1)];

		// shuffle the result
		$data['code'] = str_shuffle($pin);	

		return $this->model->create([
			'url_file'		=> $data['url_file'],
			'type_print'		=> $data['type_print'],
			'place_id'		=> $data['place_id'],
			'text_note'		=> $data['text_note'],
			'code'			=> $data['code']
		]);
	}

	
}

