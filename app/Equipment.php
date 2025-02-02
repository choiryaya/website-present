<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $guarded = [];
    public $timestamps= false;
    protected $table = 'data_record';

    public function getCover(){
        if(substr($this->cover,0,5) == "https"){

        }
        if($this->cover){
            return asset($this->cover);
        }
        // jika tidak ada cover
        return 'https://via.placeholder.com/100x100.png?text=No+Cover';
    }
}
