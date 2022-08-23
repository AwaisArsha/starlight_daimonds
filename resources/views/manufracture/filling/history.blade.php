@include('layouts.header')
<body>
    @include('layouts.top-bar')

    <div class="admin_top">
        <div class="header_sec" id="mobile_menu_dv">
        @include('layouts.side-bar')
        <div class="das_left">
            <div class="das_inr">
                <div class="das_pagi">
                    <h1>Filling History</h1>
                    <div class="add_btn">
                        <a class="add_bt_fm" href="{{url('fillingform')}}"><i class="fa fa-plus"></i></a>
                    </div>
                </div>

                <div class="listing_table pro_lis book_or_tab">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered data-table">
                            <thead>
                              <tr>
                                <th>Sl</th>
                                <th>Date</th>
                                <th>Order No</th>
                                <th>Unique ID</th>
                                <th>Karat</th>
                                <th>Gma Issued</th>
                                <th>Received</th>
                                <th>Wastage</th>
                                <th>Worked BY</th>
                                <th>Status</th>
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
          ajax: "{{ url('fillinghistory') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'date', date: 'name'},
              {data: 'order_no', name: 'order_no'},
              {data: 'unique_id', name: 'unique_id'},
              {data: 'karat', name: 'karat'},
              {data: 'gms_issued', name: 'gms_issued'},
              {data: 'received', name: 'received'},
              {data: 'wastage', name: 'wastage'},
              {data: 'worker', name: 'worker'},
              {data: 'status', name: 'status'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

    });
  </script>
</html>
