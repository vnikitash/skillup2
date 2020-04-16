<html>
<head>

</head>
<body>

<form action="/?action=create" method="POST">
    <input type="text" name="login" placeholder="Login">
    <input type="password" name="password" placeholder="Password">

    <select name="role">
        {foreach $roles as $role => $name}
            <option value="{$role}">{$name}</option>
        {/foreach}
    </select>
    <input type="submit">
</form>


<table border="1">
    <thead>
        <th>ID</th>
        <th>Login</th>
        <th>Pass</th>
        <th>Remove</th>
    </thead>
    <tbody>
    {foreach $users as $user}
        <tr>
            <td>{$user['id']}</td>
            <td>{$user['login']}</td>
            <td>{$user['password']}</td>
            <td>
                <form action="/?action=delete" method="POST">
                    <input type="hidden" name="id" value="{$user['id']}">
                    <input type="submit" value="Remove">
                </form>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>

</body>
</html>