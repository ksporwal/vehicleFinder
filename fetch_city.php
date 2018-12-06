<?php

require("configureCity.php");
$state_id = ($_REQUEST["state_id"] <> "") ? trim($_REQUEST["state_id"]) : "";
if ($state_id <> "") {
    $sql = "SELECT * FROM tbl_city WHERE state_id = :sid ORDER BY city_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":sid", trim($state_id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
     if (count($results) > 0) {
        ?>
       <label for="city" class="cols-sm-2 control-label">City</label>
         <div class="cols-sm-10">
          <div class="input-group">
            <select name="city" name="box" required>
                <option value="">Please Select</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["city_name"]; ?>"><?php echo $rs["city_name"]; ?></option>
                <?php } ?>
            </select>
           </div>
            </div>
        
        <?php
    }
}
?>