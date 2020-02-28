<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpousePartner extends Model
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

    public function updateRecord($data, $SpousePartner){
        $ss = $SameSex;
        $ss->fill($data);

        if ($ss->save()) {
            return response()->json([
                'success' => 'Record updated',
                $ss
            ], 200);
        }

        return $ss;
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
