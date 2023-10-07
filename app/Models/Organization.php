<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name',
        'business_id',
        'license_id',
        'org_code',
    ];

    // Specify the primary key if it's different from 'id'
    protected $primaryKey = 'org_id';

    // Enable timestamps (created_at and updated_at)
    public $timestamps = true;
}