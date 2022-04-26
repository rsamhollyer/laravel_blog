<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Facades\Purifier;

class Post extends Model {
    use HasFactory;

    protected $guarded = [];

    public function setBodyAttribute($value) {
        $this->attributes['body'] = Purifier::clean($value);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
