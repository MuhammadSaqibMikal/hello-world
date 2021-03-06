<?php	
include 'header.php';
?>

<body>
<div class="section">
      <div class="container">
        <div class="container-fluid"></div>
        <div class="tab-pane" id="tab2">
          <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
              <div class="tab-content">
                <div class="tab-pane active" id="basic">
                  <div class="panel panel-primary ">
                    <div class="panel-heading">Account Setting
                    </div>
                    <div class="panel-body">
                      <form class="form-horizontal" role="form">
                        <br>
                        <div class="form-group">
                          <label for="inputfullname" class="col-lg-2 control-label text-left">First Name</label>
                          <div class="col-lg-10">
                            <input type="email" class="form-control" id="inputfullname" placeholder="First Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputlastname" class="col-lg-2 control-label">Last Name</label>
                          <div class="col-lg-10">
                            <input type="email" class="form-control" id="inputlastname" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputemail" class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                            <input type="email" class="form-control" id="inputemail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputpassword" class="col-lg-2 control-label">Password</label>
                          <div class="col-lg-10">
                            <input type="password" class="form-control" id="inputpassword" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Photo</label>
                          <div class="col-lg-10">
                            <input type="file" class="filestyle" data-classbutton="btn btn-default btn-lg" data-input="false" id="filestyle-0" tabindex="-1" style="position: fixed; left: -500px;">
                            <div class="bootstrap-filestyle input-group">
                              <input type="text" class="form-control " disabled="" placeholder="Choose file">
                              <span class="input-group-btn" tabindex="0">
                                <label for="filestyle-0" class="btn btn-default btn-lg">
                                  <span class="glyphicon glyphicon-folder-open"></span>
                                </label>
                              </span>
                            </div>
                          </div>
                        </div>
						 <p>&nbsp;</p>
                        <div class="container-fluid text-center">
                          <button type="button" class="btn btn-primary btn-sm">Save</button>
                          <button type="button" class="btn btn-primary btn-sm">&nbsp;Cancel</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
</body>
</html>