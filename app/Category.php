<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;


class Category extends Model
{
   
    use Notifiable, Sortable;

    protected $fillable = ['name', 'profile', 'status'];
                        
    public $sortable = ['name', 'profile', 'status'];
   
}
