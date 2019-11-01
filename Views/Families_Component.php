<div class="row">
    <div class="col-md-6">
        <div class="form-group">


            <label class="control-label col-sm-0">الرقم الأحصائي</label>
            <input required name="statistics_numer" type="text" class="form-control"
                   placeholder="ادخل الرقم الأحصائي">

        </div>
        <div class="form-group">
            <label class="control-label col-sm-0">اسم المعيل</label>
            <input required name="provider_name" type="text" class="form-control"
                   placeholder="ادخل اسم المعيل">

        </div>
        <div class="form-group">
            <label class="control-label col-sm-0">نسب المعيل</label>

            <select required name="hashimy" class="form-control">
                <option>هاشمي</option>
                <option>غير هاشمي</option>
            </select>

        </div>
        <div class="form-group">
            <label class="control-label col-sm-0">اسم الأب</label>

            <input required name="father_name" type="text" class="form-control"
                   placeholder="ادخل اسم الأب">

        </div>


        <div class="form-group">
            <label class="control-label col-sm-0">اسم المعيل 2</label>

            <input name="provider_name2" type="text" class="form-control"
                   placeholder="ادخل اسم المعيل 2 ">

        </div>
        <div class="form-group">
            <label class="control-label col-sm-0"> نسب المعيل 2</label>

            <select name="hashimy2" class="form-control">
                <option></option>
                <option>هاشمي</option>
                <option>غير هاشمي</option>
            </select>

        </div>

        <div class="form-group">
            <label class="control-label col-sm-0">اسم المعرف</label>

            <input required name="mo3aref_name" type="text" class="form-control"
                   placeholder="ادخل اسم المعرف">

        </div>
        <div class="form-group">
            <label class="control-label col-sm-0">اسم المزكي</label>

            <input required name="mozaky_name" type="text" class="form-control"
                   placeholder="ادخل اسم المزكي">

        </div>

        <div class="form-group">
            <label class="control-label col-sm-0">جوال المزكي</label>

            <input required name="mozaky_number" type="text" class="form-control"
                   placeholder="ادخل رقم جوال المزكي">

        </div>

        <div class="form-group">
            <label class="control-label col-sm-0">ملاحظه</label>

            <textarea name="note" class="form-control" rows="5" placeholder="ملاحظه"
                      id="comment"></textarea>

        </div>

    </div>
    <div class="col-md-6">


        <div class="form-group">
            <label class="control-label col-sm-0">رصيد العائله</label>

            <input required name="family_balance" type="text" class="form-control"
                   placeholder="ادخل رصيد العائله">

        </div>


        <div class="form-group">
            <label class="control-label col-sm-0">مكتب المؤسسة</label>

            <select required name="company_office" class="form-control">
                <?php

                include 'config.php';
                include("Includes/PHPHelper/RetrieveOffices.php"); ?>
            </select>

        </div>


        <div class="form-group">
            <label class="control-label col-sm-0">رقم الأضبارة</label>

            <input required name="number_of_files" type="text" class="form-control"
                   placeholder="ادخل رقم الأضبارة">

        </div>

        <div class="form-group">
            <label class="control-label col-sm-0">تاريخ ملف المعاملة</label>

            <input required name="treatment_date"
                   style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif'; text-align: center;"
                   type="date" class="form-control">
        </div>


        <div class="form-group">
            <label class="control-label col-sm-0">الموقف الحالي</label>

            <select required name="current_situation" class="form-control">
                <option>ايقاف</option>
                <option>مستمرة</option>
            </select>

        </div>


        <div class="form-group">
            <label class="control-label col-sm-0">نوع العائلة</label>

            <select required name="family_type" class="form-control">
                <option>ايتام</option>
                <option>متعففة</option>
                <option>تبرعات</option>
            </select>

        </div>

        <div class="form-group">
            <label class="control-label col-sm-0">الحالة الخاصة</label>

            <select required name="special_case" class="form-control">
                <option>الحشد الشعبي</option>
                <option>مطلقة</option>
                <option>عجزة</option>
                <option>مرضى</option>
                <option>عوائل سجناء</option>
            </select>

        </div>


        <div class="form-group">
            <label class="control-label col-sm-0">يوم التسوق</label>

            <select required name="shopping_day" class="form-control">
                <option>السبت</option>
                <option>الأحد</option>
                <option>الأثنين</option>
                <option>الثلاثاء</option>
                <option>الاربعاء</option>
                <option>الخميس</option>
                <option>الجمعة</option>

            </select>

        </div>


        <div class="form-group">
            <label class="control-label col-sm-0">رقم الجنسية</label>

            <input required name="nationality_number" type="text" class="form-control"
                   placeholder="ادخل رقم الجنسية">

        </div>
    </div>


