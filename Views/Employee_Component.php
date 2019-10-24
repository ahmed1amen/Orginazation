<div class="form-group">

    <label class="control-label col-sm-1">أسم الموظف</label>
    <div class="col-sm-10">
        <input required type="text" name="employee_name" class="form-control" placeholder="ادخل اسم الموظف">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1">رقم الجوال</label>
    <div class="col-sm-10">
        <input required type="text" name="employee_number"
               class="form-control" placeholder="ادخل رقم الجوال">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1">عنوان الموظف</label>
    <div class="col-sm-10">
        <input required type="text" name="employee_address" class="form-control" placeholder="ادخل عنوان الموظف">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1">راتب الموظف</label>
    <div class="col-sm-10">
        <input required type="text" name="employee_salary" class="form-control" placeholder="ادخل راتب الموظف">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1">المسمى الوظيفي الموظف</label>
    <div class="col-sm-10">
        <input required type="text" name="employee_jobName" class="form-control"
               placeholder="ادخل المسمى الوظيفي الموظف">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1" for="email">البريد
        الالكتروني</label>
    <div class="col-sm-10">
        <input required type="email" name="employee_email" class="form-control" id="email"
               placeholder="ادخل البريد الالكتروني">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1">كلمه المرور</label>
    <div class="col-sm-10">
        <input required type="text" name="employee_password" class="form-control" placeholder="ادخل كلمه المرور">

    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1">المكتب التابع له</label>
    <div class="col-sm-10">
        <select class="form-control" name="employee_office" id="sel1">
            <option>مكتب بغداد</option>
            <option>مكتب البصرة</option>
            <option>مكتب النجف</option>
            <option>مكتب بغداد حي المنصور</option>
        </select>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button id="btnsubmit" type="submit" class="btn btn-success btn-md"> اضافه الموظف
            <i class="fa fa-plus"></i>
        </button>

    </div>
</div>
