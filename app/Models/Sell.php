<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sell
 * @package App\Models
 * @version August 1, 2018, 2:31 pm UTC
 *
 * @property \App\Models\Costumer costumer
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection expenses
 * @property \Illuminate\Database\Eloquent\Collection Item
 * @property float total
 * @property string|\Carbon\Carbon date
 * @property integer user_id
 * @property integer costumer_id
 */
class Sell extends Model
{
    //use SoftDeletes;

    public $table = 'sells';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'total',
        'date',
        'user_id',
        'costumer_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'total' => 'float',
        'user_id' => 'integer',
        'costumer_id' => 'integer'
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
    public function costumer()
    {
        return $this->belongsTo(\App\Models\Costumer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function items()
    {
        return $this->hasMany(\App\Models\Item::class);
    }
}
