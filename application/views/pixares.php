<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <title>Pixabay API Coneection</title>
    <style>
     body {
      background-color:#1d1d1d !important;
      color:#989898;
      margin:10px;
      font-size:16px;
      padding: 0;
      margin: 0;
    }
    h1 {
      font-size: 5em;
      margin: 0;
      padding: 0;
      text-align: center;
      font-family: "Asap", sans-serif;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);

    } 
  </style>
  </head>
  <body>
    <div class="container">
      <h1>PixaBay API Connection</br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Search</button></h1>
   </div>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content" style="background:#1d1d1d">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><center>Search Image & Videos</center></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body row">
          <div class="col-md-6 d-flex align-items-center">
            <form action="<?php echo base_url('welcome/search'); ?>" method="post">
              <h5>Choose Format</h5>
              <div class="row">
                <div class="col-8">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="pixchoose" value="image" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Image</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="pixchoose" value="video" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Video</label>
                  </div>
                </div>
              </div>
            </br>
            <div class="row">
              <div class="col-sm-8">
                <input type="text" class="form-control" name="mysearch" id="mysearch" placeholder="Enter Keywords"></div>
                <div class="col-sm-4">
                  <button type="submit" class="btn btn-primary" name="pixsubmit" id="pixsubmit">Search</button>
                </div>
              </div>
            </form>    
          </div>
    <div class="col-md-6">
      <h5>Recent Searches</h5>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Search</th>
            <th scope="col">Format</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          ?>
          <?php foreach($info as $res) { ?>
            <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $res->keywords; ?></td>
            <td><?php echo $res->format; ?></td>
            <td><a href="<?php echo base_url('welcome/deleteme/'.$res->id); ?>" class="btn btn-danger mr-1" id="edit">Delete</a></td>
          </tr>
        <?php $i++; } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>