<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantCriteria extends Model
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
        $pCriteria = $this->findOrFail($data->id);
        $pCriteria->name = $data->name;
        $pCriteria->description = $data->description;

        return $pCriteria->save();
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
