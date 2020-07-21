<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    //
    protected $primaryKey = 'id_offre';
    public function imageImage_path(){
        return $this->belongsTo(Image::class);
    }
}
