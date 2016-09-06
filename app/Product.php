<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
		'name',
		'description',
		'code',
		'price',
		'brand_id',
		'category_id'

	];

	protected $hidden = [
		'id', 'created_at', 'updated_at',
	];

	public function category() {
		return $this->belongsTo('App\Category');
	}

	public function brand() {
		return $this->belongsTo('App\Brand');
	}
}
