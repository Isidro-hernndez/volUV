<?php

namespace App\Repositories;

use App\Models\Dinner;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DinnerRepository
 * @package App\Repositories
 * @version August 1, 2018, 8:54 am UTC
 *
 * @method Dinner findWithoutFail($id, $columns = ['*'])
 * @method Dinner find($id, $columns = ['*'])
 * @method Dinner first($columns = ['*'])
*/
class DinnerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'address',
        'phone',
        'name',
        'id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return \App\Models\Dinner::class;
    }
}
