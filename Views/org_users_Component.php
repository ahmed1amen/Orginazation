<div class="form-group">
    <label class="control-label col-sm-1"> اسم المستخدم</label>
    <div class="col-sm-10">
        <input required name="username" required type="text"
               class="form-control"
               placeholder=" ادخل اسم المستخدم">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-1">كلمة السر</label>
    <div class="col-sm-10">
        <input name="password" class="form-control"
               placeholder="ادخل كلمه السر">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1">الأسم المستعار</label>
    <div class="col-sm-10">
        <input name="name" class="form-control"
               placeholder="ادخل الأسم المستعار">
    </div>
</div>


<div class="form-group">
    <div class="col-sm-10">


        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="areas" type="checkbox">
            <label for="areas">المناطق</label>
        </div>

        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="offices" type="checkbox">
            <label for="offices"> المكاتب</label>
        </div>


        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="employees" type="checkbox">
            <label for="employees"> الموظفين</label>
        </div>


        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="knows" type="checkbox">
            <label for="checkbox1"> Option 1</label>
        </div>


        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="checkbox1" type="checkbox">
            <label for="checkbox1"> Option 1</label>
        </div>


        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="checkbox1" type="checkbox">
            <label for="checkbox1"> Option 1</label>
        </div>


        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="checkbox1" type="checkbox">
            <label for="checkbox1"> Option 1</label>
        </div>


        <div class="clearfix"></div>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button id="btnsubmit" type="submit" class="btn btn-warning btn-md">
            اضافة
            المستخدم
            <i class="fa fa-plus"></i>
        </button>
    </div>
</div>

