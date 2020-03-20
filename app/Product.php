<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use App\Products;

class Product extends Model
{
    use  Sortable;

    public $sortable = ['id',
                        'name',
                        'created_at',
                        'updated_at'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
