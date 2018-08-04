<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Expense
 * @package App\Models
 * @version August 1, 2018, 2:31 pm UTC
 *
 * @property \App\Models\Dinner dinner
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection sells
 * @property string name
 * @property float price_purchase
 * @property string description
 * @property integer user_id
 * @property integer dinner_id
 */
class Expense extends Model
{
    //use SoftDeletes;

    public $table = 'expenses';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'price_purchase',
        'description',
        'user_id',
        'dinner_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'price_purchase' => 'float',
        'description' => 'string',
        'user_id' => 'integer',
        'dinner_id' => 'integer'
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
    public function dinner()
    {
        return $this->belongsTo(\App\Models\Dinner::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
