<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;
class Event extends Model
{
    public function workshops()
    {
        /* The foreign key of the 'workshops' table to link to the id column of the current table 
        with provided keys by Laravel ORM
        */
        return $this->hasMany(Workshop::class, 'event_id', 'id');

        /* The foreign key of the 'workshops' table to link to the id column of the current table 
        automatically done internally by Laravel ORM
        */
        //return $this->hasMany(Workshop::class);
    }

}
