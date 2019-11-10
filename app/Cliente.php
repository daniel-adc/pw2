<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public function usuario()
    {
        return $this->hasOne('App\User');
    }

    public function estabelecimentos()
    {
        return $this->hasMany('App\Estabelecimento');
    }

    public function atendimentos()
    {
        return $this->hasMany('App\Atendimento');
    }

    public function agendamentos()
    {
        return $this->hasMany('App\Agendamento');
    }
}   
