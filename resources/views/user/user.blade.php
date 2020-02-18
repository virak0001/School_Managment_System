<table>
    <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    </thead>

    <body>
        <?php foreach ($profile as $item) : ?>
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item->Profile['phone']}}</td>
                <td>{{$item->Profile['address']}}</td>
            </tr>
        <?php endforeach; ?>
    </body>
</table>