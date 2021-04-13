<?php

namespace App\Repositories;

use App\Models\admissions;
use App\Repositories\BaseRepository;

/**
 * Class admissionsRepository
 * @package App\Repositories
 * @version April 8, 2021, 6:30 pm UTC
*/

class admissionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'roll_no',
        'first_name',
        'last_name',
        'father_name',
        'father_phone',
        'mother_name',
        'mother_phone',
        'gender',
        'email',
        'phone',
        'current_adress',
        'nationality',
        'statut',
        'enregistered_date',
        'user_id',
        'class_id',
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
        return admissions::class;
    }
}
