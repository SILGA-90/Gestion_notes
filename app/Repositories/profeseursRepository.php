<?php

namespace App\Repositories;

use App\Models\profeseurs;
use App\Repositories\BaseRepository;

/**
 * Class profeseursRepository
 * @package App\Repositories
 * @version April 8, 2021, 6:32 pm UTC
*/

class profeseursRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'dob',
        'gender',
        'email',
        'phone',
        'nationality',
        'no_CNIB',
        'statut',
        // 'enregistered_date',
        // 'user_id',
        'image'
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
        return profeseurs::class;
    }
}
