<h1>Add Member to DB</h1>

<form action="addMemberData" method="POST">
    @csrf
    <input type="text" name="full_name" placeholder="Enter Full Name"/><br/><br/>
    <input type="email" name="email" placeholder="Enter Email"/><br/><br/>
    <input type="text" name="address" placeholder="Enter Address"/><br/><br/>

    <button type="submit">Submit</button>
</form>