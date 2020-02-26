<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'state_id'];

    public function getAll(){
        return $this->get();
    }

    public function getById($id){
        return $this->where('id', $id)->first();
    }

    public function add($data){
        return $this->create($data);
    }

    public function updateRecord($data, $City){
        $ct = $City;
        $ct->fill($data);

        if ($ct->save()) {
            return response()->json([
                'success' => 'Record updated',
                $ct
            ], 200);
        }

        return $ct;
    }

    public function drop($id){
        $ct = $this->findOrFail($id)->delete();
        
        if($ct){
            return response()->json([
                'success' => 'deleted'
            ], 200);
        }

        return $ct;
    }
}
