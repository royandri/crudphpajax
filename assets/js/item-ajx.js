$( document ).ready(function() {
var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;
manageData();

/* manage data list */
function manageData() {
    $.ajax({
      dataType: 'json',
      url: url+'controller/getData.php',
      data: {page:page}

    }).done(function(data){
    total_page = Math.ceil(data.total/10);
    current_page = page;
    $('#pagination').twbsPagination({
        totalPages: total_page,
        visiblePages: current_page,
        onPageClick: function (event, pageL) {
        page = pageL;
        if(is_ajax_fire != 0){
          getPageData();
        }
        }
    });
    manageRow(data.data);
        is_ajax_fire = 1;
    });
}


/* Get Page Data*/
function getPageData() {
$.ajax({
    dataType: 'json',
    url:url+'controller/getData.php',
    data: {page:page}
}).done(function(data){
manageRow(data.data);
});
}

/* Add new Item table row */
function manageRow(data) {
var rows = '';
var no = '1';
$.each( data, function( key, value ) {
  rows = rows + '<tr>';
  rows = rows + '<td>'+no+++'</td>';
  rows = rows + '<td>'+value.kd_jurusan+'</td>';
  rows = rows + '<td>'+value.nama_jurusan+'</td>';
  rows = rows + '<td data-id="'+value.kd_jurusan+'">';
        rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
        rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
        rows = rows + '</td>';
  rows = rows + '</tr>';
});
$("tbody").html(rows);
}


/* Create new Item */
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    var kode = $("#create-item").find("input[name='kode']").val();
    var namajurusan = $("#create-item").find("input[name='namajurusan']").val();
    if(kode != '' && namajurusan != ''){
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + form_action,
            data:{kode:kode, namajurusan:namajurusan}
        }).done(function(data){
            $("#create-item").find("input[name='kode']").val('');
            $("#create-item").find("input[name='namajurusan']").val('');
            getPageData();
            $(".modal").modal('hide');
            toastr.success('Data Berhasil Disimpan', 'Sukses', {timeOut: 5000});
        });
    }else{
        alert('Kode dan nama jurusan harus diisi!')
    }
});

/* Remove Item */
$("body").on("click",".remove-item",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");
    $.ajax({
        dataType: 'json',
        type:'POST',
        url: url+'controller/delete.php',
        data:{id:id}
    }).done(function(data){
        c_obj.remove();
        toastr.success('Data berhasil dihapus.', 'Sukses', {timeOut: 5000});
        getPageData();
    });
});


/* Edit Item */
$("body").on("click",".edit-item",function(){
    var id = $(this).parent("td").data('id');
    var title = $(this).parent("td").prev("td").prev("td").text();
    var description = $(this).parent("td").prev("td").text();
    $("#edit-item").find("input[name='kode']").val(title);
    $("#edit-item").find("input[name='jurusan']").val(description);
    $("#edit-item").find(".edit-id").val(id);
});


/* Updated new Item */
$(".crud-submit-edit").click(function(e){
    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var description = $("#edit-item").find("input[name='jurusan']").val();
    var id = $("#edit-item").find(".edit-id").val();
    if(description != ''){
        $.ajax({
            dataType: 'json',
            type:'POST',
             url: url+ form_action,
            data:{jurusan:description,id:id}
        }).done(function(data){
            getPageData();
            $(".modal").modal('hide');
            toastr.success('Data berhasil diubah.', 'Sukses', {timeOut: 5000});
        });
    }else{
        alert('Nama jurusan harus diisi!')
    }
});
});
