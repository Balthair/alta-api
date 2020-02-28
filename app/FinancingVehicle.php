<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancingVehicle extends Model
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

    public function updateRecord($data, $FinancingVehicle){
        $fs = $FinancingVehicle;
        $fs->fill($data);

        if ($fs->save()) {
            return response()->json([
                'success' => 'Record updated',
                $fs
            ], 200);
        }

        return $fs;
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
