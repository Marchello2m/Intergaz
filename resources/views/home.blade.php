@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col">
                <table>
                    <thead>
                    <tr>
                        <th class="p-3">client_id</th>
                        <th class="p-3">id</th>
                        <th class="p-3">client Name</th>
                        <th class="p-3">client address</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td class=" p-3" >{{$item->client_id}}</td>
                            <td class=" p-3" >{{$item->id}}</td>
                            <td class="p-3 ">{{$item->name}}</td>
                            <td class="p-3 ">{{$item->title}}</td>
                            <td>

                                <button id="3" onClick="GFG_click({{$item->client_id}})">
                                    Parādīt addreses
                                </button>
                            </td>


                            <td>
                                <button><a href="{{ url('client/'.$item->client_id) }}">Atvērt piegādes</a></button>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>



            <div class="col">




                <h1>INfo</h1>
                <h2>Addresses:</h2>
                <ul>

                    <p id = "itemsId" ></p>
                 <p id = "itemsTitle" ></p>




                </ul>


                </div>


    </div>
        </div>


    <script type="text/javascript">

        function GFG_click(clicked) {
                document.getElementById("itemsId").innerHTML = "ID = "+clicked;
        }

    </script>


@endsection
