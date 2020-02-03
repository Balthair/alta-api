<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantType extends Model
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
        $pType = $this->findOrFail($data->id);
        $pType->name = $data->name;
        $pType->description = $data->description;

        return $pType->save();
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
