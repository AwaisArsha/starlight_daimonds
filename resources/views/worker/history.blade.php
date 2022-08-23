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
                        <a class="add_bt_fm" href="{{url('workerform')}}"><i class="fa fa-plus"></i></a>
                    </div>
                </div>

                <div class="listing_table pro_lis book_or_tab">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered data-table">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Aadhaar</th>
                                <th>Address</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

</body>

<script type="text/javascript">
    $(function () {

      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ url('workers') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'phone', name: 'phone'},
              {data: 'aadhaar', name: 'aadhar'},
              {data: 'address', name: 'address'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

    });
  </script>
</html>
