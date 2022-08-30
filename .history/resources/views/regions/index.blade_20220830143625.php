

@extends('layouts.nav')

@section('content')
    <body class="container fluid">
        <div class="row counties-table">
            <div class="col-md-12">
                <div class="card">
                    <h3> Kenyan Regions ({{ $regionsCount }})</h3>
                </div>
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"> Region Name </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($regions as $region)
                            <tr>
                                <td> {{ $region->name }} </td>
                            </tr>
                            @endforeach

                            <tr>
                                <td> {{ $regions->links() }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
@endsection