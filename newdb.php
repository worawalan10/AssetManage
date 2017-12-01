<?php
ob_start();
require_once'config/config.php';
require_once'config/db.php';
error_reporting(E_ALL ^ E_NOTICE);
$upload = 0;
$row = 0;
$success = 0;
$filename = 'uploads/'.$_FILES["fileToUpload"]["name"];

if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"uploads/".$_FILES["fileToUpload"]["name"]))
{
	$handle = fopen("$filename", "r");
    mysqli_query($dbConn,"TRUNCATE TABLE asset");
    mysqli_query($dbConn,"TRUNCATE TABLE asset_img");
    while (!feof($handle)){
        $r = fgets($handle,4096);
        $row++;

        if($row>2){
            // print_r($buffer);
            $buffer = preg_split('/\t/', $r);
            // print_r($buffer);
            $strSQL = "INSERT INTO asset ";
            $strSQL .="(asset_class,asset_no,sub_no,description,serial_no,inventory_no,";
            $strSQL .=" last_inventory,inventory_note,business_are,resp_cost_ctr,";
            $strSQL .="`license_plate_no`, `personnel_no`, `status`, `physical_location`, `asset_sup_no`,";
            $strSQL .="`manufac_asset`, `type_name`, `profit_center`, `amount_post`, `percent`,";
            $strSQL .="`manufac_se_no`, `original_depre_date`, `uselife_yr`, `uselife_per`, `accu_depre_post`,";
            $strSQL .=" `accu_depre_ear`, `company_code`, `description_50`, `quantity`, `unit_measure`,";
            $strSQL .="`asset_capital_date`, `deactive_date`, `first_acqui_on`, `acqui_yr`, `acqui_period`,";
            $strSQL .="`confirm_date`, `asset_label`, `qty_barcode`, `segment`, `cost_center`, `int_order_dep`,";
            $strSQL .="`room`, `wbs_cost`, `asset_shutdown`, `plant_id`, `acqui_method`, `equip_no`, `po_last`,";
            $strSQL .=" `vender`, `country_origin`, `asset_transfer`, `subno_origin_asset`, `acq_on`,";
            $strSQL .="`orig_acquis_yr`, `original_value`, `invest_order`, `wbs`, `envir_invest`, `capacity`,";
            $strSQL .="`unit`, `KV`, `material_no`, `batch_no`, `egat_se_no`, `project_definition`, `project`,";
            $strSQL .="`insur_type`, `insur_company`, `insur_amount`, `insur_rate`, `insur_end_date`, `insur_during`,";
            $strSQL .="`dep_key`, `ex_uselife_yr`, `exp_uselife_mth`, `rem_life_yr`, `rem_life_mth`, `scrap_value`,";
            $strSQL .="`neg_val_allow`, `account_gl_cost`, `account_gl_accu_dep`, `block`, `dep_key_tex`,";
            $strSQL .="`accu_depre_tax_yr`, `accu_depre_tax_ear_yr`, `uselife_yr_tax`, `uselife_per_tax`,";
            $strSQL .="`exp_uselife_yr_tax`, `exp_useful_mth_tax`, `rem_life_yr_tax`, `rem_life_mth_tax`, `yr_last_depre_post`,";
            $strSQL .="`period_last_depre_post`, `yr_download`, `period_download`)";
            $strSQL .="VALUES ";
            $strSQL .="('".$buffer[0]."','".$buffer[1]."','".$buffer[2]."','".$buffer[3]."','".$buffer[4]."' ";
	        $strSQL .=",'".$buffer[5]."','".$buffer[6]."','".$buffer[7]."','".$buffer[8]."','".$buffer[9]."' ";
            $strSQL .=",'".$buffer[10]."','".$buffer[11]."','".$buffer[12]."','".$buffer[13]."','".$buffer[14]."' ";
            $strSQL .=",'".$buffer[15]."','".$buffer[16]."','".$buffer[17]."','".$buffer[18]."','".$buffer[19]."' ";
            $strSQL .=",'".$buffer[20]."','".$buffer[21]."','".$buffer[22]."','".$buffer[23]."','".$buffer[24]."' ";
            $strSQL .=",'".$buffer[25]."','".$buffer[26]."','".$buffer[27]."','".$buffer[28]."','".$buffer[29]."' ";
            $strSQL .=",'".$buffer[30]."','".$buffer[31]."','".$buffer[32]."','".$buffer[33]."','".$buffer[34]."' ";
            $strSQL .=",'".$buffer[35]."','".$buffer[36]."','".$buffer[37]."','".$buffer[38]."','".$buffer[39]."' ";
            $strSQL .=",'".$buffer[40]."','".$buffer[41]."','".$buffer[42]."','".$buffer[43]."','".$buffer[44]."' ";
            $strSQL .=",'".$buffer[45]."','".$buffer[46]."','".$buffer[47]."','".$buffer[48]."','".$buffer[49]."' ";
            $strSQL .=",'".$buffer[50]."','".$buffer[51]."','".$buffer[52]."','".$buffer[53]."','".$buffer[54]."' ";
            $strSQL .=",'".$buffer[55]."','".$buffer[56]."','".$buffer[57]."','".$buffer[58]."','".$buffer[59]."' ";
            $strSQL .=",'".$buffer[60]."','".$buffer[61]."','".$buffer[62]."','".$buffer[63]."','".$buffer[64]."' ";
            $strSQL .=",'".$buffer[65]."','".$buffer[66]."','".$buffer[67]."','".$buffer[68]."','".$buffer[69]."' ";
            $strSQL .=",'".$buffer[70]."','".$buffer[71]."','".$buffer[72]."','".$buffer[73]."','".$buffer[74]."' ";
            $strSQL .=",'".$buffer[75]."','".$buffer[76]."','".$buffer[77]."','".$buffer[78]."','".$buffer[79]."' ";
            $strSQL .=",'".$buffer[80]."','".$buffer[81]."','".$buffer[82]."','".$buffer[83]."','".$buffer[84]."' ";
            $strSQL .=",'".$buffer[85]."','".$buffer[86]."','".$buffer[87]."','".$buffer[88]."','".$buffer[89]."' ";
            $strSQL .=",'".$buffer[90]."','".$buffer[91]."','".$buffer[92]."','".$buffer[93]."','".$buffer[94]."') ";
            $objQuery = mysqli_query($dbConn,$strSQL) or die(mysqli_error($dbConn));
        }
    }
    $success = 1;
    fclose($handle);
        
}

?>
<html>
    <head>
        <script type="text/javascript">
        function completeFunction(){
            var r=confirm("Update Complete!");
            if (r==true){
                window.open("export.php");
                }
            else {
                }
            }
        </script> 
    </head>
    <body>
    <?php
         echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Succesfully Updated')
                window.location.href='export.php';
                </SCRIPT>");
    ?>
    </body>
</html>
<?php
ob_end_flush();
?>