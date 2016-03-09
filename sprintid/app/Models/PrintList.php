<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrintList extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'prints';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'name_file', 'url_file', 'place_id', 'type_print', 'text_note', 'code'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function place()
	{
		return $this->hasOne('App\Models\Place', 'id', 'place_id');
	}

}
