<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesTypesModel extends Model
{
    protected $table = 'exchanges_types';
    protected $fillable = ['types'];
    public $timestamps = false;

    function exchangesTypes()
    {
        return $this->hasMany(ExchangesModel::class, 'id_exchangesTypes');
    }
}
