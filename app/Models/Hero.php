<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heroes';

    protected $fillable = [
        'badge',
        'title',
        'description',
        'image',
        'button_text_one',
        'button_text_two',
        'button_link_one',
        'button_link_two',
    ];
}
