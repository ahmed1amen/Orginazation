var modal = document.getElementById('modal-wrapper');
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


$("#table1").on('click', '#btnedit', function () {

    $("#modal-wrapper").fadeIn("fast", function () {
        (document.getElementById('modal-wrapper').style.display = 'block');
    });


    $("#btnsubmit").first().remove();
    $("#model-component > div > div").attr("class", "col-sm-0");
    $("#model-component > div > label").attr("class", "col-sm-0");
    $("#model-component > div > div > input").removeAttr("required");
//    $("#model-component :input").removeAttr("required");

    // get the current row
    var currentRow = $(this).closest("tr");


    $("#currentrecord").val(currentRow.find("td:eq(0)").html());


    //$("#frm-modal :input").eq(2).val(currentRow.find("td:eq(1)").html());

    //  $("form#frm-modal :input").each(function(){
    //      $(this).val("asd");
    //  });
});


