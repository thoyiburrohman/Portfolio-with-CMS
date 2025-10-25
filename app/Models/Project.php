<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'tech' => 'array',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
