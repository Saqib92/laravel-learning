<x-header componentProps="Login Header"/>


<form action="users" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Enter Email">
    <br/>
    <input type="password" name="password" placeholder="Enter Password">
    <br/>
    <button type="submit" class="btn btn primary">Login</button>

</form>