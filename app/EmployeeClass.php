<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeClass extends Model
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
        $ec = $this->findOrFail($data->id);
        $ec->name = $data->name;
        $ec->description = $data->description;

        return $ec->save();
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
