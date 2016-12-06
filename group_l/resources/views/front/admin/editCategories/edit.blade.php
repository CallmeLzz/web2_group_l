<div class="admin-content">
    <div class="main">
        <table style="widtd: 100%; margin-top: 100px">
            

            @if(isset($category))
                @foreach($category as $value)
                <form action="updateCategories" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <tr>
                        <th>ID</th>
                        <td>{{ $value['category_id'] }}</td>
                        <td hidden="true">
                            <input type="text" name="category_id" value="{{ $value['category_id'] }}" hidden="">
                        </td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>
                            <input type="text" name="category_title" value="{{ $value['category_title'] }}" autofocus>
                        </td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>
                            <select name="category_type" value="{{ $value['category_type'] }}">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Content</th>
                        <td>
                            <input type="text" name="category_content" value="{{ $value['category_content'] }}" style="width:100%">
                        </td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            <input type="file" name="category_img" value="{{ $value['category_img'] }}">
                        </td>
                    </tr>
                    <tr>
                        <th>Operations</th>
                        <td>
                            <input type="submit" value="edit">
                        </td>

                    </tr>
                </form>
                @endforeach
            @endif
        </table>
    </div>
</div>