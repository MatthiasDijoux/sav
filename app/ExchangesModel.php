<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesModel extends Model
{
    protected $table = 'exchanges';
    protected $fillable = ['commentaires','date_echange', 'id_exchangesTypes','id_clients','id_operateurs'];
    public $timestamps = false;

    function clients()
    {
        return $this->belongsTo(UsersModel::class, 'id_clients');
    }
    function operateurs(){
        return $this->belongsTo(OperateursModel::class, 'id_operateurs');
    }
    function exchangesTypes(){
        return $this->belongsTo(ExchangesTypesModel::class, 'id_exchangesTypes');
    }
}
