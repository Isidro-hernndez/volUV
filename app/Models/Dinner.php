<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Dinner
 * @package App\Models
 * @version August 1, 2018, 8:54 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Exmpense
 * @property \Illuminate\Database\Eloquent\Collection sells
 * @property \Illuminate\Database\Eloquent\Collection User
 * @property string address
 * @property string phone
 * @property string name
 */
class Dinner extends Model
{
    //use SoftDeletes;

    public $table = 'dinners';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'id';

    //protected $dates = ['deleted_at'];


    public $fillable = [
        'address',
        'phone',
        'name',
        'id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'address' => 'string',
        'phone' => 'string',
        'name' => 'string'
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
    public function exmpenses()
    {
        return $this->hasMany(\App\Models\Exmpense::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }
}
