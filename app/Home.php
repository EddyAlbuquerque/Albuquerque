<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

	public $table = 'home';

    public function getDados()
    {
    	return self::select('titulo', 'conteudo')->get();
    }
}
