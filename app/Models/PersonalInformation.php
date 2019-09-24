<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    protected $casts = [
    'skills' => 'json',
    'evaluation_content' => 'json',
];
    //
}
