<?php include 'include/header.php';  ?>
<div class="container">

<div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title"><b>Section 1</b>
                      </div>

                      <div class="panel-options">
                        <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
                        <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
                        <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
                      </div>
                    </div>

                    <div class="panel-body">
                      <form action="" method="post">
                        <div class="form-group">
                          Title :<input required="" placeholder="Title" id="title" class="form-control" name="title" type="text">
                        </div>
                        <div class="form-group">
                         Description :<textarea required="" class="form-control" placeholder="Description" rows="10" cols="30" id="description" name="description"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Image input</label>
                          <input id="exampleInputFile" type="file">
                          <p class="help-block">Add the image to show in the front page</p>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>