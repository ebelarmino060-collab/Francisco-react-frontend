<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factorries\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Elequent\Relation\BelongsTo;

class Posts extends Model
{
    protected $fillable =[
        'post',
        'description',
        'status',
        'user_id'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
