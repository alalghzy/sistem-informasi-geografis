<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $primaryKey = 'id_post';

    protected $guarded = [];

    protected $fillable = [
        'nama',
        'deskripsi',
        'latitude',
        'longitude',
    ];
}
