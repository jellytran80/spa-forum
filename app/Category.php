<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// JSON format
    protected $visible = ['id', 'name', 'description', 'numberOfTopics','topics'];
    //  numberOfTopics chứa số lượng chủ đề trong danh mục
    protected $appends = ['numberOfTopics'];
    // Một danh mục có nhiều topics
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
    // Đếm số topics của 1 danh mục
    public function getNumberOfTopicsAttribute()
    {
        return $this->topics->count();
    }
}
