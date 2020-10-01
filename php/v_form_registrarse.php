<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>v_form_registrarse</title>
</head>
<body>
    <div>
        <h1>Registro de Usuarios</h1>
        <form id='form-login' action='/php/v_alta_registrarse.php' method='POST'>
            <!-- .. NAME   ..--> 
            <label for="name">Nombre</label>
            <input type="text" name='txtname' id='name' placeholder="Enter name" autofocus=''>
        
            <!-- .. SURNAME  ..--> 
            <label for="surname">Surname</label>
            <input type="text" name='txtsurname' id='surname' placeholder="Enter Surname">
            
            <!-- .. EMAIL   ..--> 
            <label for="email">Email</label>
            <input type="text" name='txtemail' id='email' placeholder="Enter email">
        
            <!-- .. USER  ..--> 
            <label for="user">User</label>
            <input type="text" name='txtuser' id='user' placeholder="Enter User">
            
            <!-- .. PASSWORD  ..--> 
            <label for="password">Password</label>
            <input type="password" name='txtpassword' id='password' maxlength='10' placeholder="Enter Password">
            
            <!-- .. REPEAT PASSWORD  ..--> 
            <label for="repeatpassword">Repeat Password</label>
            <input type="password" name='txtrepeatpassword' id='repeatpassword' maxlength='10' placeholder="Repeat Password">

            <input type="submit" id='checkin' name='btncheckin' value='Check In'>
            <input type="reset" id='delete' name='btndelete' value='Clear'>
        </form>
    </div>
</body>
</html>