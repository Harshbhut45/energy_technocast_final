<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use Sortable, SoftDeletes;

    public $sortable = ['id', 'name'];

    protected $appends = ['image_full_path', 'image_thumb_full_path'];

    public function getImageFullPathAttribute()
    {
        return asset('/storage/products/' . $this->id . '/image/' . $this->image);
    }

    public function getImageThumbFullPathAttribute()
    {
        return asset('/storage/products/' . $this->id . '/image/128px/' . $this->image);
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
   
}
