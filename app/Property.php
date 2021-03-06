<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table="properties";

    public function tenant()
    {
        return $this->hasMany('App\User', 'property_id', 'id');
    }

    public function repair()
    {
        return $this->hasOne('App\Repair', 'id', 'property_id');
    }
}
