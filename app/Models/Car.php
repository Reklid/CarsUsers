<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = [
    	'name',
		'color',
    	'user_id'
	];

    protected $guarded = ['id'];

    public function user()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}
}
