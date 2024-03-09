<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'content'
    ];

    public function posts()
    {
        return $this->hasMany(Contact::class, 'category_id', 'id');
    }
}
