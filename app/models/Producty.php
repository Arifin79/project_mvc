<?php

namespace App\Models;

use App\Core\Model;

class Producty extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_product";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $cat_name = $_POST['pro_name'];

          $sql = "INSERT INTO tb_product
            SET pro_name=:pro_name";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pro_name", $cat_name);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_product WHERE pro_id=:pro_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":pro_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $cat_name = $_POST['pro_name'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_product
          SET pro_name=:pro_name WHERE pro_id=:pro_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pro_name", $cat_name);
          $stmt->bindParam(":pro_id", $id);

          $stmt->execute();
     }
}
