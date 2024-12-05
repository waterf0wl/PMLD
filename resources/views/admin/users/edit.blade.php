<!-- resources/views/admin/users/edit.blade.php
@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>
    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div>
            <label for="roles">Role</label>
            <select id="roles" name="roles" required>
                <option value="attacker" {{ $user->roles == 'attacker' ? 'selected' : '' }}>Attacker</option>
                <option value="defender" {{ $user->roles == 'defender' ? 'selected' : '' }}>Defender</option>
                <option value="administrator" {{ $user->roles == 'administrator' ? 'selected' : '' }}>Administrator</option>
            </select>
        </div>

        <button type="submit">Update</button>
    </form>
@endsection -->

<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Edit User</title>
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     </head>
     <body>
         <div class="container">
             <h1>Edit User: {{ $user->name }}</h1>
             <form action="{{ route('users.update', $user) }}" method="POST">
                 @csrf
                 @method('PUT')
                 <div class="form-group">
                     <label>Name</label>
                     <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                 </div>
                 <div class="form-group">
                     <label>Email</label>
                     <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                 </div>
                 <div class="form-group">
                     <label>Role</label>
                     <select name="roles[]" class="form-control" required multiple>
                         <option value="attacker" {{ in_array('attacker', $user->roles) ? 'selected' : '' }}>Attacker</option>
                         <option value="defender" {{ in_array('defender', $user->roles) ? 'selected' : '' }}>Defender</option>
                         <option value="administrator" {{ in_array('administrator', $user->roles) ? 'selected' : '' }}>Administrator</option>
                     </select>
                 </div>
                 <button type="submit" class="btn btn-primary">Update User</button>
             </form>
         </div>
     </body>
     </html>
     ```
