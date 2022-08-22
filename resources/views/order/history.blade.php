@include('layouts.header')
<body>
    @include('layouts.top-bar')

    <div class="admin_top">
        <div class="header_sec" id="mobile_menu_dv">
        @include('layouts.side-bar')
        <div class="das_left">
            <div class="das_inr">
                <div class="das_pagi">
                    <h1>Order History</h1>
                    <div class="add_btn">
                        <a class="add_bt_fm" href="{{url('orderform')}}"><i class="fa fa-plus"></i></a>
                    </div>
                </div>

                <div class="listing_table pro_lis book_or_tab">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered data-table">
                            <thead>
                              <tr>
                                <th>Sl</th>
                                <th>Order No</th>
                                <th>Unique ID</th>
                                <th>Date</th>
                                <th>Client Name</th>
                                <th>Product</th>
                                <th>Size</th>
                                <th>Karat</th>
                                <th>Colour</th>
                                <th>Total Gross Weight</th>
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
          ajax: "{{ url('orderhistory') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'id', name: 'id'},
              {data: 'unique_id', name: 'unique_id'},
              {data: 'date', name: 'date'},
              {data: 'client_name', name: 'client_name'},
              {data: 'product_name', name: 'product_name'},
              {data: 'size', name: 'size'},
              {data: 'purity', name: 'purity'},
              {data: 'metal_color', name: 'metal_color'},
              {data: 'gross_weight', name: 'gross_weight'},
              {data: 'status', name: 'status'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

    });
  </script>
</html>
