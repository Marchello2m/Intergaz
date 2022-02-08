@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Klientu piegādes</div>
                    <div class="card-body">
                        <h2>{{$data->name}}</h2>

                        <div class=" bg-light p-3 border">
                            <tr>


                                <li class="p-2"> Vārds: {{$data->name}}</li>
                                <li class="p-2"> Telefona numburs: {{$data->phone}}</li>
                                <li class="p-2"> E-pasts: {{$data->email}}</li>
                                <li class="p-2"> ID: {{$data->client_id}}</li>



                            </tr>
                        </div>
                        <div class=" bg-light p-3 border">
                            <table class="table caption-top">

                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Piegādes adrese:</th>
                                    <th scope="col">Piegādes datums:</th>
                                    <th scope="col">Preču summa:</th>
                                    <th scope="col">Piegādes status:</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>

                                </tbody>
                            </table>











                        </div>



                        <table >

                            <tbody>
                  {{-- }}         @foreach($data as $item)
                                <tr>


                                       <td class="p-3 ">{{$item->title}}</td>
                                    <td class="p-3 ">{{$item->name}}</td>
                                    <td class="p-3 ">{{$item->date}}</td>
                                    <td class="p-3 ">{{$item->price}}</td>
                                    <td class="p-3 ">{{$item->status}}</td>

                                </tr>
                            @endforeach
--}}
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
