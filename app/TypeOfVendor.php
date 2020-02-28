<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfVendor extends Model
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

    public function updateRecord($data, $TypeOfVendor){
        $tv = $TypeOfVendor;
        $tv->fill($data);

        if ($tv->save()) {
            return response()->json([
                'success' => 'Record updated',
                $tv
            ], 200);
        }

        return $tv;
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
