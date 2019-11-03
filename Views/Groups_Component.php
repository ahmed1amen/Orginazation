<div class="form-group">
    <label class="control-label col-sm-1">مكتب المؤسسة</label>
    <div class="col-sm-10">
        <select name="Group_Office" class="form-control">
            <?php

            include("Includes/PHPHelper/RetrieveOffices.php"); ?>
        </select>
    </div>
</div>


<div class="form-group">
    <label class="control-label col-sm-1"> اسم المجموعة</label>
    <div class="col-sm-10">
        <input name="Group_Name" type="text" class="form-control"
               placeholder=" ادخل اسم المجموعة">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> اسم الوكيل</label>
    <div class="col-sm-10">
        <input name="Group_Agent" type="text" class="form-control"
               placeholder=" ادخل اسم الوكيل">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> اسم المنطقة</label>
    <div class="col-sm-10">
        <input name="Group_Region" type="text" class="form-control"
               placeholder=" ادخل اسم المنطقة">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> ملاحظة</label>
    <div class="col-sm-10">
        <input name="Group_Note" type="text" class="form-control"
               placeholder=" ادخل ملاحظة">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> صنف المجموعة</label>
    <div class="col-sm-10">
        <select name="Group_Class" class="form-control">
            <option>دائرة</option>
            <option>مدرسة</option>
            <option>غيرها</option>
            <option>كلية</option>
            <option>أطباء</option>

        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> الموقف الحالي</label>
    <div class="col-sm-10">
        <select name="Group_CurrentSatuation" class="form-control">
            <option>مستمرة</option>
            <option>متوقفة</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> موظف المتابعة</label>
    <div class="col-sm-10">
        <select name="Group_FollowEmployee" class="form-control">

        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> يوم الجبابة الشهري</label>
    <div class="col-sm-10">
        <input name="Group_DateOfRecMoney" type="text" class="form-control"
               placeholder=" ادخل يوم الجبابة الشهري">
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" id="btnsubmit" class="btn btn-warning btn-md">اضافة
            المجموعة
            <i class="fa fa-plus"></i>
        </button>
    </div>
</div>

