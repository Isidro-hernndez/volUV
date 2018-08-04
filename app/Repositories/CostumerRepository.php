<?php

namespace App\Repositories;

use App\Models\Costumer;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CostumerRepository
 * @package App\Repositories
 * @version August 1, 2018, 2:16 pm UTC
 *
 * @method Costumer findWithoutFail($id, $columns = ['*'])
 * @method Costumer find($id, $columns = ['*'])
 * @method Costumer first($columns = ['*'])
*/
class CostumerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'enrrollment',
        'email',
        'password',
        'balance'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Costumer::class;
    }
}
