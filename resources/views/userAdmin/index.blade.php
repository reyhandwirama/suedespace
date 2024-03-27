<a href="/userAdmin/create">Tambahkan userAdmin</a>
<table border="1">
    <tr>
        <td>User ID </td>
        <td>USERNAME</td>
        <td>PASSWORD</td>
        <td>userFullName</td>
        <td>userIMG</td>
    </tr>
    @foreach($admin as $a)
    <tr>
        <td>{{$a->user_id}}</td>
        <td>{{$a->username}}</td>
        <td>{{$a->password}}</td>
        <td>{{$a->userFUllName}}</td>
        <td>{{$a->userIMG}}</td>
        <td><a href="/userAdmin/{{ $a->user_id }}/edit">Edit</a></td>
        <td><form action="userAdmin/delete/{{ $a->user_id }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form></td>
    </tr>
    @endforeach
</table>
