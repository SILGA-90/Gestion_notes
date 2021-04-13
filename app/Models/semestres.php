<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class semestres
 * @package App\Models
 * @version April 8, 2021, 8:27 pm UTC
 *
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 * @property integer $status
 */
class semestres extends Model
{
    use SoftDeletes;

    public $table = 'semestres';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'start_date',
        'end_date',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'semester_id' => 'integer',
        'name' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'start_date' => 'required',
        'end_date' => 'required',
        'status' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    protected $primaryKey= 'semester_id';
}
