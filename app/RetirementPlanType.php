<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RetirementPlanType extends Model
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
        $rpt = $this->findOrFail($data->id);
        $rpt->name = $data->name;
        $rpt->description = $data->description;

        return $rpt->save();
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
