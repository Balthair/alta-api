<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BenefitForm extends Model
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

    public function updateRecord($data, $BenefitForm){
        
        $fs = $this->findOrFail($data->id);
        $fs->name = $data->name;
        $fs->description = $data->description;

        return $fs->save();

        $fs = $BenefitForm;
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
        $fs = $this->findOrFail($id)->delete();
        
        if($fs){
            return response()->json([
                'success' => 'deleted'
            ], 200);
        }

        return $fs;
    }
}
