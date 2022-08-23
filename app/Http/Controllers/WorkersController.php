<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DataTables;
use App\Models\WorkerModel;

class WorkersController extends Controller
{
    public function workers(Request $request)
    {
        if ($request->ajax()) {
            $data = WorkerModel::withTrashed()->get();
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

        return view('worker.history');
    }

    public function workerform(Request $request)
    {
        return view('worker.form');
    }

    public function createworker(Request $request)
    {
        $data   = $request->all();

        $input_arr  = array(
            "name"=> $data["name"],
            "phone"=>$data["phone"],
            "email"=>$data["email"],
            "aadhaar"=>$data["aadhaar"],
            "address"=>$data["address"],
         );

        if($request->hasFile('file-1')){
            $file = $request->file('file-1')[0];
            $file->store('img/');
            $path =  public_path().'/storage/uploads/meal/';
            $file_name= uniqid().'_'.$file->getClientOriginalName();
            $file->move($path, $file_name);
            $input_arr['file_url'] = $file_name;
        }
        $inser_id = WorkerModel::insertGetId($input_arr);
        if($inser_id)
        {
            return redirect()->intended('workers');
        }else{
            print_r("Not Entered");
            die();
        }
    }
}
