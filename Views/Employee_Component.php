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
    <label class="control-label col-sm-1">الاعمال الموكله للموظف</label>
    <div class="col-sm-10">


        <div class="multiselect" id="countries" multiple="multiple" data-target="multi-0">
            <div class="title noselect">
                <span class="text">اختر</span>
                <span class="close-icon">&times;</span>
                <span class="expand-icon">&plus;</span>
            </div>
            <div class="container">


                <option value=" مدير المكتب الفرعي"> مدير المكتب الفرعي</option>
                <option value="نائب مدير المكتب الفرعي"> نائب مدير المكتب الفرعي</option>
                <option value=" المشرف على المكتب الفرعي"> المشرف على المكتب الفرعي</option>
                <option value=" مسؤول شعبة المشتركين"> مسؤول شعبة المشتركين</option>
                <option value="موظف شعبة المشتركين"> موظف شعبة المشتركين</option>
                <option value=" مسؤول شعبة العوائل"> مسؤول شعبة العوائل</option>
                <option value="موظف شعبة العوائل"> موظف شعبة العوائل</option>
                <option value=" مسؤول شعبة المالية"> مسؤول شعبة المالية</option>
                <option value="موظف شعبة المالية"> موظف شعبة المالية</option>
                <option value=" مسؤول شعبة الإحصاء والبيانات"> مسؤول شعبة الإحصاء والبيانات</option>
                <option value="موظف شعبة الإحصاء والبيانات"> موظف شعبة الإحصاء والبيانات</option>
                <option value=" مسؤول شعبة الاعلام والعلاقات"> مسؤول شعبة الاعلام والعلاقات</option>
                <option value="موظف شعبة الاعلام والعلاقات"> موظف شعبة الاعلام والعلاقات</option>
                <option value=" مسؤول شعبة التدقيق"> مسؤول شعبة التدقيق</option>
                <option value="موظف شعبة التدقيق"> موظف شعبة التدقيق</option>
                <option value=" مسؤول شعبة الأرشفة"> مسؤول شعبة الأرشفة</option>
                <option value="موظف شعبة الأرشفة"> موظف شعبة الأرشفة</option>
                <option value="مسؤول الشعبة الثقافية"> مسؤول الشعبة الثقافية</option>
                <option value=" موظف الشعبة الثقافية"> موظف الشعبة الثقافية</option>
                <option value="مسؤول شعبة الموارد البشرية وأملاك المؤسسة"> مسؤول شعبة الموارد البشرية وأملاك المؤسسة
                </option>
                <option value=" موظف شعبة الموارد البشرية وأملاك المؤسسة"> موظف شعبة الموارد البشرية وأملاك المؤسسة
                </option>
                <option value=" مسؤول شعبة التخطيط والمتابعة"> مسؤول شعبة التخطيط والمتابعة</option>
                <option value="موظف شعبة التخطيط والمتابعة"> موظف شعبة التخطيط والمتابعة</option>
                <option value="مسؤول شعبة متابعة الأجارة"> مسؤول شعبة متابعة الأجارة</option>
                <option value=" حارس"> حارس</option>
                <option value=" سائق"> سائق</option>
                <option value="موظف في المؤسسة"> موظف في المؤسسة</option>
                <option value="لجنة المشتريات والآليات"> لجنة المشتريات والآليات</option>
                <option value=" لجنة تحديد الأسعار"> لجنة تحديد الأسعار</option>

            </div>
        </div>


    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1">صفة المناداة</label>
    <div class="col-sm-10">
        <select class="form-control" name="employee_adj" id="employee_adj">
            <option> السيد الفاضل</option>
            <option> الأستاذ الفاضل</option>
            <option> الأستاذة الفاضلة</option>
            <option> الأخ الفاضل</option>
            <option>الأخت الفاضلة</option>
            <option>الشيخ</option>
            <option>الست الفاضلة</option>
            <option>العلوية الفاضلة</option>
            <option> الدكتور الفاضل</option>
            <option> الحاج</option>
            <option> المهندس الفاضل</option>
            <option>المحامي الفاضل</option>
            <option>السادة الأفاضل</option>
        </select>
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
            <?php include("Includes/PHPHelper/RetrieveOffices.php"); ?>
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
