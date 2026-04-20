<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
USE Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
     use SoftDeletes;
    
     protected $fillable = [
        'university_id',
        'email',
        'first_name',
        'last_name',
        'date_of_birth',
        'admission_date',
        'status',
     ];    


     protected $casts = [
        'date_of_birth' => 'date',
        'admission_date' => 'date',
     ];


     public function getFullNameAttribute() {
        return $this->first_name . ' ' . $this->last_name;
     }


    //  public function getStatusAttribute() {
    //     return match($this->attributes['status']) {
    //         'active'=> 'Active',
    //         'on_leave' => 'On Leave',
    //         'graduated' => 'Graduated',
    //         'expelled' => 'Expelled',
    //         default => 'Unknown',
    //     };
       
    //  }
}
