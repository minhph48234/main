<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'category_id', 'title', 'slug', 'price',
        'duration', 'description', 'image', 'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
