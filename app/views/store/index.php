<h2>Store</h2>

<a href="<?php echo URL; ?>/store/input" class="btn">Input Post</a>

<table>
      <thead>
            <tr>
                  <th>NO</th>
                  <th>Product</th>
                  <th>Brand</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['pro_name']; ?></td>
                        <td><?php echo $row['store_brand']; ?></td>
                        <td><?php echo $row['store_description']; ?></td>
                        <td><?php echo $row['store_price']; ?></td>
                        <td><a href="<?php echo URL; ?>/store/edit/<?php echo $row['store_id']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/store/delete/<?php echo $row['store_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>