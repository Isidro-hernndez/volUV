<?php

namespace App\Repositories;

use App\Models\Sell;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SellRepository
 * @package App\Repositories
 * @version August 1, 2018, 2:31 pm UTC
 *
 * @method Sell findWithoutFail($id, $columns = ['*'])
 * @method Sell find($id, $columns = ['*'])
 * @method Sell first($columns = ['*'])
*/
class SellRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'total',
        'date',
        'user_id',
        'costumer_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sell::class;
    }
}
