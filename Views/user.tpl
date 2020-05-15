
<table border="1">
    <thead>
        <th>ID</th>
        <th>Email</th>
    </thead>
    <tbody>
    {foreach $users as $user}
        <tr>
            <td>{$user['id']}</td>
            <td>{$user['email']}</td>
        </tr>
    {/foreach}
    </tbody>
</table>