@extends('layouts.nav')

@section('content')
    <section class="main-content">
        <div class="row counties-table">
            <div class="col-md-12">
                <div class="card">
                    <h3> Kenyan Sub Counties </h3>
                </div>
                <div class="table-container flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th <body class="container fluid">
        <div class="row counties-table">
            <div class="col-md-12">
                <div class="card">
                    <h3> Kenyan Sub Counties </h3>
                </div>
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"> Sub County Name </th>
                                <th scope="col"> County </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subCounties as $subCounty)
                            <tr>
                                <td> {{ $subCounty->name }} </td>
                                <td> {{ $subCounty->county->county_name }} </td>
                            </tr>
                            @endforeach

                            <tr>
                                <td> {{ $subCounties->links() }} </td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </body> scope="col"> Sub County Name </th>
                                <th <body class="container fluid">
        <div class="row counties-table">
            <div class="col-md-12">
                <div class="card">
                    <h3> Kenyan Sub Counties </h3>
                </div>
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"> Sub County Name </th>
                                <th scope="col"> County </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subCounties as $subCounty)
                            <tr>
                                <td> {{ $subCounty->name }} </td>
                                <td> {{ $subCounty->county->county_name }} </td>
                            </tr>
                            @endforeach

                            <tr>
                                <td> {{ $subCounties->links() }} </td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </body> scope="col"> County </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subCounties as $subCounty)
                            <tr>
                                <td> {{ $subCounty->name }} </td>
                                <td> {{ $subCounty->county->county_name }} </td>
                            </tr>
                            @endforeach

                            <tr>
                                <td> {{ $subCounties->links() }} </td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection