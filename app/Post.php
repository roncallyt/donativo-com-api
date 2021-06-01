<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'categoria_id','title', 'image', 'status','description',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
