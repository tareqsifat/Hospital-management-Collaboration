<?php

namespace App\Models;
use App\Models\Nurse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'year_of_experience',
        'previous_job_place',
        'certificate_1',
        'certificate_2',
        'certificate_3',
        'certificate_4',
        'ssc_year',
        'hsc_year',
        'mbbs_year',
        'school',
        'college',
        'medical_college',
        'institute_1',
        'institute_2',
        'present_address_id',
        'permanent_address_id',
        'bank_data_id',
        'is_active',
        'is_blocked',
        'creator',
        'slug',
        'status'
    ];
    public function user_shower(){
        return $this->belongsTo(User::class);
    }

}
