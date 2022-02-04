@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>
                    <div class="card-body">
                        <form action="show" method="GET">

                            <table >
                                <thead >
                                <tr>

                                    <th class="p-3">client_id</th>

                                    <th class="p-3">client Name</th>
                                    <th class="p-3">client phone</th>
                                    <th class="p-3">client email</th>

                                    <th class="p-3">Created_at</th>


                                </tr>
                                </thead>

                                <tbody>
                                @foreach($data as $item)
                                    <tr >
                                        <td class="p-3">{{$item->id}}</td>
                                        <td class="p-3 ">{{$item->name}}</td>
                                        <td class="p-3 ">{{$item->phone}}  </td>
                                        <td class="p-3 ">{{$item->email}}  </td>
                                        <td class="p-3">{{$item->created_at}}</td>


                                              <td><button>Parādīt addresi</button></td>
                                              <td><button>Atvērt piegādes addresi</button></td>
                                    </tr>

                                @endforeach
                                </tbody>

                            </table>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
