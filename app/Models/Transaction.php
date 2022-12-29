<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = ['id', 'code', 'amount', 'start', 'created_at'];

    public function getTransactionList($userId, $request) {

        $requestData = $_REQUEST;
        $columns = array(
            // datatable column index  => database column name
            0 => 'id',
            1 => 'code',
            2 => 'amount',
            3 => 'status',
            4 => 'created_at',

        );
        $query = transaction ::from('transactions')
                ->select('id', 'code', 'amount', 'status', 'created_at')
                ->where('user_id',$userId);


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
                ->select('id', 'code', 'amount', 'status', 'created_at')
                ->get();

        $data = array();
        $countId=0;
        foreach ($resultArr as $row) {

            $nestedData = array();
            $actionHtml = '';
                $nestedData[] = date('d-m-Y', strtotime($row["created_at"]));
                $nestedData[] = $row["code"];
                $nestedData[] = $row["amount"];
                $nestedData[] = $row["status"];
                $actionHtml .= '<li><a href="'. route('edit-free-ad-post-data', array('id' => $row['id'])) .'" class="link-black text-sm" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil  "></i></a></li>';
                $actionHtml .= '<li><button type="button" class="delete openDeleteModal" data-id="'.$row['id'].'" ><span class="fa fa-trash""></span></button></li>';
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

    public function saveTransaction($request){

        $objService = new Transaction();
        $objService->code = $request->input('code');
        $objService->amount = $request->input('credit_amount');
        $objService->user_id = Auth::user()->id;
        $objService->save();
    }


}
