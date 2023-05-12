<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudInsert extends Model
{
	protected $table = 'patient_basiced';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id',
		'firstname',
		'lastname',
		'email',
		'middlename',
		'address',
		'birthday',
		'gender',
		'age',
		'course_year',
		'religion',
	];
}