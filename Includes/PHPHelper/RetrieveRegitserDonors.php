<?php
/**
 * Created by PhpStorm.
 * User: Dr.Ahmed Amen
 * Date: 11/1/2019
 * Time: 10:25 AM
 */

include dirname(__DIR__) . '../../config.php';


$Donners = array();
$index1 = 0;


$reid = $_GET["registerid"];
$smt = DBClass::$con->prepare("SELECT * From regiters_donors where RegisterID=$reid");
$smt->execute();
$tbl_regiters_donors = $smt->fetchAll();


$smt = DBClass::$con->prepare("SELECT Donner_Name From donors");

$smt->execute();

$options = $smt->fetchAll();


foreach ($tbl_regiters_donors as $row) {
    $currid = $row['DonorID'];
    $smt = DBClass::$con->prepare("SELECT Donner_Name From donors where Donner_ID=$currid");
    $smt->execute();

    $tbl_donors = $smt->fetch();

    $Donners[$tbl_donors['Donner_Name']] = $row['DonorID'];
//    $Donners[] = ['DonorID' => $row['DonorID'], 'Donner_Name' => $tbl_donors['Donner_Name']];
}
?>

    <tbody>
    <?php
    $indexer = 0;
foreach ($tbl_regiters_donors as $row) {
    $indexer++
    ?>

    <tr id="row<?php echo $indexer ?>">
        <td>
            <button type="button" name="remove" id="<?php echo $indexer ?>"
                    onclick="$('#row<?php echo $indexer ?>').remove();" class="btn btn-danger btn_remove">X
            </button>


        </td>


        <td>


            <select name="Donner_Name[]" class="form-control name_list">


                <?php


                foreach ($options as $option) {

                    if ($option['Donner_Name'] == array_values(array_keys($Donners, $row['DonorID']))[0]) {

                        echo ' <option selected>' . $option['Donner_Name'] . '</option>';
                    } else {
                        echo ' <option>' . $option['Donner_Name'] . '</option>';
                    }
                }


                ?>

            </select>


        </td>


        <td><input type="number" name="RegisterCredit[]" placeholder="ادخل القيمه" class="form-control name_list"
                   value="<?php echo $row['RegisterCredit'] ?>"></td>

    </tr>


    <?php


}

    ?>
    </tbody>
    <tfoot>
    <tr>
        <td>
        </td>
        <td align="center">

            <button type="button" id="btn_donoradd" class="btn btn-warning btn-lg" value="">اضافة مبرة<i
                        class="fa fa-edit"></i>
            </button>
        <td>
    </tr>
    </tfoot>
<?php


?>