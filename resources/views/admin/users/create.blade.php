<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Add User</title>
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     </head>
     <body>
         <div class="container">
             <h1>Add User</h1>
             <form action="{{ route('users.store') }}" method="POST">
                 @csrf
                 <div class="form-group">
                     <label>Name</label>
                     <input type="text" class="form-control" name="name" required>
                 </div>
                 <div class="form-group">
                     <label>Email</label>
                     <input type="email" class="form-control" name="email" required>
                 </div>
                 <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" name="password" required>
                 </div>
                 <div class="form-group">
                     <label>Role</label>
                     <select name="roles[]" class="form-control" required multiple>
                         <option value="attacker">Attacker</option>
                         <option value="defender">Defender</option>
                         <option value="administrator">Administrator</option>
                     </select>
                 </div>
                 <button type="submit" class="btn btn-primary">Create User</button>
             </form>
         </div>
     </body>
     </html>
     ```
