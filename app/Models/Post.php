<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Facades\Purifier;

class Post extends Model {
    use HasFactory;

    public function setBodyAttribute($value) {
        $this->attributes['body'] = Purifier::clean($value);
    }
}
