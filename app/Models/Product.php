<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version August 1, 2018, 2:27 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection exmpenses
 * @property \Illuminate\Database\Eloquent\Collection sells
 * @property string name
 * @property string barcode
 * @property float price_sale
 * @property float price_purchase
 * @property integer quantity
 * @property float content
 * @property string type
 * @property string description
 */
class Product extends Model
{
    //use SoftDeletes;

    public $table = 'products';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'barcode',
        'price_sale',
        'price_purchase',
        'quantity',
        'content',
        'type',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'barcode' => 'string',
        'price_sale' => 'float',
        'price_purchase' => 'float',
        'quantity' => 'integer',
        'content' => 'float',
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
