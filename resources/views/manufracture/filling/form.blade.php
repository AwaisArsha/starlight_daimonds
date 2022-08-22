@include('layouts.header')
<body>
    @include('layouts.top-bar')

    <div class="admin_top">
        <div class="header_sec" id="mobile_menu_dv">
        @include('layouts.side-bar')
        <div class="das_left">
            <div class="das_inr">
                <div class="das_pagi">
                    <h1>Filling Form</h1>
                    <div class="add_btn">
                        <a class="add_bt_fm" href="{{url('orderhistory')}}"><i class="fa fa-angle-double-left"></i></a>
                    </div>
                </div>
                <div class="from_panel">
                    <form method="POST" action="{{ url('orderform') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="from_bx">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Client Name</label>
                                            <input type="text" placeholder="Enter here" id="client_name" name="client_name" required>
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
                                            <label>Product Name</label>
                                            <input type="text" placeholder="Enter here" id="product_name" name="product_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Size</label>
                                            <input type="text" placeholder="Enter here" id="size" name="size" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>tal Karat (Purity)</label>
                                            <select id="purity" name="purity" required>
                                                <option value="18k">18k</option>
                                                <option value="22k">22k</option>
                                                <option value="14k">14k</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input_frm_b">
                                            <span>Metal Color</span>
                                            <div class="dedio_bt">
                                                <ul>
                                                    <li>
                                                        <input id="redio1" type="radio" checked="" value="Yellow" name="metal_color">
                                                        <label for="redio1">Yellow</label>
                                                    </li>
                                                    <li>
                                                        <input id="redio2" type="radio" value="White" name="metal_color">
                                                        <label for="redio2">White</label>
                                                    </li>
                                                    <li>
                                                        <input id="redio3" type="radio" value="2 tone" name="metal_color">
                                                        <label for="redio3">2 tone</label>
                                                    </li>
                                                    <li>
                                                        <input id="redio4" type="radio" value="3 tone" name="metal_color">
                                                        <label for="redio4">3 tone</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>Gross Weight</label>
                                            <input type="text" placeholder="Enter here" id="gross_weight" name="gross_weight" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_frm">
                                            <label>GrApprox Gms</label>
                                            <input type="text" placeholder="Enter here" id="gr_approx" name="gr_approx" required>
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
                                        <div class="input_frm">
                                            <label>Comments</label>
                                            <textarea placeholder="Enter here" id="comments" name="comments" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="uplodimg">
                                          <div class="uplodimgfil uplodimgfil1">
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
