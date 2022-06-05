<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
class Workshop extends Model
{
    protected $id  = 'event_id';
    public function workshops()
    {
        return $this->hasMany(self::class, $this->id);
    }
}
