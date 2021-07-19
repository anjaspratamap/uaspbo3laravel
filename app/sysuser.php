<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sysuser extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'sysusers';

    public function categories()
    {
        return $this->hasMany(sysuser::class);
    }

    public function childrenCategories()
    {
        return $this->hasMany(sysuser::class)->with('categories');
    }
}
