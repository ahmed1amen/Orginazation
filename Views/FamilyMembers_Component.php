<div class="form-group">
    <label class="control-label col-sm-1"> اسم الفرد</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" placeholder=" ادخل اسم الفرد" name="FamilyMemberName">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> تاريخ التولد</label>
    <div class="col-sm-10">
        <input required name="FamilyMemberBirthday"
               style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif'; text-align: center;"
               type="date" class="form-control">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> الجنس</label>
    <div class="col-sm-10">
        <select required name="FamilyMemberGender" class="form-control">
            <option>ذكر</option>
            <option>انثي</option>
        </select>

    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> الحاله الدراسية</label>
    <div class="col-sm-10">
        <select required name="FamilyMemberStudy" class="form-control">
            <option>طالب مدرسة</option>
            <option>لا يدرس</option>
        </select>

    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> اسم المدرسة</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" placeholder=" ادخل اسم المدرسة" name="FamilyMemberSchool">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> الصف</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" placeholder=" ادخل الصف" name="FamilyMemberClassroom">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> الحالة الصحية</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" placeholder=" ادخل الحالة الصحية" name="FamilyMemberHelthy">


    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> نسب الفرد</label>
    <div class="col-sm-10">
        <select required name="FamilyMemberRatios" class="form-control">
            <option>هاشمي</option>
            <option>غير هاشمي</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> الحالة الزوجية</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" placeholder=" ادخل الحالة الزوجية" name="FamilyMemberMarital">


        <select required name="FamilyMemberStudy" class="form-control">
            <option>متزوج/متزوجه</option>
            <option>متوفي</option>
            <option></option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-1"> الصورة</label>
    <div class="col-sm-10">
        <input class="form-control" id='Files' name="FamilyMemberpic" type="file" accept="image/*"/>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-7">
        <button type="submit" id="btnsubmit" class="btn btn-warning btn-md"> اضافه
            الفرد
            <i class="fa fa-plus"></i>
        </button>

    </div>
</div>
</div>

