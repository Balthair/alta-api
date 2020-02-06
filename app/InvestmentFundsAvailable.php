<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvestmentFundsAvailable extends Model
{
    protected $fillable = ['name', 'description'];

    public function getAll(){
        return $this->get();
    }

    public function getById($id){
        return $this->where('id', $id)->first();
    }

    public function add($data){
        return $this->create($data);
    }

    public function updateRecord($data){
        $ifa = $this->findOrFail($data->id);
        $ifa->name = $data->name;
        $ifa->description = $data->description;

        return $ifa->save();
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
