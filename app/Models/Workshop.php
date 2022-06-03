<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use App\Models\Event;

class Workshop extends Model
{
    protected $id  = 'event_id';

    public function workshopIds()
    {
        return $this->hasMany(self::class, $this->id);
    }

}
