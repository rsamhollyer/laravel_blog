<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;

class Post extends Model {
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'body' => CleanHtml::class,
    ];

    protected $with = ['category', 'author'];


    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
