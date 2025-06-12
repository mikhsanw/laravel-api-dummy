<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Post extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'image',
        'title',
        'content',
    ];

    protected $dates = ['deleted_at'];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/' . $image),
        );
    }
}
