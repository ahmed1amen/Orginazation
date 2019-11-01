<div class="form-group">
    <label class="control-label col-sm-1"> اسم المنطقة</label>
    <div class="col-sm-10">
        <input required name="Area_Name" required type="text"
               class="form-control"
               placeholder=" ادخل اسم المنطقة">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> وصف المنطقة</label>
    <div class="col-sm-10">
        <input name="Area_Description" class="form-control"
               placeholder=" ادخل وصف المنطقة">
    </div>
</div>


<div class="form-group">
    <label class="control-label col-sm-1">اسم المكتب</label>
    <div class="col-sm-10">
        <select required name="Area_Office" id="Area_Office" class="form-control">

            <?php

            include 'config.php';
            include("Includes/PHPHelper/RetrieveOffices.php"); ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1">اسم القطاع</label>
    <div class="col-sm-10">
        <select required name="Area_Section" class="form-control">
            <option>المشخاب</option>
            <option>القادسية</option>
            <option>سوق شعلان</option>
            <option>الحسانية</option>

        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button id="btnsubmit" type="submit" class="btn btn-warning btn-md">
            اضافة
            المنطقة
            <i class="fa fa-plus"></i>
        </button>
    </div>
</div>

