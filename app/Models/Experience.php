<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';

    protected $fillable = [
        'designation',
        'company',
        'duration',
    ];

    public function experienceSetion()
    {
        return $this->belongsTo(ExperienceSetion::class);
    }
}
