<?php

namespace Christianhanggra\Bizzy\Select\Permission\Models;

use Moloquent\Eloquent\Model;

class Group extends Model
{
    protected $connection = 'mongodb_select';
    protected $collection = 'group';
}