<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostFile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type',
        'url',
        'description',
        'status',
        'post_id',
        'upload_by_id',
    ];
}
