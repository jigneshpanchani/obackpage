<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsAttechment extends Model
{
    use HasFactory;
    protected $table = 'post_attechment';
    protected $fillable = ['id ','post_id','file_name','file_path','created_at','updated_at'];

    public function savepostsimage($request) {

        // $id = Auth::user()->id;
        $objService = new PostsAttechment();
        
        $objService->post_id = 1;
        $objService->file_name = $request->input('file_name');
        $objService->file_path = $request->input('file_path');
       
        $objService->save();

        return redirect('free-ad-choose-location')->with('status', 'Form Data Submited Sucessfuly!');;
    }
}
