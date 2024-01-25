<?php

namespace App\Models;

use App\Enums\EmploymentType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company_name',
        'company_logo',
        'employment_type',
        'job_role',
        'apply_url',
        'salary',
        'description',
    ];

    protected $casts = [
       'employment_type' => EmploymentType::class,
    ];
}
