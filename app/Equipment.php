<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $guarded = [];
    public $timestamps= false;
    protected $table = 'equipment';

    public function getCover(){
        if(substr($this->cover,0,5) == "https"){

        }
        if($this->cover){
            return asset($this->cover);
        }
        // jika tidak ada cover
        return 'https://via.placeholder.com/728x90.png?text=No+Cover';
    }
}
