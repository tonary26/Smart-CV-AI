<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'number',
        'email',
        'education',
        'job',
        'experience',
        'stack',
        'language',
        'hobby'
    ];

    protected $casts = [
        'stack' => 'array',
        'language' => 'array',
        'hobby' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
