<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //
    public function agendamentos()
    {
        return $this->belongsToMany('App\Agendamento');
    }
}
