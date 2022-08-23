<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DataTables;
use App\Models\PrePolishModel;
use App\Models\WorkerModel;

class PrePolishController extends Controller
{
    public function prepolishform(Request $request)
    {
        $worker = WorkerModel::withTrashed()->get();
        return view('manufracture.prepolish.form',['workers'=>$worker]);
    }

    public function prepolishupload(Request $request)
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
            "status"=>$data["status"],
         );

        $inser_id = PrePolishModel::insertGetId($input_arr);
        if($inser_id)
        {
            return redirect()->intended('prepolish');
        }else{
            print_r("Not Entered");
            die();
        }
    }

    public function prepolish(Request $request)
    {
        if ($request->ajax()) {
            $data = PrePolishModel::withTrashed()->get();
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

        return view('manufracture.prepolish.history');
    }

    public function prepolishstatus()
    {
        # code...
        return view('manufracture.prepolish.status');
    }
}
