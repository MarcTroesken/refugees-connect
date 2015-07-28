<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    /**
     * Protection against mass assignment
     *
     * @var Array
     */
    protected $fillable = ['user_id', 'name', 'street', 'zip', 'city', 'contact', 'phone', 'contact_email'];

    /**
     * Relation to its user
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
