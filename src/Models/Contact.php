<?php

namespace Yevhenii\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['email', 'message', 'name'];
}
