<?php


require("configureCity.php");
$country_id = ($_REQUEST["country_id"] <> "") ? trim($_REQUEST["country_id"]) : "";
if ($country_id <> "") {
    $sql = "SELECT * FROM tbl_state WHERE country_id = :cid ORDER BY state_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":cid", trim($country_id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
    if (count($results) > 0) {
        ?>
       <label for="state" class="cols-sm-2 control-label">State</label>
         <div class="cols-sm-10">
          <div class="input-group">
            <select name="state" onchange="showCity(this);" required>
                <option value="">Please Select</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["state_name"]; ?></option>
                <?php } ?>
            </select>
         </div>
            </div>
        <?php
    }
}
?>