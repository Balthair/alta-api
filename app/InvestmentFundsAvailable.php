<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvestmentFundsAvailable extends Model
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

    public function updateRecord($data, $InvestmentFundsAvailable){
        $ifa = $InvestmentFundsAvailable;
        $ifa->fill($data);

        if ($ifa->save()) {
            return response()->json([
                'success' => 'Record updated',
                $ifa
            ], 200);
        }

        return $ifa;
    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
