@include('layouts.header')
<body>
    @include('layouts.top-bar')

    <div class="admin_top">
        <div class="header_sec" id="mobile_menu_dv">
        @include('layouts.side-bar')
        <div class="das_left">
            <div class="das_inr">
                <div class="das_pagi">
                    <h1>Buffing Form</h1>
                    <div class="add_btn">
                        <a class="add_bt_fm" href="{{url('prepolish')}}"><i class="fa fa-angle-double-left"></i></a>
                    </div>
                </div>
                <div class="from_panel">
                    <form method="POST" action="{{ url('prepolishform') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="from_bx">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Order No</label>
                                            <input type="text" placeholder="Enter here" id="order_no" name="order_no" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Date</label>
                                            <input type="text" placeholder="Enter here" class="datepicker" id="date" name="date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Unique ID</label>
                                            <input type="text" placeholder="Enter here" id="unique_id" name="unique_id" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Gms Issued</label>
                                            <input type="text" placeholder="Enter here" id="gms_issued" name="gms_issued" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Weight</label>
                                            <input type="text" placeholder="Enter here" id="weight" name="weight" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Worked By</label>
                                            <select id="worker_id" name="worker_id" required>
                                                @if($workers)
                                                    @foreach($workers as $worker)
                                                        <option value="{{$worker['id']}}" style="background-color: #000;border-radius: 5px;display: inline-block;" >{{UcFirst($worker['name'])}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Status</label>
                                            <select id="status" name="status" required>
                                                <option value="1">Complete</option>
                                                <option value="0">Open</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="sub_mit_btn">
                                            <button class="sub_btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

</body>
</html>
