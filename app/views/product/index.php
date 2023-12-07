<h2>Product</h2>

<a href="<?php echo URL; ?>/product/input" class="btn">Input Categori</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAME PRODUCT</th>
            <th>EDIT</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['pro_name']; ?></td>
                  <td><a href="<?php echo URL; ?>/product/edit/<?php echo $row['pro_id']; ?>" class="btn">Edit</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>