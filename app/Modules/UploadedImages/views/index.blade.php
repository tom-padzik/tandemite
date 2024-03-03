@extends('components.layouts.base')

@section('content')

    <table style="text-align: center; width: 100%; border: 1px solid black">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Image</th>
        </tr>

        @foreach($uploaded ?? [] as $row)
            <tr>
                <td>
                    {{ $row['name'] }}
                </td>

                <td>
                    {{ $row['surname'] }}
                </td>

                <td>
                    <a target="_blank" href="{{ url('images/' . $row['image'])}}">
                        <img src="{{ url('images/' . $row['image'])}}" alt="image" style="max-height: 100px"/>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection