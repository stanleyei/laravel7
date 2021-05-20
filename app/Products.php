<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $type
 * @property string $name
 * @property float $price
 * @property string $content
 * @property string $img
 * @property string $created_at
 * @property string $updated_at
 */
class Products extends Model
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
    protected $fillable = ['type_id', 'name', 'price', 'content', 'img', 'sort'];

    public function productTypes()
    {
        return $this->hasOne('App\ProductTypes','id','type_id');
    }

    public function productImgs()
    {
        return $this->hasMany('App\ProductImgs','product_id','id');
    }

    public function productTypeslinks()
    {
        return $this->belongsToMany(ProductTypes::class);
    }

}
