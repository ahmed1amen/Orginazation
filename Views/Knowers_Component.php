<div class="form-group">
    <label class="control-label col-sm-1"> اسم المعرف</label>
    <div class="col-sm-10">
        <input required name="Knower_Name" type="text"
               class="form-control"
               placeholder=" ادخل اسم المعرف">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> صفة المناداة</label>
    <div class="col-sm-10">
        <input required name="Calling_Adj" type="text"
               class="form-control"
               placeholder=" ادخل صفة المناداة">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> عنوان المعرف</label>
    <div class="col-sm-10">
        <input required name="Knower_Address" type="text"
               class="form-control"
               placeholder=" ادخل عنوان المعرف">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> الصفة</label>
    <div class="col-sm-10">
        <select required name="Adjective" class="form-control">
            <option>موظف</option>
            <option>غير موظف</option>

        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> رفم الموبيل 1</label>
    <div required class="col-sm-10">
        <input required name="Phone_Number1" type="text"
               class="form-control"
               placeholder=" ادخل رفم الموبيل 1">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> رقم الموبيل 2</label>
    <div class="col-sm-10">
        <input name="Phone_Number2" type="text" class="form-control"
               placeholder=" ادخل رقم الموبيل 2">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1"> مكتب المؤسسة</label>
    <div class="col-sm-10">
        <select required class="form-control" name="employee_office"
                id="sel1">
            <option>مكتب بغداد</option>
            <option>مكتب البصرة</option>
            <option>مكتب النجف</option>
            <option>مكتب بغداد حي المنصور</option>
        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button id="btnsubmit" type="submit" class="btn btn-success btn-md"> اضافه
            المعرف
            <i class="fa fa-plus"></i>
        </button>

    </div>
</div>


