<?php

namespace App\Models;

// use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class profeseurs
 * @package App\Models
 * @version April 8, 2021, 6:32 pm UTC
 *
 * @property string $first_name
 * @property string $lastt_name
 * @property string $gender
 * @property string $email
 * @property string $phone
 * @property string $nationality
 * @property string $no_CNIB
 * @property integer $statut
 * @property string $enregistered_date
 * @property integer $user_id
 * @property string $image
 */
class profeseurs extends Model
{
    use SoftDeletes;

    public $table = 'profeseurs';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teacher_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'dob' => 'date',
        'gender' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'nationality' => 'string',
        'no_CNIB' => 'string',
        'statut' => 'integer',
        // 'enregistered_date' => 'date',
        // 'user_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'dob' => 'required|date|max:255',
        'gender' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'nationality' => 'required|string|max:255',
        'no_CNIB' => 'required|string|max:255',
        'statut' => 'required',
        // 'enregistered_date' => 'required',
        // 'user_id' => 'required|integer',
        'image' => 'nullable|file|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    protected $primaryKey = 'teacher_id';
}
