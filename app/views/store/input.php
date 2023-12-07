<h2>Input Store</h2>

<form action="<?php echo URL; ?>/store/save" method="post">
    <table>
        <tr>
            <td>KATEGORI NAME</td>
            <td>
                <select name="store_id_product">
                    <?php foreach ($data['optpro'] as $opt) { ?>
                        <option value="<?php echo $opt['pro_id']; ?>"><?php echo $opt['pro_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>BRAND</td>
            <td><input type="text" name="store_brand" required></td>
        </tr>
        <tr>
            <td>DESCRIPTION</td>
            <td>
                <textarea name="store_description" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
        <tr>
            <td>PRICE</td>
            <td><input type="text" name="store_price" required></td>
        </tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>