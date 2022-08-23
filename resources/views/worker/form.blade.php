@include('layouts.header')
<body>
    @include('layouts.top-bar')

    <div class="admin_top">
        <div class="header_sec" id="mobile_menu_dv">
        @include('layouts.side-bar')
        <div class="das_left">
            <div class="das_inr">
                <div class="das_pagi">
                    <h1>Workar</h1>
                    <div class="add_btn">
                        <a class="add_bt_fm" href="{{url('workers')}}"><i class="fa fa-angle-double-left"></i></a>
                    </div>
                </div>
                <div class="from_panel">
                    <form method="POST" action="{{ url('workerform') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="from_bx">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Name</label>
                                            <input type="text" placeholder="Enter here" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Phone</label>
                                            <input type="text" placeholder="Enter here" id="phone" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Email</label>
                                            <input type="text" placeholder="Enter here" id="email" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Aadhaar</label>
                                            <input type="text" placeholder="Enter here" id="aadhaar" name="aadhaar" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Address</label>
                                            <input type="text" placeholder="Enter here" id="address" name="address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="uplodimg">
                                          <div class=" input_frm">
                                              <label>Upload File</label>
                                              <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                              <label for="file-1">Upload File <img src="assets/images/upload_img.png" alt=""></label>
                                          </div>
                                          <div class="uplodimg_pick">
                                            <img src="assets/images/doc1.png" alt="">
                                          </div>
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
