<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pauji todo-list-app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- MY CSS -->
   <link rel="stylesheet" href="../assets/style/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg text-bg-light ">
  <div class="container-fluid ">
    <div class="row vw-100 p-2">
        <div class="title col-3">
            <h3>Pauji</h3>
        </div>
        <div class="col-6 d-flex justify-content-center  align-items-center gap-5">
            <a class="nav-link active" href="#">TODOS</a>
            <a class="nav-link" href="tag.php">TAGS</a>
            <a class="nav-link" href="complete.php">COMPLETE</a>
        </div>
        <div class="col-3 d-flex justify-content-end align-items-center">
            <a href="{{route('redirectLogin')}}" class="btn text-light " style="background-color: #69231b;">Log Out</a>
        </div>

    </div>

  </div>
  </nav>


<!-- Activity Container -->
<div class="container my-5 text-center section--activity" id="activity">
    <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-target="#addActivity" >ADD ACTIVITY</button>
    <hr>

    <div class="filtering_container d-flex justify-content-around align-items-end">
        <form action="" method="post">
            <div class="box_input">
            <h4 class="text-light">Serach By: </h4>
            <div class="box_filtering d-flex justify-content-center align-items-center gap-2">
            <button type="button" class="btn-main aktif"  id="activityButton">Activity</button>
            <button type="button" class="btn-main" id="dateButton">Date</button>
        </div> <br>
                <input type="search" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="inputKeyword">
                <button type="submit" name="search" class="btn-submit">Search</button>
            </div>
        </form>
        <form action="" method="post" class="d-flex gap-2">
            <select class="form-select" aria-label="Default select example" name="selectTagFill">
                <option selected value="nothing">Select The Tag</option>
            </select>

            <button type="submit" name="tagFilter" class="btn-submit">View</button>
        </form>

    </div>
    <div class="todo text-center">
        <h1 class="text-light">Your Todo</h1>
        <div class="container d-flex flex-wrap gap-3 justify-content-center ">
            <div class="card text-light card-container border border-0" style="width: 18rem;">
                <div class="header-card d-flex justify-content-center w-100 h-100 bg-main">
                <div class="tittle-box d-flex justify-content-end align-items-center " style="width: 90%">
                    <h3 class="card-title" >Makan Siang</h3>
                </div>
                <div class="icon-box w-50 d-flex justify-content-end ">
                        <button type="button" name="todo_id_activity" value="makanSiang" class="btn border border-0" data-bs-toggle="modal" data-bs-target="#updateActivity" start_date="12/02/2024" end_date="13/02/2024"><img src="../assets/img/update.png" alt="" class="" width="36px" height="50px"></button>
                </div>
                </div>
                <div class="footer-card text-dark" style="background-color: #FFFFFF;">
                <div class="footer-card--tittle pt-3 fw-bold ">
                    <p>Start Date: 12/02/2024 <br> End Date: 13/02/2024</p>
                </div>
                <hr>
                
                  <div class="button d-flex gap-0 justify-content-between p-0 m-0">
                        <p class="fw-bolder ps-3">Tag: #makan </p>
                        <form action="../controller/controller.php" method="post">
                            <button type="submit" class="btn btn-sm border border-0 p-0" name="checked"><img src="../assets/img/centang.png" alt="" width="40px" height="45px"></button>
                            <button type="submit" class="btn btn-sm border border-0 p-0" name="delete"><img src="../assets/img/trash.png" alt="" width="30px" height="40px"></button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Activity Container -->

<!-- Start Modal Update -->
<div class="modal fade" id="updateActivity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateActivityLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-bg-dark ">
            <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="updateActivityLabel">UPDATE YOUR ACTIVITY</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../controller/controller.php" method="post" class="d-flex justify-content-center align-items-center flex-column d-flex flex-wrap">
                    <input type="hidden" id="forId" name="id_activity">
                    <div class="input-group mb-3 w-100">
                        <input type="text" class="form-control" aria-label="Example text with button addon" aria-describedby="button-addon1" name="update_activity" id="update_activity">
                    </div>
                        <label for="start_date">Start Date: </label>
                    <div class="input-group mb-3 w-100">
                        <input type="date" class="form-control" aria-label="Example text with button addon" aria-describedby="button-addon1" name="update_start_date" id="update_start_date">
                    </div>
                        <label for="end_date">End Date: </label>
                    <div class="input-group mb-3 w-100">
                        <input type="date" class="form-control" aria-label="Example text with button addon" aria-describedby="button-addon1" name="update_end_date" id="update_end_date">
                    </div>
                    <label for="selectTag">Category: </label>
                    <div class="input-group mb-3 w-100">
                    <select class="form-select" aria-label="Default select example" name="tagUpdate" id="tagUpdate">
                    </select>
                    </div>
                    <div class="input-group mb-3 w-75 d-flex gap-2 justify-content-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL UPDATE -->

<!-- Modal Add -->
<div class="modal fade" id="addActivity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addActivityLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-bg-dark ">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addActivityLabel">INPUT YOUR ACTIVITY</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../controller/controller.php" method="post" class="d-flex justify-content-center align-items-center flex-column d-flex flex-wrap">
                    <div class="input-group mb-3 w-75">
                        <input type="text" class="form-control" placeholder="Write Activity...." aria-label="Example text with button addon" aria-describedby="button-addon1" name="activity">
                    </div>
                        <label for="start_date">Start Date: </label>
                    <div class="input-group mb-3 w-75">
                        <input type="date" class="form-control" aria-label="Example text with button addon" aria-describedby="button-addon1" name="start_date">
                    </div>
                        <label for="end_date">End Date: </label>
                    <div class="input-group mb-3 w-75">
                        <input type="date" class="form-control" aria-label="Example text with button addon" aria-describedby="button-addon1" name="end_date">
                    </div>
                        <label for="tag">Category</label>
                    <div class="input-group mb-3 w-75">
                        <select class="form-select" aria-label="Default select example" name="tag_select">
                            <option selected>Open this select menu</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 w-75 d-flex gap-2 justify-content-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Add -->

        <script src="../assets/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
