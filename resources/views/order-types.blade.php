@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Order types</div>
                    <div class="card-body">
                        <p>You are in OrderTypes</p>

                        <p>Jāsakarto pec piegādes tipiem</p>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Klienta nosaukums:</th>
                                <th scope="col">Piegādes adrese:</th>
                                <th scope="col">Piegādes Statuss:</th>


                            </tr>
                            </thead>
                            <tbody>
                          @foreach($data as $item)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->title}}</td>
                                    @if($item->type=='1')
                                    <td>Škidrā prece</td>


                                    @else
                                        <td>Cietā prece</td>
                                      @endif
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
