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
            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><?php echo e($value['menu_id']); ?></td>
                    <td><?php echo e($value['menu_title']); ?></td>
                    <td><?php echo e($value['menu_level']); ?></td>
                    <td>
                        <a href="edit?id=<?php echo e($value['menu_id']); ?>" class="btn btn-info pull left">Edit</a>
                        
                        <button class="btn btn-danger pull left deleteMenuDelete" menu-id="<?php echo e($value['menu_id']); ?>">
                            Delete
                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
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
            <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><?php echo e($value['category_id']); ?></td>
                    <td><?php echo e($value['category_title']); ?></td>
                    <td><?php echo e($value['category_type']); ?></td>
                    <td><?php echo e($value['category_content']); ?></td>
                    <td><img src="<?php echo e($value['category_img']); ?>" style="width:100px"></td>
                    <td>
                        <a href="editCategories?id=<?php echo e($value['category_id']); ?>" class="btn btn-info pull left">Edit</a>
                        <button class="btn btn-danger pull left deleteCateDelete" category-id="<?php echo e($value['category_id']); ?>">
                            Delete
                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </table>
    </div>
</div>