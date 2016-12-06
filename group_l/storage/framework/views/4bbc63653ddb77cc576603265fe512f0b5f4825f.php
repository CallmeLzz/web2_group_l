<div class="admin-content">
    <div class="main">
    <?php if(isset($message)): ?>
        <label><font color="red"><?php echo $message; ?></font></label>
    <?php endif; ?>
        <table style="width: 100%">
            <form action="addCategories" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <tr>
                    <th>Title</th>
                    <td><input type="text" name="category_title" value=""></td>
                </tr>

                <tr>
                    <th>Type</th>
                    <td>
                        <select name="category_type">
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
                    <td><input type="text" name="category_content" value=""></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><input type="file" name="category_img" value=""></td>
                </tr>
                <tr>
                    <th>Operations</th>
                    <td><input type="submit" value="Add"></td>
                </tr>
            </form>
        </table>
    </div>
</div>