<h1>File Upload</h1>


<form action="uploadFile" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="myFile">

    <br/>
    <br/>
    <br/>
    <button type="submit">Upload</button>
</form>