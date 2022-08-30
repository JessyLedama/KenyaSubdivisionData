@extends('layouts.nav')

@section('content')
    <section class="main-content">
        <div class="row counties-table">
            <div class="col-md-12">
                <div class="card">
                    <h3> Kenyan Wards ({{$wardsCount}})</h3>
                </div>
                <div class="table-container flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <table class="table table-data">
                        <thead class="thead-dark">
                            <tr>
                                <th class="td-name" scope="col"> Ward Name </th>
                                <th class="td-name" scope="col"> Sub County/Constituency </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($wards as $ward)
                            <tr>
                                <td class="td-name"> {{ $ward->name }} </td>
                                <td class="td-name"> {{ $ward->subcounty->name }} </td>
                            </tr>
                            @endforeach

                            <tr>
                                <td class="td-name"> {{ $wards->links() }} </td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection