<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Comment extends Model
// {
//     use HasFactory;

//     protected $fillable = ['post_id', 'user_id', 'content'];

//     public function post()
//     {
//         return $this->belongsTo(post::class);
//     }

//     public function user()
//     {
//         return $this->belongsTo(User::class);
//     }
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'post_id'];

    // Relationship with PostModel
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    // Relationship with User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Likes
    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    // Relationship with Shares
    public function shares(): HasMany
    {
        return $this->hasMany(Share::class);
    }
}
