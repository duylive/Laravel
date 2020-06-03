<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    /**
     * @var int
     */
    private $city_id;

    public static function findOrFail($id)
    {
    }

    public function city(){
        return $this->belongsTo('App\City');
    }
}
