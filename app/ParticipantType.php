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

    public function updateRecord($data, $ParticipantType){
        $pc = $ParticipantType;
        $pc->fill($data);

        if ($pc->save()) {
            return response()->json([
                'success' => 'Record updated',
                $pc
            ], 200);
        }

        return $pc;
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
