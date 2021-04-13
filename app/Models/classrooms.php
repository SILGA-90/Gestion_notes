<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class classrooms
 * @package App\Models
 * @version April 8, 2021, 6:19 pm UTC
 *
 * @property string $classroom_name
 * @property integer $classroom_code
 * @property string $classroom_description
 * @property integer $classroom_status
 */
class classrooms extends Model
{
    use SoftDeletes;

    public $table = 'classrooms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'classroom_id' => 'integer',
        'classroom_name' => 'string',
        'classroom_code' => 'integer',
        'classroom_description' => 'string',
        'classroom_status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'classroom_name' => 'required|string|max:255',
        'classroom_code' => 'required|integer',
        'classroom_description' => 'required|string',
        'classroom_status' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    protected $primaryKey= 'classroom_id';
}
