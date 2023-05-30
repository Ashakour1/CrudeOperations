<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery basics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<!-- icons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>


<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-8 ">
            <h1 class="h4 text-center">userInfo</h1>
<button id="addNew" class="btn btn-success ">Add New user</button>
            <table class="table mt-5 table-striped " id="userTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>title</th>
                        <th>description</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                
                </tbody>
            </table>
        </div>
        <div class="modal" tabindex="-1" id="userModel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">UserTitle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form id="usersForm">

      <div class="form-group m-3">
        <input type="text" name="userId" id="userId" class="form-control" placeholder="enter user id">
      </div>

      <div class="form-group m-3">
        <input type="text" name="userTitle" id="userTitle" class="form-control" placeholder="enter user name">
      </div>

      <div class="form-group m-3">
        <input type="text" name="userDesc" id="userDesc" class="form-control" placeholder="enter user description">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>

      </div>
   
    </div>
  </div>
</div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  

    <script src="main.js" ></script>
</body>
</html>