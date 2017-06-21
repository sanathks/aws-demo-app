<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'image'];

    public function getOriginalImageAttribute()
    {
        return Storage::disk('s3_original')->url($this->image);
    }

    public function getThumbAttribute()
    {
        if (Storage::disk('s3_thumbs')->exists($this->image)) {
            return Storage::disk('s3_thumbs')->url($this->image);
        }
        return "";
    }
}
