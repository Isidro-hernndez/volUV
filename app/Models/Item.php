<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item
 * @package App\Models
 * @version August 1, 2018, 2:32 pm UTC
 *
 * @property \App\Models\Sell sell
 * @property \Illuminate\Database\Eloquent\Collection expenses
 * @property \Illuminate\Database\Eloquent\Collection sells
 * @property integer quantity
 * @property float subtotal
 * @property integer itemable_id
 * @property string itemable_type
 * @property integer sell_id
 */
class Item extends Model
{
    //use SoftDeletes;

    public $table = 'items';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'quantity',
        'subtotal',
        'itemable_id',
        'itemable_type',
        'sell_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'quantity' => 'integer',
        'subtotal' => 'float',
        'itemable_id' => 'integer',
        'itemable_type' => 'string',
        'sell_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function sell()
    {
        return $this->belongsTo(\App\Models\Sell::class);
    }
}
