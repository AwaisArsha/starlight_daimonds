<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DataTables;
use App\Models\OrderModel;

class FillingController extends Controller
{
    public function fillingform(Request $request)
    {
        return view('manufracture.filling.form');
    }

    public function fillingupload(Request $request)
    {
        $data   = $request->all();
        $time = strtotime('10/16/2003');

        $newformat = date('Y-m-d',$time);

        $input_arr  = array(
            "client_name"=> $data["client_name"],
            "date"=> $newformat,
            "unique_id"=>$data["unique_id"],
            "product_name"=>$data["product_name"],
            "size"=>$data["size"],
            "purity"=>$data["purity"],
            "metal_color"=>$data["metal_color"],
            "gross_weight"=>$data["gross_weight"],
            "gr_approx"=>$data["gr_approx"],
            "status"=>$data["status"],
            "comments"=>$data["comments"]
         );

        if($request->hasFile('file-1')){
            $file = $request->file('file-1')[0];
            $file->store('img/');
            $path =  public_path().'/storage/uploads/meal/';
            $file_name= uniqid().'_'.$file->getClientOriginalName();
            $file->move($path, $file_name);
            $input_arr['file_url'] = $file_name;
        }
        $inser_id = fillingModel::insertGetId($input_arr);
        if($inser_id)
        {
            return redirect()->intended('fillinghistory');
        }else{
            print_r("Not Entered");
            die();
        }
    }

    public function fillinghistory(Request $request)
    {
        if ($request->ajax()) {
            $data = FillingModel::withTrashed()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('status', function ($row) {
                        return ($row['status'])?'Completed':'Opened';
                    })
                    ->addColumn('action', function($row){

                            $btn = '<div class="action_div">
                            <ul>
                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
                                <li><a href="#"><i class="fas fa-edit"></i></a></li>
                                <li><a href="#">​<i class="fas fa-trash"></i></a></li>
                            </ul>
                        </div>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('manufracture.filling.history');
    }

    public function fillingstatus()
    {
        # code...
        return view('manufracture.filling.status');
    }
}
