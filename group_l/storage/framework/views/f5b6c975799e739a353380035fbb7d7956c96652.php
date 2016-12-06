<div class="admin-content">
    <div class="main">
    <?php if(isset($message)): ?>
        <label><font color="red"><?php echo $message; ?></font></label>
    <?php endif; ?>
        <table style="width: 100%">
            <form action="add">
                <tr>
                    <th>ID</th>
                    <td><input type="text" name="menu_id" value="" autofocus></td>
                </tr>

                <tr>
                    <th>Title</th>
                    <td><input type="text" name="menu_title" value=""></td>
                </tr>

                <tr>
                    <th>Level</th>
                    <td>
                        <select name="menu_level">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Parents</th>
                    <td><input type="text" name="menu_parents" value=""></td>
                    <td>
                        <select name="menu_parents">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>Operations</th>
                    <td><input type="submit" value="Add"></td>
                </tr>
            </form>
        </table>
    </div>
</div>