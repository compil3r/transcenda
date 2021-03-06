<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historias extends Model
{
    protected $table = 'historias';
  
    protected $rules = [
    'idUser' => 'unique:historia'
    ];
    
    public function autor()
    {
    	return $this->belongsTo('App\User', 'idUser');
    }

    public function doacoes() {
    	return $this->hasMany('App\Doacoes', 'idHistoria');
    }
    
    public function saques() {
        return $this->hasMany('App\Saques', 'idHistoria');
    }
    
    public function comentarios() {
    	return $this->hasMany('App\Comentarios', 'idHistoria', 'id');
    }

}
 