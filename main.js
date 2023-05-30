loadData();

let btnAction = "Insert";

$("#addNew").click(function () {
  $("#userModel").modal("show");
});

$("#usersForm").submit(function (event) {
  event.preventDefault();

  // date ayaa iso aqrinaya

  let form_data = new FormData($("#usersForm")[0]);

  // action ayaa kudaray

  if (btnAction == "Insert") {
    form_data.append("action", "registeredUser");
  } else {
    form_data.append("action", "updateUser");
  }
  // 1,method
  // 2,datatype
  // 3,url
  // 4,data your information

  $.ajax({
    method: "POST",
    dateType: "JSON",
    url: "api.php",
    data: form_data,
    processData: false,
    contentType: false,

    success: function (data) {
      let status = data.status;
      let response = data.data;

      $("#usersForm")[0].reset();

      alert(response);
      btnAction = "Insert";

      loadData();
      $("#userModel").modal("hide");
    },
    error: function (data) {
      let status = data.status;
      let response = data.data;
      $("#usersForm")[0].reset();

      alert(status);
    },
  });
});

function loadData() {
  $("#userTable tbody").html("");
  let sendingData = {
    "action": "readAll",
  };

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: sendingData,
    success: function (data) {
      
      let status = data.status;
      let response = data.data;

      let html = "";
      let tr = "";
      if (status) {
        response.forEach((item) => {
          tr += "<tr>";
          for (let i in item) {
            // console.log("this is i ", i)
            // console.log("this is item" , item)

            tr += `<td>${item[i]}</td>`;
          }
          tr += `<td><a class="btn btn-primary update-info" update_id=${item["ID"]}><i class='bx bx-edit'></i></a>&nbsp;<a class="btn btn-danger delete-info" delete_id=${item["ID"]}><i class='bx bxs-trash-alt'></i></a></td>`;
          tr += "</tr>";
        });

        $("#userTable tbody").append(tr);
      }
    },
    error: function (data) {},
  });
}

function deleteUserInfo(userId) {
  let sendingData = {
    "action": "DeleteUser",
    "userId": userId,
  };

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: sendingData,
    success: function (data) {
      let status = data.status;
      let response = data.data;

      let html = "";
      let tr = "";
      if (status) {
        
        alert(response);
        loadData();
      }
    },
    error: function (data) {},
  });
}
function fetchUserInfo(userId) {
  let sendingData = {
    "action": "readUserInfo",
    "userId": userId,
  };

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: sendingData,
    success: function (data) {
      let status = data.status;
      let response = data.data;

      let html = "";
      let tr = "";
      if (status) {
        $("#userId").val(response[0].ID);
        $("#userTitle").val(response[0].title);
        $("#userDesc").val(response[0].description);

        $("#userModel").modal("show");

        btnAction = "Update";
      }
    },
    error: function (data) {},
  });
}

$("#userTable").on("click", "a.update-info", function () {
  id = $(this).attr("update_id");

  fetchUserInfo(id);
});
$("#userTable").on("click", "a.delete-info", function () {
  id = $(this).attr("delete_id");

  if(confirm("are you sure ")){
    deleteUserInfo(id);
  }
});
