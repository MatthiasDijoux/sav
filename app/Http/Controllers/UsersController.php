<?php

namespace App\Http\Controllers;

use App\ExchangesModel;
use App\ExchangesTypesModel;
use App\Http\Resources\ExchangesResource;
use App\Http\Resources\UsersResource;
use App\OperateursModel;
use App\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * @param 
     */
    function index(){
        $users = UsersModel::all();
        $clients = new ResourceCollection($users);
        return view('clients.accueil', ['clients'=>$clients]);
    }
    function more($nom){
        $users = UsersModel::where('nom','=',$nom)->get();
        $clients = new ResourceCollection($users);
        return view('clients.more')->with('users',$users);
    }
    function get(){
        $clients = UsersModel::all();
        $operateurs = OperateursModel::all();
        $types = ExchangesTypesModel::all();
        return  view('clients.exchangeForm',['clients'=>$clients, 'operateurs'=>$operateurs, 'types'=>$types]);
    }
    function add(Request $request){
        $validator = Validator::make($request->input(),[
            'commentaires'=>'required',
            'date_echange'=>'required',
            'id_exchangesTypes'=>'required',
            'id_clients'=>'required',
            'id_operateurs'=>'required'
        ])->validate();
        $user = ExchangesModel::create($validator)->save();
        return "Ajouter dans la vdd";
    }
    
}
