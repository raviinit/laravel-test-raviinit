<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class MenuItem extends Model
{
	public function children()
    {
		return $this->hasMany(self::class, 'parent_id', 'id' )->with('children');
	}

	public function parent()
    {
		return $this->hasOne(self::class, 'id', 'parent_id' );
	}
}
