<?php

namespace App\Repositories;

use App\Models\levels;
use App\Repositories\BaseRepository;

/**
 * Class levelsRepository
 * @package App\Repositories
 * @version April 8, 2021, 6:34 pm UTC
*/

class levelsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'level',
        'course_id',
        'level_description'
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
        return levels::class;
    }
}
