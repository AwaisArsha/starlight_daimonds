<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DataTables;
use App\Models\FillingModel;
use App\Models\WorkerModel;

class FillingController extends Controller
{
    public function fillingform(Request $request)
    {
        $worker = WorkerModel::withTrashed()->get();
        return view('manufracture.filling.form',['workers'=>$worker]);
    }

    public function fillingupload(Request $request)
    {
        $data   = $request->all();
        $time = strtotime('10/16/2003');

        $newformat = date('Y-m-d',$time);

        $input_arr  = array(
            "order_no"=> $data["order_no"],
            "date"=> $newformat,
            "gms_issued"=>$data["gms_issued"],
            "weight"=>$data["weight"],
            "unique_id"=>$data["unique_id"],
            "worker_id"=>$data["worker_id"],
            "karat"=>$data["karat"],
            "status"=>$data["status"],
         );

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
                    ->addColumn('received', function ($row) {
                        return '--';
                    })
                    ->addColumn('wastage', function ($row) {
                        return '0';
                    })
                    ->addColumn('worker', function ($row) {
                        $workername = WorkerModel::where('id', $row['worker_id'])->withTrashed()->first();
                        return $workername['name'];
                    })
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
