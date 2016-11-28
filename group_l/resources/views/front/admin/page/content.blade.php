<div class="admin-content">
    <div class="main">
        <div>
            <a href="addView" class="btn btn-danger pull left" style="margin-right:3px;">Add</a>
        </div>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Level</th>
                <th>Operations</th>
            </tr>
            @foreach($menu as $value)
            <tr>
                <td>{{ $value['menu_id'] }}</td>
                <td>{{ $value['menu_title'] }}</td>
                <td>{{ $value['menu_level'] }}</td>
                <td>
                    <a href="edit?id={{ $value['menu_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <a href="delete?id={{ $value['menu_id'] }}" class="btn btn-danger pull left" style="margin-right:3px;">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>