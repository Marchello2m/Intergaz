@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Inactive clients</div>
                    <div class="card-body">
                        <p>You are in inactive clients</p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Klienta Nosaukums</th>
                                <th scope="col">Piegādes Addrese</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                            <tr>
                                <th scope="row"></th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->title}}</td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
