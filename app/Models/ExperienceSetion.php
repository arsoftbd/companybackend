<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExperienceSetion extends Model
{
    protected $table = 'experience_setions';

    protected $fillable = [
        'badge',
        'title',
        'description',
        'image',
        'quote',
        'designation',
        'button_text',
        'button_link',
    ];

    public function experience(): HasMany
    {
        return $this->hasMany(Experience::class);
    }

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
}
