<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function fullname()
    {
       return $this->first_name . " " . $this->mid_name . " " .  $this->last_name;
    }
    protected $guard = [];
    
    
    
}
