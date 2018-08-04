<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version August 1, 2018, 8:31 am UTC
 *
 * @property \App\Models\Dinner dinner
 * @property \Illuminate\Database\Eloquent\Collection Exmpense
 * @property \Illuminate\Database\Eloquent\Collection Sell
 * @property string name
 * @property string last_name
 * @property string last_name_m
 * @property string type
 * @property string email
 * @property string password
 * @property string remember_token
 * @property integer dinner_id
 */
class User extends Model
{
    //use SoftDeletes;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'name',
        'last_name',
        'last_name_m',
        'type',
        'email',
        'password',
        'remember_token',
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
        'last_name' => 'string',
        'last_name_m' => 'string',
        'type' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function expenses()
    {
        return $this->hasMany(\App\Models\Exmpense::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sells()
    {
        return $this->hasMany(\App\Models\Sell::class);
    }
}
