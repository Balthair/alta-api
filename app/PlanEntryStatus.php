<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanEntryStatus extends Model
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
        $pes = $this->findOrFail($data->id);
        $pes->name = $data->name;
        $pes->description = $data->description;

        return $pes->save();
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
