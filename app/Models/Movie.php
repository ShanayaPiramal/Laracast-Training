<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Movie extends Model{
    use HasFactory;
    protected $table = 'movie_listings';
    protected $fillable = ['streaming_id','name', 'Rating'];
    public function streaming () {
        return $this->belongsTo(Streaming::class);
            }  
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }     

}
