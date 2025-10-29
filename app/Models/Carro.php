<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carro';
	
	

	protected $fillable = [
		'nome',
		'modelo',
		'data_fabri',
		'endereco',
        'kilometragem',
        'preco',
		'imagem'
	
	];
}
