<?php

namespace App\Models;

use App\Core\Model;

class Store extends Model
{
    public function show()
     {
          $query = "SELECT p.*, c.* FROM tb_store p
          INNER JOIN tb_product c
          ON p.store_id_product=c.pro_id ORDER BY store_id";

          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

    public function optPro()
     {
          $query = "SELECT * FROM tb_product";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

    public function save()
     {
          $store_id_product = $_POST['store_id_product'];
          $store_brand = $_POST['store_brand'];
          $store_description = $_POST['store_description'];
          $store_price = $_POST['store_price'];

          $sql = "INSERT INTO tb_store
            SET store_id_product=:store_id_product, store_brand=:store_brand, store_description=:store_description, store_price=:store_price";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":store_id_product", $store_id_product);
          $stmt->bindParam(":store_brand", $store_brand);
          $stmt->bindParam(":store_description", $store_description);
          $stmt->bindParam(":store_price", $store_price);


          $stmt->execute();
     }
     public function edit($id)
     {
          $query = "SELECT * FROM tb_store WHERE store_id=:store_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":store_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }
    
     public function update()
     {
          $store_id_product = $_POST['store_id_product'];
          $store_brand = $_POST['store_brand'];
          $store_description = $_POST['store_description'];
          $store_price = $_POST['store_price'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_store
                  SET store_id_product=:store_id_product, store_brand=:store_brand, store_description=:store_description, store_price=:store_price
                  WHERE store_id=:store_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":store_id_product", $store_id_product);
          $stmt->bindParam(":store_brand", $store_brand);
          $stmt->bindParam(":store_description", $store_description);
          $stmt->bindParam(":store_price", $store_price);
          $stmt->bindParam(":store_id", $id);

          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM tb_store WHERE store_id=:store_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":store_id", $id);
          $stmt->execute();
     }
}