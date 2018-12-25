<?php

namespace Yevhenii\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['email', 'message', 'name'];

	public static function form(  ) {
		return view('contact::contact-form');
    }
}
