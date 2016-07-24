<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    //if table name is not same with model name
    //protected $table ='table_name';
    use \Illuminate\Auth\Authenticatable;
}
