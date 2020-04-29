{extends file='layout.tpl'}
{block name=main}
    <h3>Admin Categories</h3>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Ordering</th>
            <th>Products</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody>
        <tr>
            <form action="" method="POST">
            <td>1</td>
            <td><input type="text" placeholder="name" value="Phones" class="form-control" name="name"></td>
            <td><input type="number" placeholder="order" value="1" class="form-control" name="order"></td>
            <td>1</td>
            <td><input type="submit" class="btn btn-warning" value="Update"></td>
            </form>
            <form action="" method="POST">
                <td><input type="submit" class="btn btn-danger" value="Remove"></td>
            </form>

        </tr>
        </tbody>
    </table>
{/block}