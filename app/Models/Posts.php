<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'id', 'continent_id','country_state_id','city_id','category_id', 'sub_category_id','user_id','title','description','age','location','contact_email',
        'is_premium_ad',
        'is_sponsor_ad',
        'created_at',
        'updated_at'
    ];

    public function saveposts($request) {

        // $id = Auth::user()->id;
        $objService = new Posts();
        $objService->continent_id = 1;
        $objService->country_state_id = 1;
        $objService->city_id = 1;
        $objService->category_id =1;
        $objService->sub_category_id =1;
        $objService->user_id = Auth::user()->id;
        $objService->title = $request->input('title');
        $objService->description = $request->input('description');
        $objService->age = $request->input('age');
        $objService->location = $request->input('location');
        $objService->contact_email = $request->input('contact_email');
        $objService->mobile_number = $request->input('mobile_number');
        $objService->save();
        $data=new PostsAttechment;
            if($files=$request->file('file')){
                foreach ($files as $file) {
                    $name= date('YmdHis').$file->getClientOriginalName();
                    $destinationPath = public_path('/uploads/');
                    $file->move($destinationPath, $name);
                    $data->file_name=$name;
                    $data->post_id=$objService->id;
                    $data->file_path="/uploads/.$name";
                }
            }
        $data->save();

        return $objService->id ;

    }
}
