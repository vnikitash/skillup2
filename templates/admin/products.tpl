{extends file='layout.tpl'}
{block name=main}
    <h3>Admin Products</h3>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Price</th>
        <th>Order</th>
        <th>Category</th>
        <th>Update</th>
        <th>Delete</th>
        </thead>
        <tbody>
        <tr>
            <form action="" method="POST">
                <td>1</td>
                <td><img style="width: 80px;" src="https://st2.depositphotos.com/3904951/8925/v/450/depositphotos_89250312-stock-illustration-photo-picture-web-icon-in.jpg" alt="..."></td>
                <td><input type="text" placeholder="name" value="iPhone 3gs" class="form-control" name="name"></td>
                <td><input type="number" placeholder="price" value="100$" class="form-control" name="price"></td>
                <td><input type="number" placeholder="order" value="1" class="form-control" name="order"></td>
                <td>?????</td>
                <td><input type="submit" class="btn btn-warning" value="Update"></td>
            </form>
            <form action="" method="POST">
                <td><input type="submit" class="btn btn-danger" value="Remove"></td>
            </form>

        </tr>
        </tbody>
    </table>
{/block}