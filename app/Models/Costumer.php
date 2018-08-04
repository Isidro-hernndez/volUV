<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Costumer
 * @package App\Models
 * @version August 1, 2018, 2:16 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection exmpenses
 * @property \Illuminate\Database\Eloquent\Collection Sell
 * @property string enrrollment
 * @property string email
 * @property string password
 * @property float balance
 */
class Costumer extends Model
{
    //use SoftDeletes;

    public $table = 'costumers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'enrrollment',
        'email',
        'password',
        'balance'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'enrrollment' => 'string',
        'email' => 'string',
        'password' => 'string',
        'balance' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sells()
    {
        return $this->hasMany(\App\Models\Sell::class);
    }
}
