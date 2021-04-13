<?php

namespace App\Repositories;

use App\Models\courses;
use App\Repositories\BaseRepository;

/**
 * Class coursesRepository
 * @package App\Repositories
 * @version April 9, 2021, 2:24 pm UTC
*/

class coursesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_name',
        'course_code',
        'course_description',
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
        return courses::class;
    }
}
