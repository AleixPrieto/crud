<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producte extends Model
{
    use HasFactory;

    Protected $fillable = ['name','provider'];

    protected static function boot(){
    	parent::boot();
    	self::creating(function ($table){
    		if(! app()->runningInConsole()){
    			$table->user_id = auth()->id();
    		}
    	});
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
