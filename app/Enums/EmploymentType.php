<?php

namespace App\Enums;

enum
EmploymentType: string
{
    case Full_Time = 'full_time';
    case Part_Time = 'part_time';
    case Contract = 'contract';
    case Freelance = 'freelance';
    case Internship = 'internship';
    case Temporary = 'temporary';
    case Remote = 'remote';
    case Other = 'other';


    public function getLabels(): string
    {
        return match ($this) {
            self::Full_Time => 'Full Time',
            self::Part_Time => 'Part Time',
            self::Contract => 'Contract',
            self::Freelance => 'Freelance',
            self::Internship => 'Internship',
            self::Temporary => 'Temporary',
            self::Remote => 'Remote',
            self::Other => 'Other',
        };

    }
}

