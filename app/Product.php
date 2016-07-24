<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function Category()
    {
    	return $this->belongs_to('App\Category');
    }
}
