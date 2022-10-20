<h1>
    QueryList from DB
</h1>

<table border="1">
    <thead>
        <tr>
            <th>S.no</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $item)       
        <tr>
            <td>{{$key + 1}}</td>
            <td>
                {{$item->id}}
            </td>
            <td>
                {{$item->full_name}}
            </td>
            <td>
                {{$item->email}}
            </td>
            <td>
                {{$item->address}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>