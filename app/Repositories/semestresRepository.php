<?php

namespace App\Repositories;

use App\Models\semestres;
use App\Repositories\BaseRepository;

/**
 * Class semestresRepository
 * @package App\Repositories
 * @version April 8, 2021, 8:27 pm UTC
*/

class semestresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'start_date',
        'end_date',
        'status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return semestres::class;
    }
}