</div>

<div class="row">


    <ul class="nav nav-tabs">
        <li class="active">
            <a href="tabs-accordions.html#v-Pics" data-toggle="tab"
               aria-expanded="false">صور الكشف</a>
        </li>
        <li class="">
            <a href="tabs-accordions.html#v-otherSub" data-toggle="tab"
               aria-expanded="true">اشتراكات اخري</a>
        </li>
        <li class="">
            <a href="tabs-accordions.html#v-BenefitsAndAgency" data-toggle="tab"
               aria-expanded="false">الأستحقاقات والوكالة</a>
        </li>
        <li class="">
            <a href="tabs-accordions.html#v-SupportAndOngoing" data-toggle="tab"
               aria-expanded="false">الدعم والجاريه</a>
        </li>
        <li class="">
            <a href="tabs-accordions.html#v-FieldInspection" data-toggle="tab"
               aria-expanded="false">الكشف الميداني</a>
        </li>
        <li class="">
            <a href="tabs-accordions.html#v-ContactAndAdress" data-toggle="tab"
               aria-expanded="false">عناوين الاتصال والتواصل</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="v-Pics">


            <div class="form-group">
                <label class="control-label col-sm-0">صور الحالة</label>
                <input class="form-control" id='Files' name="files[]" type="file"
                       multiple="multiple" accept="image/*"/>


            </div>


        </div>
        <div class="tab-pane " id="v-otherSub">


            <div class="form-group">
                <label class="control-label col-sm-0">عضوية ذخر الأخرة</label>

                <select name="membership" class="form-control">
                    <option></option>
                    <option>مشتركة</option>
                    <option>غير مشتركة</option>
                </select>

            </div>


            <div class="form-group">
                <label class="control-label col-sm-0">اسم الوصي</label>

                <input name="wasy_name" type="text" class="form-control "
                       placeholder="ادخل اسم الوصي">

            </div>
            <div class="form-group">
                <label class="control-label col-sm-0">موبيل الوصي</label>

                <input name="wasy_number" type="text" class="form-control "
                       placeholder="ادخل موبيل الوصي">

            </div>


            <div class="form-group">
                <label class="control-label col-sm-0">الأستعداد لعقد المجالس
                    الحسينية في البيت</label>

                <select name="mgls_preparation" class="form-control">
                    <option></option>
                    <option>مستعدة</option>
                    <option>غير مستعدة</option>
                </select>

            </div>


        </div>
        <div class="tab-pane" id="v-BenefitsAndAgency">


            <div class="form-group">
                <label class="control-label col-sm-0">الوكالة الشرعية</label>

                <select name="sharia_agency" class="form-control">
                    <option></option>
                    <option>وكالة شرعية مطلقة</option>
                    <option>وكالة شرعية عامة</option>
                    <option>وكالة شرعية</option>
                    <option>بدون وكالة شرعية</option>
                </select>

            </div>
            <div class="form-group">
                <label class="control-label col-sm-0">اختبار الاستحقاق</label>

                <select name="esthqak_test" class="form-control">
                    <option></option>
                    <option>مستحقة</option>
                    <option>غير مستحقة</option>
                    <option>المعيل الثاني هو المستحق</option>
                    <option>لم يتم الاختبار</option>

                </select>

            </div>

        </div>
        <div class="tab-pane" id="v-SupportAndOngoing">


            <div class="form-group">
                <label class="control-label col-sm-0">الصدقة الجارية</label>

                <select name="sadaka_garia" class="form-control">
                    <option></option>
                    <option>مساهمة</option>
                    <option>غير مساهمة</option>
                </select>

            </div>

            <div class="form-group">
                <label class="control-label col-sm-0">ملبغ اشتراك
                    الجارية</label>

                <input name="garia_eshtrak" type="text" class="form-control "
                       placeholder="ادخل ملبغ اشتراك الجارية">

            </div>


            <div class="form-group">
                <label class="control-label col-sm-0">اشتراك الدعم</label>

                <select name="eshtrak_da3m" class="form-control">
                    <option></option>
                    <option>مشتركة</option>
                    <option>غير مشتركة</option>
                </select>

            </div>

            <div class="form-group">
                <label class="control-label col-sm-0">ملبغ اشتراك الدعم</label>

                <input name="da3m_money" type="text" class="form-control "
                       placeholder="ادخل ملبغ اشتراك الدعم">

            </div>


        </div>

        <div class="tab-pane" id="v-FieldInspection">


            <div class="form-group">
                <label class="control-label col-sm-0">الكششف الميداني</label>

                <select name="kashf_medany" class="form-control">
                    <option></option>
                    <option>مكشوفة</option>
                    <option>غير مكشوفة</option>
                </select>

            </div>


            <div class="form-group">
                <label class="control-label col-sm-0">صنف العائلة</label>

                <select name="family_sanf" class="form-control">
                    <option></option>
                    <option>أ</option>
                    <option>ب</option>
                    <option>ج</option>
                </select>

            </div>

            <div class="form-group">
                <label class="control-label col-sm-0">نوع السكن</label>

                <select name="sakan_type" class="form-control">
                    <option></option>
                    <option>ملك صرف</option>
                    <option>ملك زراعي</option>
                    <option>تجاوز</option>
                    <option>ايجار</option>
                    <option>مع اخرين</option>
                </select>

            </div>


            <div class="form-group">
                <label class="control-label col-sm-0">مبلغ الايجار</label>

                <input name="egar_money" type="text" class="form-control "
                       placeholder="ادخل ملبغ الايجار">

            </div>

            <div class="form-group">
                <label class="control-label col-sm-0">المبلغ الشهري المقترج</label>

                <input name="suggested_money" type="text" class="form-control "
                       placeholder="ادخل المبلغ الشهري المقترج">

            </div>

            <div class="form-group">


                <div class="col-md-6">
                    <div class="panel-group" id="accordion-test-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">

                                    <a data-toggle="collapse"
                                       data-parent="#accordion-test-2"
                                       href="tabs-accordions.html#collapseOne-2"
                                       aria-expanded="true">
                                        <i class="fa fa-tachometer-alt"> مؤسسات
                                            اخري </i>
                                    </a>

                                </h4>
                            </div>
                            <div id="collapseOne-2" class="panel-collapse collapse"
                                 aria-expanded="true" style="">
                                <div class="panel-body">

                                    <div class="checkbox checkbox-primary col-sm-4">
                                        <input name="another_companies[]"
                                               value="salaries" id="ch1"
                                               type="checkbox">
                                        <label for="ch1"> رواتب شهداء الحشد
                                            الشعبي</label>
                                    </div>
                                    <div class="checkbox checkbox-primary col-sm-4">
                                        <input name="another_companies[]" value="social"
                                               id="ch2" type="checkbox">
                                        <label for="ch2"> شبكة الرعاية
                                            الاجتماعية</label>
                                    </div>


                                    <div class="checkbox checkbox-primary col-sm-4">
                                        <input name="another_companies[]"
                                               value="company" id="ch3" type="checkbox">
                                        <label for="ch3"> مؤسسة الباقر ع</label>
                                    </div>
                                    <div class="checkbox checkbox-primary col-sm-4">
                                        <input name="another_companies[]"
                                               value="charity_company" id="ch4"
                                               type="checkbox">
                                        <label for="ch4"> مؤسسة السجاد الخيرية</label>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>


            </div>


        </div>

        <div class="tab-pane" id="v-ContactAndAdress">

            <div class="form-group">
                <label class="control-label col-sm-0">عناوين التواصل</label>

                <textarea name="contacts" class="form-control" rows="7"
                          placeholder="ادخل جميع عناوين التواصل">
اسم المنطقة  :  &nbsp;&nbsp;
عنوان السكن التفصيلي  :  &nbsp;&nbsp;
رقم الموبيل 1  :  &nbsp;&nbsp;
معرف الموبيل الاول  :  &nbsp;&nbsp;
رقم الموبيل 2  :  &nbsp;&nbsp;
معرف الموبيل الثاني  :  &nbsp;&nbsp;
 </textarea>

            </div>

        </div>
    </div>

</div>


<div class="row">


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-7">
            <button type="submit" id="btnsubmit" class="btn btn-purple btn-md"> اضافه
                العائلة
                <i class="fa fa-plus"></i>
            </button>

        </div>
    </div>
</div>


</div>
