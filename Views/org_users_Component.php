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
            <input name="roles[]" id="areas" type="checkbox" value="areas">
            <label for="areas">المناطق</label>
        </div>

        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="offices" type="checkbox" value="offices">
            <label for="offices"> المكاتب</label>
        </div>


        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="employees" type="checkbox" value="employees">
            <label for="employees"> الموظفين</label>
        </div>


        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="knowers" type="checkbox" value="knowers">
            <label for="knowers">المعرفون</label>
        </div>


        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="families" type="checkbox" value="families">
            <label for="families">العوائل</label>
        </div>


        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="agents" type="checkbox" value="agents">
            <label for="agents">الوكلاء</label>
        </div>


        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="groups" type="checkbox" value="groups">
            <label for="groups">المجاميع</label>
        </div>
        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="registers" type="checkbox" value="registers">
            <label for="registers">المشتركين</label>
        </div>
        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="sections" type="checkbox" value="sections">
            <label for="sections">القطاعات</label>
        </div>
        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="donors" type="checkbox" value="donors">
            <label for="donors">المبرات</label>
        </div>
        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="funds" type="checkbox" value="funds">
            <label for="funds">الحسابات</label>
        </div>
        <div class="checkbox checkbox-success col-md-2">
            <input name="roles[]" id="records" type="checkbox" value="records">
            <label for="records">سجل الايراد</label>
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

