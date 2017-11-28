<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    protected $table= 'user_details';
    protected $fillable = [
	'user_id', 'full_name','photo','place_of_birth','last_education','skills','address','phone_number','file_cv','other_information',
	];
}
