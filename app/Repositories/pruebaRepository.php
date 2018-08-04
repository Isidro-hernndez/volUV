<?php

namespace App\Repositories;

use App\Models\prueba;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class pruebaRepository
 * @package App\Repositories
 * @version August 1, 2018, 5:27 am UTC
 *
 * @method prueba findWithoutFail($id, $columns = ['*'])
 * @method prueba find($id, $columns = ['*'])
 * @method prueba first($columns = ['*'])
*/
class pruebaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'price',
        'date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return prueba::class;
    }
}
