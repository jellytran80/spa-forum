<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	// Các trường sẽ hiển thị trong json
    protected $visible = ['id', 'title', 'body', 'views', 'time', 'category_id'];
    // Thời gian dùng để hiển thị
    protected $appends = ['time'];

    public function getTimeAttribute()
    {
        return $this->created_at->timestamp;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
