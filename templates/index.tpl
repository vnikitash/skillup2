{extends file='layout.tpl'}
{block name=main}
<table border="1" class="table">
    <thead>
        <th>test</th>
        <th>meta</th>
        <th>ololo</th>
    </thead>
    <tbody>
        {foreach $data as $row}
            <tr>
                <td>{{$row['test']}}</td>
                <td>{{$row['meta']}}</td>
                <td>{{$row['ololo']}}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
{/block}
