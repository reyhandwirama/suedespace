<h1>Edit userAdmin</h1>

<form action="/userAdmin/{{ $admin->user_id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="user_id" placeholder="nUser ID" value="{{ $admin->user_id }}"> <br>
    <input type="text" name="username" placeholder="username" value="{{ $admin -> username }}"><br>
    <input type="password" name="password" placeholder="password" value="{{ $admin->password }}"> <br>
    <input type="text" name="userFullName" placeholder="userFullName" value="{{ $admin->userFullName }}"> <br>
    <input type="text" name="userIMG" placeholder="UserIMG" value="{{ $admin->userIMG }}"> <br>

    <input type="submit" name="submit" value="Save">
</form>
