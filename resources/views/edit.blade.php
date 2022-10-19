<h1>Edit User from List</h1>

<form action="/saveMember" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$userData['id']}}">
    <input type="text" name="full_name" value="{{ $userData['full_name'] }}" />
    <br/>
    <br/>
    <input type="text" name="email" value="{{ $userData['email'] }}" />
    <br/>
    <br/>
    <input type="text" name="address" value="{{ $userData['address'] }}"/>
    <br/>
    <br/>

    <button type="submit">Update</button>
</form>
