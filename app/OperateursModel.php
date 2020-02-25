<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperateursModel extends Model
{
    protected $table = 'operateurs';
    protected $fillable = ['nom'];
    public $timestamps = false;

    function exchangesOperateurs()
    {
        return $this->hasMany(ExchangesModel::class, 'id_operateur');
    }
}
