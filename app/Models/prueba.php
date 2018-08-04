<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class prueba
 * @package App\Models
 * @version August 1, 2018, 5:27 am UTC
 *
 * @property string name
 * @property int price
 * @property string|\Carbon\Carbon date
 */
class prueba extends Model
{
    use SoftDeletes;

    public $table = 'pruebas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'price',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'price' => 'required',
        'date' => 'required'
    ];

    
}
