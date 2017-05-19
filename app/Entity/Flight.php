<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /*
     * 关联到模型的数据表
     * var string
     */
    protected $table = "my_flights";

    public $primaryKey = "f_id";

    protected $dateFormat = "U";

    CONST CREATED_AT = 'add_time';
    CONST UPDATED_AT = 'last_edit_time';

    protected $connection = "connect_name";




}
