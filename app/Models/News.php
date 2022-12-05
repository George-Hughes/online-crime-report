<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'title',
        'description'
    ];

    // Relationship to User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}