<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

//    public function posts(): BelongsTo
//    {
//        return $this->hasMany(Post::class);
//    }

    protected $fillable = [
        'title', 'description', 'image', 'price', 'link', 'userID'
    ];
}
