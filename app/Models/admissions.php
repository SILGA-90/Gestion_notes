<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class admissions
 * @package App\Models
 * @version April 8, 2021, 6:30 pm UTC
 *
 * @property string $roll_no
 * @property string $first_name
 * @property string $last_name
 * @property string $father_name
 * @property string $father_phone
 * @property string $mother_name
 * @property string $mother_phone
 * @property string $gender
 * @property string $email
 * @property string $phone
 * @property string $current_adress
 * @property string $nationality
 * @property integer $statut
 * @property string $enregistered_date
 * @property integer $user_id
 * @property integer $class_id
 * @property string $image
 */
class admissions extends Model
{
    use SoftDeletes;

    public $table = 'admissions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'roll_no' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'father_name' => 'string',
        'father_phone' => 'string',
        'mother_name' => 'string',
        'mother_phone' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'current_adress' => 'string',
        'nationality' => 'string',
        'statut' => 'integer',
        'enregistered_date' => 'date',
        'user_id' => 'integer',
        'class_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'roll_no' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'father_name' => 'required|string|max:255',
        'father_phone' => 'required|string|max:255',
        'mother_name' => 'required|string|max:255',
        'mother_phone' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'current_adress' => 'required|string',
        'nationality' => 'required|string|max:255',
        'statut' => 'required',
        'enregistered_date' => 'required',
        'user_id' => 'required|integer',
        'class_id' => 'required|integer',
        'image' => 'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    protected $primaryKey= 'admission_id';
}
