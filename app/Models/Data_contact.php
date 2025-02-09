<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data_contact extends Model
{
    protected $table = 'contacts_table';

    protected $fillable = [ // Campos que se pueden asignar masivamente
        'name',
        'lastname',
        'email',
        'telephone',
        'message',
    ];

    protected $hidden = [
        'name',
        'lastname',
        'email',
        'telephone',
        'message',
    ];
}
