@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3>Klientu piegādes</h3></div>
                    <div class="card-body">
                        <h2><strong> {{ $data->name }}</strong></h2>

                        <div class=" bg-light p-3 border">
                            <tr>

                                <li class="p-2"> Vārds: {{ $data->name }} </li>
                                <li class="p-2"> Telefona numburs: {{ $data->phone }} </li>
                                <li class="p-2"> E-pasts: {{ $data->email }} </li>
                                <li class="p-2"> ID: {{ $data->id }} </li>


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
                                                   <th scope="row">{{$addresse->client_id}}</th>
                                                        <td>{{$addresse->title}}</td>

                                                        <td>{{$routes->date}}</td>
                                                        <td>{{$price->price}}</td>

                                                        @if($routes->status=='1')
                                                            <td>Izveidots</td>
                                                        @elseif($routes->status=='2')
                                                            <td>Ieplānots</td>
                                                        @else
                                                            <td>Slēgts</td>
                                                        @endif

                                </tr>

                                </tbody>
                            </table>


                        </div>


                        <table>

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
