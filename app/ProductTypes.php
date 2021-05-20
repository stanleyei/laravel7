<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class ProductTypes extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'sort'];

    public function products()
    {
        return $this->hasMany('App\Products','type_id','id');
    }

    public function productslinks()
    {
        return $this->belongsToMany(Products::class);
    }

}
