<?php

namespace App\Enums;

enum LeadStatus: string
{
    case UNQUALIFIED = 'unqualified';
    case QUALIFIED = 'qualified';
    case CONVERTED = 'converted';
}
