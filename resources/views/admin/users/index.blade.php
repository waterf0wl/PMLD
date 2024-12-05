<!-- resources/views/admin/users/index.blade.php
@extends('layouts.app')

@section('content')
    <h1>Manage Users</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user) }}">Edit</a>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection -->

<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Users</title>
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     </head>
     <body>
         <div class="container">
             <h1>Users</h1>
             <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
             @if(session('success'))
                 <div class="alert alert-success">{{ session('success') }}</div>
             @endif
             <table class="table">
                 <thead>
                     <tr>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Role</th>
                         <th>Actions</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($users as $user)
                         <tr>
                             <td>{{ $user->name }}</td>
                             <td>{{ $user->email }}</td>
                             <td>{{ implode(',', $user->roles) }}</td>
                             <td>
                                 <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
                                 <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger">Delete</button>
                                 </form>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </body>
     </html>
     ```
