<h2>Edit Post</h2>

<form action="<?php echo URL; ?>/store/update" method="post">
<input type="hidden" name="id" value="<?php echo $data['row']['store_id']; ?>">
    <table>
        <tr>
            <td>Product</td>
            <td>
            <select name="store_id_product">
                    <?php foreach ($data['optpro'] as $opt) { ?>
                        <option value="<?php echo $opt['pro_id']; ?>" <?php echo $opt['pro_id'] == $data['row']['store_id_product'] ? "selected" : ""; ?>><?php echo $opt['pro_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>BRAND</td>
            <td><input type="text" name="store_brand" value="<?php echo $data['row']['store_brand']; ?>" required></td>
        </tr>
        <tr>
            <td>DESCRIPTION</td>
            <td>
                <textarea name="store_description" cols="30" rows="10"><?php echo $data['row']['store_description']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>PRICE</td>
            <td>
                <textarea name="store_price" cols="30" rows="10"><?php echo $data['row']['store_price']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>