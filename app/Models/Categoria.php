<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    public function postagem(): HasOne
    {
        return $this->hasOne(Postagem::class, 'id', 'categoria_id');
    }

}
