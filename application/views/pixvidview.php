<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<style>
body {
  background-color:#1d1d1d !important;
  font-family: "Asap", sans-serif;
  color:#989898;
  margin:10px;
  font-size:16px;
}

#demo {
  height:100%;
  position:relative;
  overflow:hidden;
}


.green{
  background-color:#6fb936;
}
        .thumb{
            margin-bottom: 30px;
        }
        
        .page-top{
            margin-top:85px;
        }

   
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        
 
.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;  
    }

 </style>
 <!-- Page Content -->
 <div class="container page-top">
    <h3><strong>Videos Results</strong></h3>
    <p></p>
    <div class="row">
        <?php foreach($res->hits as $ik=>$vid) { ?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="flex img-thumbnail" style="margin: 7px;">
                <a href="<?php echo $vid->videos->medium->url; ?>" class="fancybox" rel="ligthbox" >
                    <video style="width:100%" controls><source src="<?php echo $vid->videos->medium->url; ?>" type="video/mp4">Your</video>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
    <script>
        $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
            $(".zoom").hover(function(){
                $(this).addClass('transition');
            }, function(){
                $(this).removeClass('transition');
            });
        });
    </script>