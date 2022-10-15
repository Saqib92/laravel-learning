<h1>Login</h1>


<form action="loginPost" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Enter Email">
    <br/><br/>

    <input type="password" name="password" placeholder="Enter PAssword">
    <br/><br/>

    <button type="submit">Submit</button>
</form>