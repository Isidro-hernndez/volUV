<?php

namespace App\Repositories;

use App\Models\Expense;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExpenseRepository
 * @package App\Repositories
 * @version August 1, 2018, 2:31 pm UTC
 *
 * @method Expense findWithoutFail($id, $columns = ['*'])
 * @method Expense find($id, $columns = ['*'])
 * @method Expense first($columns = ['*'])
*/
class ExpenseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'price_purchase',
        'description',
        'user_id',
        'dinner_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Expense::class;
    }
}
