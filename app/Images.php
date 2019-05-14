<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model {
	protected $fillable = [
        'image_url', 'type', 'image_heading','image_description','status'
    ];
    protected $table = 'images';
}
