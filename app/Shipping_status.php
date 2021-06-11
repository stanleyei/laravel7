<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property int $sort
 * @property string $created_at
 * @property string $updated_at
 */
class Shipping_status extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'shipping_status';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'sort', 'created_at', 'updated_at'];

}
