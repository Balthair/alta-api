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

    public function updateRecord($data, $RetirementPlanType){
        $rp = $RetirementPlanType;
        $rp->fill($data);

        if ($rp->save()) {
            return response()->json([
                'success' => 'Record updated',
                $rp
            ], 200);
        }

        return $rp;
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
