<?php

namespace App\Repositories;

use App\Models\jours;
use App\Repositories\BaseRepository;

/**
 * Class joursRepository
 * @package App\Repositories
 * @version April 8, 2021, 8:37 pm UTC
*/

class joursRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return jours::class;
    }
}
