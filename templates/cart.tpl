{extends file='layout.tpl'}
{block name=main}
    <h3>Cart</h3>

    <table class="table">
        <thead>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Count</th>
        <th>Product Total</th>
        <th>Remove</th>
        </thead>
        <tbody>
        {foreach $cartItems as $product}
            <tr>
                <td>{$product['id']}</td>
                <td>{$product['name']}</td>
                <td>{$product['price']}$</td>
                <td>
                    <button class="btn btn-success  btn-xs">+</button>
                    {$product['count']}
                    <button class="btn btn-danger btn-xs">-</button>
                </td>
                <td>{$product['count'] * $product['price']}$</td>
                <td>
                    <button type="button" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remove
                    </button>
                </td>
            </tr>
        {/foreach}

        </tbody>
    </table>

    <b>Total:</b> {$total}$
{/block}
