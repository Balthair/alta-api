<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BenefitProgram extends Model
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
        $bp = $this->findOrFail($data->id);
        $bp->name = $data->name;
        $bp->description = $data->description;

        return $bp->save();
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
