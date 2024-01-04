// Theme toogler
$(".theme").click(function () {
  $("#body").toggleClass("light");
});

// password show & hide
$("#eye_open").click(function () {
  if ($("#pass_input").attr("type", "password")) {
    $("#pass_input").attr("type", "text");
    $("#eye_open").hide();
    $("#eye_cls").show();
  }
});
$("#eye_cls").click(function () {
  if ($("#pass_input").attr("type", "text")) {
    $("#pass_input").attr("type", "password");
    $("#eye_open").show();
    $("#eye_cls").hide();
  }
});

// data save
$("#save").click(function () {
  var name = $("#name").val();
  var email = $("#email").val();
  var phone = $("#phone").val();
  var img = $("#img").val();

  $.ajax({
    method: "POST",
    url: "ajax_insert.php",
    data: { name: name, email: email, phone: phone, img: img },
    success: function (data) {
      alert(data);
    },
  });
});
// $('#save').click(function () {
//     var name = $('#name').val();
//     var email = $('#email').val();
//     var phone = $('#phone').val();

//     $.ajax({
//         method: "POST",
//         url: "ajax_insert.php",
//         data: {name:name,email:email,phone:phone},
//         success: function(data) {
//             alert(data);
//         }
//     });
// });

// show data function
function show_data() {
  var read = "";
  $.ajax({
    method: "POST",
    url: "ajax_show.php",
    data: { read: read },
    success: function (data) {
      $("#tbody").html(data);
    },
  });
}

// show data
$("#read_data").click(function () {
  show_data();
});

// edite page
function edite_data(id) {
  $.ajax({
    method: "POST",
    url: "ajax_edite.php",
    data: { id: id },
    success: function (data) {
      $("#body").html(data);
    },
  });
}

// update_data
function update_data(id) {
  var name = $("#name").val();
  var email = $("#email").val();
  var phone = $("#phone").val();

  $.ajax({
    method: "POST",
    url: "ajax_update.php",
    data: { id: id, name: name, email: email, phone: phone },
    success: function (data) {
      alert(data);
    },
  });
}

// back_home
$("#back_home").click(function () {
  var read = "";
  $.ajax({
    method: "POST",
    url: "ajax_learn.php",
    data: { read: read },
    success: function (data) {
      $("body").html(data);
    },
  });
});

// delete data
function del_data(id) {
  $confirm = confirm("Are you sure to delete ?");
  if ($confirm == true) {
    $.ajax({
      method: "POST",
      url: "ajax_delete.php",
      data: { id: id },
      success: function () {
        // alert(data);
        show_data();
      },
    });
  }
}

// dependable dropdown
//=== district ===//
$("#div_id").change(function () {
  var div_id = $(this).val();
  $.ajax({
    method: "POST",
    url: "ajax_dist_dropdown.php",
    data: { div_id: div_id },
    success: function (data) {
      // alert(data);
      $("#dist_id").html(data);
    },
  });
});

//=== upozela ===//
$("#dist_id").change(function () {
  var dist_id = $(this).val();
  $.ajax({
    method: "POST",
    url: "ajax_upozela_dropdown.php",
    data: { dist_id: dist_id },
    success: function (data) {
      $("#upozeles").html(data);
    },
  });
});

//=== upozela ===//
$("#upozeles").change(function () {
  var upozeles = $(this).val();
  $.ajax({
    method: "POST",
    url: "ajax_union_dropdown.php",
    data: { upozeles },
    success: function (data) {
      $("#unions").html(data);
    },
  });
});

// save location
$("#save_loc").click(function () {
  var divi = $("#div_id").val();
  // alert(divi);
  // var dist = $('#dist_id').val();
  // var upo = $('#upozeles').val();
  // var uni = $('#unions').val();

  // ,dist:dist,upo:upo,uni:uni

  $.ajax({
    method: "POST",
    url: "ajax_drop_value.php",
    data: { divi: divi },
    success: function (data) {
      $("#shower").html(data);
    },
  });
});

/*

*/

/*
$('#division').change(function() {
    var division_id = $(this).val();
    $.ajax({
        method: "POST",
        url: "dropdown.php",
        data: {division_id:division_id},
        success: function(data) {
            $('#city').html(data);
        }
    });
})
*/
