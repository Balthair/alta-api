<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentOption extends Model
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
        $fs = $this->findOrFail($data->id);
        $fs->name = $data->name;
        $fs->description = $data->description;

        return $fs->save();
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
