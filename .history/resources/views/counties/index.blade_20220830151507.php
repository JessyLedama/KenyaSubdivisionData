@extends('layouts.nav')

@section('content')
    <section class="main-content">
        <div class="row counties-table">
            <div class="col-md-12">
                <div class="card">
                    <h3> Kenyan Counties ({{ $countiesCount }})</h3>
                </div>
                @if(count($counties) > 0)
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        <table class="table table-data">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="td-name" scope="col"> County Code </th>
                                    <th class="td-name" scope="col"> County Name </th>
                                    <th class="td-name" scope="col"> Region </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($counties as $county)
                                <tr>
                                    <td class="td-name"> {{ $county->county_code }} </td>
                                    <td class="td-name"> {{ $county->county_name }} </td>
                                    <td class="td-name"> {{ $county->region->name }} </td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td> {{ $counties->links() }} </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                @else
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        <div class="no-data">
                            <span> 
                                There is no data to display here. Try running <code>php artisan db:seed</code> on your command line
                            </span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection