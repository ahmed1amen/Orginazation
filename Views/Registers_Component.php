
<div class="form-group">
    <label class="control-label col-sm-1"> اسم المشترك</label>
    <div class="col-sm-10">
        <input required type="text" class="form-control" placeholder=" ادخل اسم المشترك" name="RegisterName">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> مكتب المؤسسة</label>
    <div class="col-sm-10">
        <select required name="RegisterOffice" id="RegisterOffice" class="form-control">
            <?php

            include("Includes/PHPHelper/RetrieveOffices.php"); ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> اسم المجموعة</label>
    <div class="col-sm-10">

        <select required name="RegisterGroup" id="RegisterGroup" class="form-control">
            <?php

            include("Includes/PHPHelper/RetrieveGroups.php"); ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> الاسم التعريفي</label>
    <div class="col-sm-10">
        <input required type="text" class="form-control" placeholder=" ادخل الاسم التعريفي" name="RegisterNickname">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> النوع</label>
    <div class="col-sm-10">
        <select required class="form-control" name="RegisterGender">
            <option>ذكر</option>
            <option>انثي</option>
        </select>

    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> اسم المعرف</label>
    <div class="col-sm-10">
        <input required type="text" class="form-control" placeholder=" ادخل اسم المعرف" name="Knower_Name">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> عنوان السكن</label>
    <div class="col-sm-10">
        <input required type="text" class="form-control" placeholder=" ادخل عنوان السكن" name="RegisterHomeAddress">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> عنوان العمل</label>
    <div class="col-sm-10">
        <input required type="text" class="form-control" placeholder=" ادخل عنوان العمل" name="RegisterJobAddress">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> رقم الموبيل 1</label>
    <div class="col-sm-10">
        <input required type="text" class="form-control" placeholder=" ادخل رقم الموبيل 1" name="RegisterPhone1">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> رقم الموبيل 2</label>
    <div class="col-sm-10">
        <input required type="text" class="form-control" placeholder=" ادخل رقم الموبيل 2" name="RegisterPhone2">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> البريد الالكتروني</label>
    <div class="col-sm-10">
        <input required type="text" class="form-control" placeholder=" ادخل البريد الالكتروني" name="RegisterE_mail">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> عنوان الفيس بوك</label>
    <div class="col-sm-10">
        <input required type="text" class="form-control" placeholder=" ادخل عنوان الفيس بوك" name="RegisterFacebook">
    </div>
</div>

<div class="table-responsive">
    <table class="table table-bordered" id="dynamic_field">
        <tr>
            <td>
                <button type="button" name="add" id="add" class="btn btn-success">اضافة مبرة</button>
            </td>
            <td><select type="text" name="Donner_Name[]"
                        class="form-control name_list">      <?php include("Includes/PHPHelper/RetrieveDonors.php"); ?>   </select>
            </td>
            <td><input type="number" name="RegisterCredit[]" placeholder="ادخل القيمه" class="form-control name_list"
                       value="0"/></td>

        </tr>
    </table>

</div>


<div class="form-group">
    <label class="control-label col-sm-1"> لا يرغب يوصل شهري</label>
    <div class="col-sm-10">
        <input type="checkbox" name="RegisterArrivedCatch" id="RegisterArrivedCatch" value="1">
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button id="btnsubmit" type="submit" class="btn btn-success btn-md"> اضافه المشترك
            <i class="fa fa-plus"></i>
        </button>

    </div>
</div>
