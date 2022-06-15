<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'file',
        'order',
        'cover',
    ];

    protected $table = 'attachments';

    public function getImages($id)
    {
        $res = NULL;
        $images = $this::where('node_id', $id)->get(['title', 'file']);
    foreach ($images as $i) {
        $res[] = $i['file'];
    }
        return $res;
    }

    public function nodes()
    {
        return $this->belongsToMany('App\Node');
    }

}
