@extends('layouts.nav')

@section('content')
    <!--main content start-->
    <section id="main-content">

        <!-- Summery -->
        <div class="market-updates">
            <!-- Regions -->
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-8 market-update-left">
                        <h4>Regions</h4>
                        <h3>{{ $regionsCount }}</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <!-- Counties -->
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-8 market-update-left">
                        <h4>Counties</h4>
                        <h3>{{ $countiesCount }}</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <!-- Sub Counties -->
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-8 market-update-left">
                        <h4>Sub Counties</h4>
                        <h3>{{ $subCountiesCount }}</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <!-- Wards -->
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-8 market-update-left">
                        <h4> Wards </h4>
                        <h3>{{ $wardsCount }}</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>	

        <!-- Regions List-->
        <div class="row">
            <div class="panel-body">
                <div class="col-md-12 w3ls-graph">
                    <div class="agileinfo-grap">
                        <div class="agileits-box">
                            <header class="agileits-box-header clearfix">
                                <h3>Regions List</h3>
                            </header>

                            <div class="agileits-box-body clearfix">
                                <table>
                                    <thead>
                                        <th>Region name</th>
                                    </thead>
                                    <tbody>
                                        @foreach($regions as $region)
                                            <tr>
                                                <td> {{ $region->name }} </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Counties -->
        <div class="col-md-6 agile-calendar">
            <div class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
                    <span class="panel-title"> Counties List</span>
                </div>
                
                <div class="agile-calendar-grid">
                    <div class="page">
                        <table>
                            <thead>
                                <th>County name</th>
                                <th> County Code </th>
                            </thead>
                            <tbody>
                                @foreach($counties as $county)
                                    <tr>
                                        <td> {{ $county->county_name }} </td>
                                        <td> {{ $county->county_code }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                        {{ $counties->links() }}
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sub Counties -->
        <div class="col-md-6 w3agile-notifications">
            <div class="notifications">
                <!--Sub Counties-->
                <header class="panel-heading">
                        Sub Counties List
                </header>
                <div class="notify-w3ls">
                    <table>
                        <thead>
                            <th>County name</th>
                            <th> County Code </th>
                        </thead>
                        <tbody>
                            @foreach($subCounties as $subCounty)
                                <tr>
                                    <td> {{ $subCounty->name }} </td>
                                    <td> {{ $subCounty->county->county_name }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>
                                    {{ $subCounties->links() }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!--Sub Counties end-->
            </div>
            <div class="clearfix"> </div>
        </div>

        <!-- Wards List-->
        <div class="row">
            <div class="panel-body">
                <div class="col-md-12 w3ls-graph">
                    <div class="agileinfo-grap">
                        <div class="agileits-box">
                            <header class="agileits-box-header clearfix">
                                <h3>Wards List</h3>
                            </header>

                            <div class="agileits-box-body clearfix">
                                <table>
                                    <thead>
                                        <th>Ward name</th>
                                    </thead>
                                    <tbody>
                                        @foreach($wards as $ward)
                                            <tr>
                                                <td> {{ $region->name }} </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection  
        

