<h1>List from Database</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
    </thead>

    <tbody>
        @foreach($memberList as $list)
        <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->full_name}}</td>
            <td>{{$list->email}}</td>
            <td>{{$list->address}}</td>
        </tr>
        @endforeach
    </tbody>
</table>