<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class applicationLeaveModel extends Model
{
    protected $table = 'application_leave';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
