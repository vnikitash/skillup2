{extends file='layout.tpl'}
{block name=main}
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
                <li role="presentation" {if ($smarty.get.category_id|default:0) == 0}class="active"{/if}>
                    <a href="/">All</a>
                </li>
                {foreach $categories as $category}
                    <li role="presentation" {if ($smarty.get.category_id|default:0) == $category['id']}class="active"{/if}>
                        <a href="?category_id={$category['id']}">{$category['name']}</a>
                    </li>
                {/foreach}
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                {foreach $products as $product}
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="https://st2.depositphotos.com/3904951/8925/v/450/depositphotos_89250312-stock-illustration-photo-picture-web-icon-in.jpg" alt="...">
                        <div class="caption">
                            <h5>{$product['name']}</h5>
                            <p>Price {$product['price']}$</p>
                            <p>Category {$product['category_id']}</p>
                            <p>
                                <form action="/cart/add" method="POST">
                                    <input type="hidden" name="product_id" value="{$product['id']}">
                                    <input type="submit" value="Buy!" class="btn btn-success">
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
                {/foreach}
            </div>

            <nav aria-label="Page navigation" style="text-align: center;">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    {for $i = 1; $i <= ceil($count / $perPage); $i++}
                        {if ($smarty.get.category_id|default:0)}
                            <li  class="{if ($smarty.get.page|default:1) == $i}active{/if}"><a href="?page={$i}&category_id={$smarty.get.category_id}">{$i}</a></li>
                            {else}
                            <li  class="{if ($smarty.get.page|default:1) == $i}active{/if}"><a href="?page={$i}">{$i}</a>
                        {/if}

                    {/for}
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
{/block}
