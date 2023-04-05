<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Collection extends Model
{
    use HasFactory;

    protected $table = 'collection';
    protected $primaryKey = 'id';

    public function clothing(): HasOne
    {
        return $this->hasOne(Clothing::class);
    }
}
