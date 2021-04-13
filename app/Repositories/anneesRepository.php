<?php

namespace App\Repositories;

use App\Models\annees;
use App\Repositories\BaseRepository;

/**
 * Class anneesRepository
 * @package App\Repositories
 * @version April 8, 2021, 7:02 pm UTC
*/

class anneesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'annee_year'
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
        return annees::class;
    }
}
