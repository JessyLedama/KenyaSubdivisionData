@extends('layouts.nav')

@section('content')
    <section class="main-content">
        <div class="row counties-table">
            <div class="col-md-12">
                <div class="card">
                    <h3> Kenyan Regions ({{ $regionsCount }})</h3>
                </div>
                <div class="table-container flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <table class="table table-data">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"> Region Name </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($regions as $region)
                            <tr>
                                <td class="td-name"> {{ $region->name }} </td>
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
    </section>
@endsection