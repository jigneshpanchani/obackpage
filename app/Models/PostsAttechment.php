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

    public function deleteAttechment($request){
        $returnpost = PostsAttechment::where('id','=', $request->id)
                    ->delete();
        if($returnpost){
            $request->session()->flash('session_success', 'Post Data Deleted Sucessfuly.');
            return redirect(route('edit-free-ad-post-data', $returnpost));
        }else{
            $request->session()->flash('session_error', 'Something will be wrong. Please try again.');
            return redirect(route('edit-free-ad-post-data'))->withInput();
        }
    }

}
