<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function Post()
    {
        return $this->hasMany(Post::class);
    }
}
