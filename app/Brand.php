<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
		'name',
	];

	protected $hidden = [
		'id', 'created_at', 'updated_at',
	];

	public function products() {
		return $this->hasMany('App\Product');
	}
}
