<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'status',
        'author',
        'user_id',
    ];

    public function posts()
    {
        return $this->hasMany(BlogPost::class);
    }
}
