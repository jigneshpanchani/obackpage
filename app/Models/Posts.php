<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostsAttechment;
use App\Models\User;
use Carbon\Carbon;


use Illuminate\Support\Facades\DB;


class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'id', 'continent_id','country_state_id','city_id','category_id', 'sub_category_id','user_id','title','description','age','location','contact_email',
        'mobile_number',
        'is_premium_ad',
        'is_sponsor_ad',
        'created_at',
        'updated_at'
    ];

    public function savePosts($request) {

        $objService = new Posts();
        $objService->continent_id = $request->input('continent_id');
        $objService->country_state_id = $request->input('country_state_id');
        $objService->city_id = $request->input('city_id');
        $objService->category_id =$request->input('category_id');
        $objService->sub_category_id =$request->input('sub_category_id');
        $objService->user_id = Auth::user()->id;
        $objService->title = $request->input('title');
        $objService->description = $request->input('description');
        $objService->age = $request->input('age');
        $objService->location = $request->input('location');
        $objService->contact_email = $request->input('contact_email');
        $objService->mobile_number = $request->input('mobile_number');
        $objService->save();


        if($files=$request->file('file')){
            foreach ($files as $file) {
                $data=new PostsAttechment;
                $name= date('YmdHis').$file->getClientOriginalName();
                $destinationPath = public_path('/uploads/');
                $file->move($destinationPath, $name);
                $data->file_name=$name;
                $data->post_id=$objService->id;
                $data->file_path="/uploads/$name";
                $data->save();
            }
        }

        return $objService->id ;

    }

    public function saveLocalAdposts($request) {

        $user_id = Auth::user()->id;
        $getCurrentCredit= User::select('credits')->where('id', $user_id)->get()->toArray();

        if($getCurrentCredit[0]['credits']>=$request->input('totla__amount_value')){
            if($request->input('is_premium_ad') == "1"){
                $updatedCredit = $getCurrentCredit[0]['credits'] - $request->input('totla__amount_value') -4;
            } else{
                $updatedCredit = $getCurrentCredit[0]['credits'] - $request->input('totla__amount_value');
            }
            $objUser = user::find($user_id);
            $objUser->credits = $updatedCredit;
            $objUser->update();

            $objTransaction = new Transaction();
            $objTransaction->status = "debit";
            $objTransaction->code = "ABC123";
            if($request->input('is_premium_ad') == "1"){
                $updateTransactionAmount = $request->input('totla__amount_value') + 4;
            } else{
                $updateTransactionAmount = $request->input('totla__amount_value');
            }
            $objTransaction->amount = $updateTransactionAmount;
            $objTransaction->user_id = Auth::user()->id;
            $objTransaction->save();

            $multipleCities = $request->input('city_id1');
            $i = 0;
            $fisrtPostId = array();
            foreach($multipleCities as $multipleCityID){

                $objService = new Posts();
                $objService->continent_id = $request->input('continent_id');
                $objService->country_state_id = $request->input('country_state_id');
                $objService->city_id = $multipleCityID;
                $objService->category_id =$request->input('category_id');
                $objService->sub_category_id =$request->input('sub_category_id');
                $objService->user_id = Auth::user()->id;
                $objService->title = $request->input('title');
                $objService->description = $request->input('description');
                $objService->age = $request->input('age');
                $objService->location = $request->input('location');
                $objService->contact_email = $request->input('contact_email');
                $objService->mobile_number = $request->input('mobile_number');
                $objService->is_premium_ad = (!empty($request->input('is_premium_ad'))) ? '1' : '0';
                $objService->save();
                if($files=$request->file('file')){
                    if($i == 0){
                        array_push($fisrtPostId,$objService->id);
                        foreach ($files as $file) {

                            $data=new PostsAttechment;
                            $name= date('YmdHis').$file->getClientOriginalName();
                            $destinationPath = public_path('/uploads/');
                            $file->move($destinationPath, $name);
                            $data->file_name=$name;
                            $data->post_id= $objService->id;
                            $data->file_path="/uploads/$name";
                            $data->save();

                            unset($data);
                        }
                    } else {
                        $findPostId = PostsAttechment::where('post_id',$fisrtPostId[0])->get();
                        foreach ($findPostId as $fileArray) {
                            $otherFiles=new PostsAttechment;
                            $otherFiles->file_name=$fileArray->file_name;
                            $otherFiles->post_id= $objService->id;
                            $otherFiles->file_path=$fileArray->file_path;
                            $otherFiles->save();
                        }
                    }

                }
                $i++;
            }
            return $objService->id;
        }else{
            return false;
        }



    }

    public function updatePosts($request, $id){

        $objService = Posts::find($id);
        $objService->user_id = Auth::user()->id;
        $objService->title = $request->input('title');
        $objService->description = $request->input('description');
        $objService->age = $request->input('age');
        $objService->location = $request->input('location');
        $objService->contact_email = $request->input('contact_email');
        $objService->mobile_number = $request->input('mobile_number');
        $objService->update();

        if($files=$request->file('file')){
            foreach ($files as $file) {
                $data=new PostsAttechment;
                $name= date('YmdHis').$file->getClientOriginalName();
                $destinationPath = public_path('/uploads/');
                $file->move($destinationPath, $name);
                $data->file_name=$name;
                $data->post_id=$objService->id;
                $data->file_path="/uploads/$name";
                $data->save();
            }
        }
        return true;
    }

    public function geteditPostData($id) {
        $query = Posts::from('posts as ps')
                ->leftjoin('continents', 'continents.id', '=', 'ps.continent_id')
                ->leftjoin('country_state', 'country_state.id', '=', 'ps.country_state_id')
                ->leftJoin('city', 'city.id', '=', 'ps.city_id')
                ->leftJoin('category', 'category.id', '=', 'ps.category_id')
                ->leftjoin('sub_category as sc', 'sc.id', '=', 'ps.sub_category_id')
                ->where('ps.id', $id)
                ->select('ps.id', 'ps.title', 'ps.description', 'ps.location', 'ps.contact_email', 'continents.continent as country_name', 'country_state.country_state as state', 'city.city as city_name', 'category.category as category', 'sc.sub_category as sub_category', 'ps.age', 'ps.mobile_number')
                ->get()
                ->toArray();
        return $query;
    }

    public function getPost(){

        $array= posts::from('posts as ps')
            ->leftJoin('city', 'city.id', '=', 'ps.city_id')
            ->leftJoin('sub_category as sc', 'sc.id', '=', 'ps.sub_category_id')
            ->leftJoin('category', 'category.id', '=', 'ps.category_id')
            ->select('ps.id', 'ps.title', 'ps.description', 'ps.location', 'ps.contact_email', 'city.city as city_name', 'category.category as category', 'sc.sub_category as sub_category')
            ->get()
            ->toArray();
        return $array;
    }
    public function getViewPostPremium($id, $sid){

        $query = Posts::from('posts')
            ->where('city_id', $id)
            ->where('sub_category_id', $sid)
            ->where('is_premium_ad', '1')
            ->select('id','title','age', 'location', DB::raw("DATE_FORMAT(created_at, '%d %b %Y') as posted_date"))
            ->orderBy('created_at', 'DESC')
            ->groupBy('created_at')
            ->get()
            ->toArray();
        // print_r( $query );exit;
        $results = [];
        foreach ($query as $item) {
            $results[$item['posted_date']][] = [
                'id' => $item['id'],
                'title' => $item['title'],
                'age' => $item['age'],
                'location' => $item['location']
            ];
        }

        return $results;
    }
    
    public function getViewPost($id, $sid){

        $query = Posts::from('posts')
            ->where('city_id', $id)
            ->where('sub_category_id', $sid)
            ->where('is_premium_ad', '0')
            ->select('id','title','age', 'location', DB::raw("DATE_FORMAT(created_at, '%d %b %Y') as posted_date"))
            ->orderBy('created_at', 'DESC')
            ->groupBy('created_at')
            ->get()
            ->toArray();

        $results = [];
        foreach ($query as $item) {
            $results[$item['posted_date']][] = [
                'id' => $item['id'],
                'title' => $item['title'],
                'age' => $item['age'],
                'location' => $item['location']
            ];
        }

        return $results;
    }

    


    public function getPostPreviewDetails($id) {
        $query = Posts::from('posts as ps')
                ->join('sub_category as sc', 'sc.id', '=', 'ps.sub_category_id')
                ->where('ps.id', $id)
                ->get()->toArray();
        return $query;
    }



    public function getPostsDetails($pid){
         $array=Posts::from('posts')
            ->where('id', $pid)
            ->select('id', 'title', 'description', 'location', 'age', 'created_at', 'contact_email', 'mobile_number')
            ->get()
            ->toArray();
        return $array;
    }

    public function getViewPostDetail($pid){
        $array=posts::from('posts as ps')
            ->join('category', 'category.id', '=', 'ps.category_id')
            ->where('ps.id', $pid)
            ->select('ps.id', 'ps.title', 'ps.description', 'ps.location', 'ps.age', 'ps.created_at', 'ps.contact_email', 'ps.mobile_number', 'category.category as category')
            ->get()
            ->toArray();
        return $array;
    }

    public function getPostList($userId, $request) {

        $requestData = $_REQUEST;
        $columns = array(
            // datatable column index  => database column name
            0 => 'ps.id',
            1 => 'ps.title',
            2 => 'city.city',
            3 => 'sc.category',
            4 => 'ps.is_premium_ad',
            5 => 'ps.is_sponsor_ad',
            6 => 'ps.is_expire',
            7 => 'ps.created_at',

        );
        $query = Posts::from('posts as ps')
                ->join('category as sc', 'sc.id', '=', 'ps.category_id')
                ->join('city as city', 'city.id', '=', 'ps.city_id')
                ->where('ps.user_id',$userId);


        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                $flag = 0;
                    foreach ($columns as $key => $value) {
                        $searchVal = $requestData['search']['value'];
                        if ($key == 5) {
                             $searchVal = date('Y-m-d', strtotime($searchVal));
                        }
                        if ($requestData['columns'][$key]['searchable'] == 'true') {
                            if ($flag == 0) {
                                    $query->where($value, 'like', '%' . $searchVal . '%');
                                    $flag = $flag + 1;
                            } else {
                                    $query->orWhere($value, 'like', '%' . $searchVal . '%');
                            }
                        }
                    }
            });
        }

        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);

        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());

        $resultArr = $query->skip($requestData['start'])
                ->take($requestData['length'])
                ->select('ps.id','ps.created_at', 'ps.title', 'city.city','sc.category','ps.is_premium_ad','ps.is_sponsor_ad','ps.is_expire')
                ->get();

        $data = array();
        $countId=0;
        foreach ($resultArr as $row) {

            $nestedData = array();
            $actionHtml = '';
                $nestedData[] = date('d-m-Y', strtotime($row["created_at"]));
                $nestedData[] = $row["title"];
                $nestedData[] = $row["city"];
                $nestedData[] = $row["category"];
                $nestedData[] = $row["is_premium_ad"];
                $nestedData[] = $row["is_sponsor_ad"];
                $nestedData[] = (isset($row["is_expire"]) && $row["is_expire"] == '1') ? '<span class="text-sm leading-5 font-bold text-red-700">Expired</span>' : '<span class="text-sm leading-5 font-bold text-green-700">Active</span>';
                
                $actionHtml .= '<li><a href="'. route('edit-free-ad-post-data', array('id' => $row['id'])) .'" class="link-black text-sm" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil  "></i></a></li>';
                $actionHtml .= '<li><a href="'. route('view-post-details', array('id' => $row['id'])) .'" class="link-black text-sm" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-eye"></i></a></li>';
                $actionHtml .= '<li><button type="button" class="delete openDeleteModal" data-id="'.$row['id'].'" ><span class="fa fa-trash""></span></button></li>';
                if($row["is_expire"] == 1){
                    $actionHtml .= '<li><button type="button" class="update updateStatus" data-id="'.$row['id'].'" ><span class="text-base leading-5 font-bold text-green-800">Activate</span></button></li>';
                }
                $action = '<div class="action-overlay">
                             <ul class="icon-actions-set flex space-x-4">
                              ' . $actionHtml . '
                            </ul>
                        </div>';
            $nestedData[] = $action;
            $data[] = $nestedData;
        }

        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );

        return $json_data;
    }


    public function saveMultipleAdposts($request) {

        $user_id = Auth::user()->id;
        $getCurrentCredit= User::select('credits')->where('id', $user_id)->get()->toArray();

        if($getCurrentCredit[0]['credits']>=$request->input('totla__amount_value')){
            if($request->input('is_premium_ad') == "1"){
                $updatedCredit = $getCurrentCredit[0]['credits'] - $request->input('totla__amount_value') -4;
            } else{
                $updatedCredit = $getCurrentCredit[0]['credits'] - $request->input('totla__amount_value');
            }
            $objUser = user::find($user_id);
            $objUser->credits = $updatedCredit;
            $objUser->update();

            $objTransaction = new Transaction();
            $objTransaction->status = "debit";
            $objTransaction->code = "ABC123";
            if($request->input('is_premium_ad') == "1"){
                $updateTransactionAmount = $request->input('totla__amount_value') + 4;
            } else{
                $updateTransactionAmount = $request->input('totla__amount_value');
            }
            $objTransaction->amount = $updateTransactionAmount;
            $objTransaction->user_id = Auth::user()->id;
            $objTransaction->save();

            $multipleCities = $request->input('city_ids');
            $i = 0;
            $fisrtPostId = array();
            foreach($multipleCities as $multipleCityID){
                $getCountryStateID = City::from('city')->where('id', $multipleCityID)->select('country_state_id')->get();
                $objService = new Posts();
                $objService->continent_id = $request->input('continent_id');
                $objService->country_state_id = $getCountryStateID[0]->country_state_id;
                $objService->city_id = $multipleCityID;
                $objService->category_id =$request->input('category_id');
                $objService->sub_category_id =$request->input('sub_category_id');
                $objService->user_id = Auth::user()->id;
                $objService->title = $request->input('title');
                $objService->description = $request->input('description');
                $objService->age = $request->input('age');
                $objService->location = $request->input('location');
                $objService->contact_email = $request->input('contact_email');
                $objService->mobile_number = $request->input('mobile_number');
                $objService->is_premium_ad = (!empty($request->input('is_premium_ad'))) ? '1' : '0';
                $objService->save();
                if($files=$request->file('file')){
                    if($i == 0){
                        array_push($fisrtPostId,$objService->id);
                        foreach ($files as $file) {

                            $data=new PostsAttechment;
                            $name= date('YmdHis').$file->getClientOriginalName();
                            $destinationPath = public_path('/uploads/');
                            $file->move($destinationPath, $name);
                            $data->file_name=$name;
                            $data->post_id= $objService->id;
                            $data->file_path="/uploads/$name";
                            $data->save();

                            unset($data);
                        }
                    } else {
                        $findPostId = PostsAttechment::where('post_id',$fisrtPostId[0])->get();
                        foreach ($findPostId as $fileArray) {
                            $otherFiles=new PostsAttechment;
                            $otherFiles->file_name=$fileArray->file_name;
                            $otherFiles->post_id= $objService->id;
                            $otherFiles->file_path=$fileArray->file_path;
                            $otherFiles->save();
                        }
                    }
                }
                $i++;
            }
            return $objService->id;
        } else {
            return false;
        }

    } 

    public function deletePost($request){
        $returnpost = Posts::where('id','=', $request->id)
                    ->delete();
        if($returnpost){
            $request->session()->flash('session_success', 'Post Data Deleted Sucessfuly.');
            return redirect(route('manage-ads', $returnpost));
        }else{
            $request->session()->flash('session_error', 'Something will be wrong. Please try again.');
            return redirect(route('manage-ads'))->withInput();
        }
    }

    public function updateIsExpired($request)
    {
        $status =(isset($row["is_expire"]) && $row["is_expire"] == '1') ? 'Expired' : '-';
        $status = Posts::find($request->id);
        $status->is_expire = '0';
        $status->update();
        $user_id = Auth::user()->id;
        $getCurrentCredit= User::select('credits')->where('id', $user_id)->get()->toArray();
        if($status){
            $creditUpdated = $getCurrentCredit[0]['credits']-2;
            $objUser = user::find($user_id);
            $objUser->credits = $creditUpdated;
            $objUser->update();

            $objTransaction = new Transaction();
            $objTransaction->status = "debit";
            $objTransaction->code = "ABC123";
            $objTransaction->amount = '2';
            $objTransaction->user_id = Auth::user()->id;
            $objTransaction->save();
        }
        return response()->json(['success'=>'Status change successfully.']);
    }

   
}
