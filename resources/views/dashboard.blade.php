@include('layouts.header')
<body>
    @include('layouts.top-bar')

    <div class="admin_top">
        <div class="header_sec" id="mobile_menu_dv">
        @include('layouts.side-bar')
        <div class="das_left">
            <div class="das_inr">
                <div class="das_pagi">
                    <h1>Dashborder</h1>
                </div>
                <div class="das_bx">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="das_bx_panel">
                                <div class="das_bx_tx">
                                    <span>11452</span>
                                </div>
                                <em><i class="fa fa-shopping-cart"></i></em>
                                <main>
                                    <div class="chart">
                                    <canvas id="myChart"></canvas>
                                    </div>
                                </main>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="das_bx_panel">
                                <div class="das_bx_tx">
                                    <span>11452</span>
                                </div>
                                    <em><i class="fa fa-shopping-cart"></i></em>
                                    <main>
                                    <div class="chart">
                                    <canvas id="myChart2"></canvas>
                                    </div>
                                </main>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="das_bx_panel">
                                <div class="das_bx_tx">
                                    <span>2314</span>
                                </div>
                                <em><i class="fas fa-gem"></i></em>
                                <main>
                                    <div class="chart">
                                    <canvas id="myChart3"></canvas>
                                    </div>
                                </main>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="das_bx_panel">
                                <div class="das_bx_tx">
                                    <span>14,208</span>
                                </div>
                                <em><i class="fa fa-users"></i></em>
                                <main>
                                    <div class="chart">
                                    <canvas id="myChart4"></canvas>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grap_bx_panel">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="grap_bx">
                                <h4 class="title_his">Order Book Summary</h4>
                                <div class="graph" id="example"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="grap_bx2">
                                <h4 class="title_his">Balance History</h4>
                                <div id="chartContainer" style="height: 300px; max-width: 920px; margin: 0px auto;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listing_table">
                    <h4 class="title_his">Order History</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Item</th>
                                <th>Customers Name</th>
                                <th>Payment Info</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#Order-78478</td>
                                <td>Gold</td>
                                <td>Puja Sen</td>
                                <td>Credit Card</td>
                                <td>$12,000</td>
                                <td>Progress</td>
                            </tr>
                            <tr>
                                <td>#Order-78419</td>
                                <td>Gold</td>
                                <td>Tumpa Sengupta</td>
                                <td>Credit Card</td>
                                <td>$12,000</td>
                                <td>Complited</td>
                            </tr>
                            <tr>
                                <td>#Order-7890</td>
                                <td>Gold</td>
                                <td>Puja Sen</td>
                                <td>Credit Card</td>
                                <td>$12,000</td>
                                <td>Progress</td>
                            </tr>
                            <tr>
                                <td>#Order-79014</td>
                                <td>Gold</td>
                                <td>Puja Sen</td>
                                <td>Credit Card</td>
                                <td>$12,000</td>
                                <td>Complited</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')

</body>
</html>
