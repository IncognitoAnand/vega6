<div class="card">
      <div class="card-body">
        <h4 class="card-title">Search Image/Video</h4>
        <form action="<?php echo base_url('welcome/search'); ?>" method="post">
          <h5>Choose Format</h5>
          <input type="radio" id="pixchoose" name="pixchoose" value="piximg">
          <label for="piximg">Image</label>
          <input type="radio" id="pixchoose" name="pixchoose" value="pixvid">
          <label for="pixvid">Video</label><br>
          <div class="row">
          <div class="col-sm-6">
          <input type="text" class="form-control" name="mysearch" id="mysearch" placeholder="Enter Keywords"></div>
          <div class="col-sm-4">
            <button type="submit" class="btn btn-primary" name="pixsubmit" id="pixsubmit">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>