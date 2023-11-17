@extends('main')
@section('title') Admin Home @endsection

@section('body')
    <h2>User Management</h2>
    <a href="logout">Logout</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('admin.edit', $user->id) }}">Edit</a>
                        <form method="post" action="{{ route('admin.destroy', $user->id) }}" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</td>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection 


