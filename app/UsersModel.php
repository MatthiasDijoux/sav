<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = 'clients';
    protected $fillable = ['nom','prenom','telephone','mail'];
    public $timestamps = false;

    function exchangesClients()
    {
        return $this->hasMany(ExchangesModel::class, 'id_clients');
    }
}
