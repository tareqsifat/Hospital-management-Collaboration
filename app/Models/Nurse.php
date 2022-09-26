<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;
    protected $fillable = [
   		'user_id',
		'previous_job_place',
		'certificate_1',
		'certificate_2',
		'certificate_3',
		'certificate_4',
		'ssc_year',
		'hsc_year',
		'nursing_pass_year',
		'ssc_school_name',
		'hsc_collage_name',
		'nursing_collage_name'
		'institute_1',
		'institute_2',
		'present_address',
		'parmenant_address',
		'bank_data_id'
    ];
}
