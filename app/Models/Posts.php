<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model {
    use HasFactory;

    protected $table="posts";
    protected $primaryKey="id";

    protected $fillable = [
        'titulo',
        'slug',
        'descripcion',
        'foto',
        'created_at',
        'updated_at'
    ];
}
