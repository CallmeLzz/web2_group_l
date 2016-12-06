<div class="admin-content">
    <div class="main">
        <!-- <div>
            <a href="addView" class="btn btn-danger pull left" style="margin-right:3px;">Add</a>
        </div> -->
        <h2>Menus</h2>
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
                        <a href="edit?id={{ $value['menu_id'] }}" class="btn btn-info pull left">Edit</a>
                        {{--<a href="delete?id={{ $value['menu_id'] }}" class="btn btn-danger pull left" id="delete"
                           onclick="submitDelete();">Delete</a>--}}
                        <button class="btn btn-danger pull left deleteMenuDelete" menu-id="{{ $value['menu_id'] }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
        <h2>Categories</h2>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Type</th>
                <th>Content</th>
                <th>Image</th>
                <th>Operations</th>
            </tr>
            @foreach($cate as $value)
                <tr>
                    <td>{{ $value['category_id'] }}</td>
                    <td>{{ $value['category_title'] }}</td>
                    <td>{{ $value['category_type'] }}</td>
                    <td>{{ $value['category_content'] }}</td>
                    <td><img src="{{ $value['category_img'] }}" style="width:100px"></td>
                    <td>
                        <a href="editCategories?id={{ $value['category_id'] }}" class="btn btn-info pull left">Edit</a>
                        <button class="btn btn-danger pull left deleteCateDelete" category-id="{{ $value['category_id'] }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>