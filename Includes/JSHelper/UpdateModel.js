var modal = document.getElementById('modal-wrapper');
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$("#table1").on('click', '#addmember', function () {



    // get the current row
    var currentRow = $(this).closest("tr");

    $("#currentrecord").val(currentRow.find("td:eq(0)").html());
    window.location = './FamilyMembers.php?do=add&family_ID=' + currentRow.find("td:eq(0)").html();


});
$("#table1").on('click', '#addneeds', function () {

    // get the current row
    var currentRow = $(this).closest("tr");

    $("#currentrecord").val(currentRow.find("td:eq(0)").html());
    window.location = './Familyneeds.php?do=add&family_ID=' + currentRow.find("td:eq(0)").html();


});



$("#table1").on('click', '#btnedit', function () {

    $("#modal-wrapper").fadeIn("fast", function () {
        (document.getElementById('modal-wrapper').style.display = 'block');
    });


    $("#btnsubmit").first().remove();
    $("#model-component > div > div").attr("class", "col-sm-0");
    $("#model-component > div > label").attr("class", "col-sm-0");
    //    $("#model-component > div > div > input").removeAttr("required");
    $("#model-component :input").removeAttr("required");

    // get the current row
    var currentRow = $(this).closest("tr");

    $("#currentrecord").val(currentRow.find("td:eq(0)").html());
    $("#model-component :input").eq(0).val(currentRow.find("td:eq(1)").html());
    $("#model-component :input").eq(1).val(currentRow.find("td:eq(2)").html());
    $("#model-component :input").eq(2).val(currentRow.find("td:eq(3)").html());
    $("#model-component :input").eq(3).val(currentRow.find("td:eq(4)").html());
    $("#model-component :input").eq(4).val(currentRow.find("td:eq(5)").html());
    $("#model-component :input").eq(5).val(currentRow.find("td:eq(6)").html());
    $("#model-component :input").eq(6).val(currentRow.find("td:eq(7)").html());
    $("#model-component :input").eq(7).val(currentRow.find("td:eq(8)").html());
    $("#model-component :input").eq(8).val(currentRow.find("td:eq(9)").html());
    $("#model-component :input").eq(9).val(currentRow.find("td:eq(10)").html());
    $("#model-component :input").eq(10).val(currentRow.find("td:eq(11)").html());
    $("#model-component :input").eq(11).val(currentRow.find("td:eq(12)").html());
    $("#model-component :input").eq(12).val(currentRow.find("td:eq(13)").html());
    $("#model-component :input").eq(13).val(currentRow.find("td:eq(14)").html());
    $("#model-component :input").eq(14).val(currentRow.find("td:eq(15)").html());
    $("#model-component :input").eq(15).val(currentRow.find("td:eq(16)").html());
    $("#model-component :input").eq(16).val(currentRow.find("td:eq(17)").html());
    $("#model-component :input").eq(17).val(currentRow.find("td:eq(18)").html());
    $("#model-component :input").eq(18).val(currentRow.find("td:eq(19)").html());

    //  $("form#frm-modal :input").each(function(){
    //      $(this).val("asd");
    //  });
});


