<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
   
    use Notifiable, Sortable, SoftDeletes;

    protected $fillable = ['name', 'profile', 'status'];
                        
    public $sortable = ['id', 'name'];

    protected $appends = ['image_full_path', 'image_thumb_full_path'];

    public function getImageFullPathAttribute()
    {
        return asset('/storage/categories/' . $this->id . '/image/' . $this->image);
    }

    public function getImageThumbFullPathAttribute()
    {
        return asset('/storage/categories/' . $this->id . '/image/128px/' . $this->image);
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
    
}
