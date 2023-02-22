<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title', 'content', 'slug', 'status'
    // ];

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
