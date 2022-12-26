<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsAttechment extends Model
{
    use HasFactory;
    protected $table = 'post_attechment';
    protected $fillable = ['id ','post_id','file_name','file_path','created_at','updated_at'];

    public function getPostAttechment($id) {
        $query = PostsAttechment::from('post_attechment')
                ->where('post_id', $id)
                ->get()->toArray();
        return $query;
    }
    

}
