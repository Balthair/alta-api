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

    public function updateRecord($data, $EmployeeClass){

        $ec = $FinancialStatement;
        $ec->fill($data->name);

        if ($ec->save()) {
            return response()->json([
                'success' => 'Record updated',
                $ec
            ], 200);
        }

        return $ec;

    }

    public function drop($id){
        return $this->findOrFail($id)->delete();
    }
}
