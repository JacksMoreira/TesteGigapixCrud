<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome','telefone','sexo','datadenascimento','id'];
}
