<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['name', 'country_id'];

    public function getAll(){
        return $this->with('countries')->get();
    }

    public function getById($id){
        return $this->where('id', $id)->first();
    }

    public function add($data){
        return $this->create($data);
    }

    public function updateRecord($data, $State){
        $st = $State;
        $st->fill($data);

        if ($st->save()) {
            return response()->json([
                'success' => 'Record updated',
                $st
            ], 200);
        }

        return $st;
    }

    public function drop($id){
        $st = $this->findOrFail($id)->delete();
        
        if($st){
            return response()->json([
                'success' => 'deleted'
            ], 200);
        }

        return $st;
    }

    public function countries()
    {
        return $this->belongsTo('App\Country', 'country_id');
    }
}
