<h1>List from Database</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($memberList as $list)
        <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->full_name}}</td>
            <td>{{$list->email}}</td>
            <td>{{$list->address}}</td>
            <td>
                <a href={{ "delete/" . $list['id'] }}>Delete</a>
                <a href={{ "edit/" . $list['id'] }}>Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>