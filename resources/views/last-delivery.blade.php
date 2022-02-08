@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Last delivery</div>
                    <div class="card-body">
                        <p>You are in Last delivery</p>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Klienta nosaukums</th>
                                <th scope="col">Piegādes addrese</th>
                                <th scope="col">Preces</th>
                                <th scope="col">Preces Summa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                            <tr>
                                <th scope="row"></th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->item}}</td>
                                <td>{{$item->price}}</td>

                            </tr>

                            @endforeach
                            <tfooter>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Summtotal</th>
                            </tfooter>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>kaut kas</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
