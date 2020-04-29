{extends file='layout.tpl'}
{block name=main}
    <h3>Admin Users:</h3>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Email</th>
        <th>Orders</th>
        <th>Admin</th>
        <th>Created</th>
        <th>Update</th>
        <th>Delete</th>
        </thead>
        <tbody>
        {foreach $users as $user}
            <tr>
                <form action="/admin/users/update" method="POST">
                    <input type="hidden" name="user_id" value="{$user['id']}">
                    <td>{$user['id']}</td>
                    <td><input type="text" placeholder="name" value="{$user['email']}" class="form-control" name="email"></td>
                    <td>{$user['orders_count']}</td>
                    <td><input type="checkbox" name="admin" {if $user['is_admin']}checked{/if}></td>
                    <td>{$user['created_at']}</td>
                    <td><input type="submit" class="btn btn-warning" value="Update"></td>
                </form>
                <form action="" method="POST">
                    <td><input type="submit" class="btn btn-danger" value="Remove"></td>
                </form>

            </tr>
        {/foreach}

        </tbody>
    </table>
{/block}