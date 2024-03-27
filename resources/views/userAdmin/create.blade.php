<h1>Create Warga</h1>

<form action="/userAdmin/store" method="POST">
    @csrf
    <input type="text" name="user_id" placeholder="nUser ID"> <br>
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="password"> <br>
    <input type="text" name="userFullName" placeholder="userFullName"> <br>
    <input type="text" name="userIMG" placeholder="UserIMG"> <br>

    <input type="submit" name="submit" value="Save">
</form>
