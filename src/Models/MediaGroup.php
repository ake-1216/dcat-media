<?php

namespace DeMemory\DcatMediaSelector\Models;

use Illuminate\Database\Eloquent\Model;

class MediaGroup extends Model
{
    protected $table = 'media_group';

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    protected $fillable = ['admin_id', 'name'];
}
