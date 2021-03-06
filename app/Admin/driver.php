<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    protected $fiilable = [
        'employeeName',
        'designation',
        'DOJ',
        'mobile',
        'ESIC',
        'PAN',
        'lisenceNo',
        'lisenceIssueDate',
        'lisenceExpireDate',
        'companyName',
        'DOB',
        'medicalExpireDate',
        'Salary',
        'address',
        'uploadDriverLisence',
        'status'
    ];

}
