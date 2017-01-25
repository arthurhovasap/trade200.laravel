<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'tbl_status';
    
    public function getLatest(){
        $models = Status::latest('id')->notnull()->get();
        return $models;
    }
    
    public function scopeNotnull($query){
        $query->where('name', '!=', '');
    }
}
