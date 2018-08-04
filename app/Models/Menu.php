<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Menu
 * @package App\Models
 * @version August 1, 2018, 2:25 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection exmpenses
 * @property \Illuminate\Database\Eloquent\Collection sells
 * @property float price
 * @property string type
 * @property string description
 */
class Menu extends Model
{
    //use SoftDeletes;

    public $table = 'menus';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'price',
        'type',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idMenu' => 'integer',
        'price' => 'float',
        'type' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
