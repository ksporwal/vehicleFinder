<?php

require("configureCity.php");
?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Multiple dropdown with jquery ajax and php </title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        
    </head>
    <body>
        <div id="container">
            <div id="body">
                <div class="mainTitle" >Multiple dropdown with jquery ajax and php</div>
                <div class="height20"></div>
                
                    
                                <?php
                                $sql = "SELECT * FROM tbl_country ORDER BY country_name";
                                try {
                                    $stmt = $DB->prepare($sql);
                                    $stmt->execute();
                                    $results = $stmt->fetchAll();
                                } catch (Exception $ex) {
                                    echo($ex->getMessage());
                                }
                                ?>
                                <label>Country:
                                    <select name="country" onChange="showState(this);">
                                        <option value="">Please Select</option>
                                        <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["country_name"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </label>
                          
                        <div id="output1"></div> <div id="output2"></div> 
            </div>
        </div>
        <script src="jquery-1.9.0.min.js"></script>
        <script>
                    function showState(sel) {
                        var country_id = sel.options[sel.selectedIndex].value;
                        $("#output1").html("");
                        $("#output2").html("");
                        if (country_id.length > 0) {

                            $.ajax({
                                type: "POST",
                                url: "fetch_state.php",
                                data: "country_id=" + country_id,
                                cache: false,
                                beforeSend: function() {
                                    $('#output1').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output1").html(html);
                                }
                            });
                        }
                    }

                    function showCity(sel) {
                        var state_id = sel.options[sel.selectedIndex].value;
                        if (state_id.length > 0) {
                            $.ajax({
                                type: "POST",
                                url: "fetch_city.php",
                                data: "state_id=" + state_id,
                                cache: false,
                                beforeSend: function() {
                                    $('#output2').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output2").html(html);
                                }
                            });
                        } else {
                            $("#output2").html("");
                        }
                    }
        </script>
    </body>
</html>
