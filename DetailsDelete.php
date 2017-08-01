<?php
require("AdminCheck.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Details</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="./js/jquery-3.1.1.js"></script>
    <script src="./content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
		<script src="./js/detailsdelete.js"></script>
   <script src="./js/jssor.slider-24.1.5.min.js" type="text/javascript"></script>
    <!--<script src="./content/bootstrap-3.3.7-dist/js/npm.js"></script>-->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="./css/details.css" />
    <style>
		
		</style>
	</head>
	<body>
	<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideWidth: 600,
              $Cols: 2,
              $Align: 100,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet elment */
            width: 12px;
            height: 12px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

        /* jssor slider arrow navigator skin 13 css */
        /*
        .jssora13l                  (normal)
        .jssora13r                  (normal)
        .jssora13l:hover            (normal mouseover)
        .jssora13r:hover            (normal mouseover)
        .jssora13l.jssora13ldn      (mousedown)
        .jssora13r.jssora13rdn      (mousedown)
        .jssora13l.jssora13lds      (disabled)
        .jssora13r.jssora13rds      (disabled)
        */
        .jssora13l, .jssora13r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 50px;
            cursor: pointer;
            background: url('img/a13.png') no-repeat;
            overflow: hidden;
        }
        .jssora13l { background-position: -10px -35px; }
        .jssora13r { background-position: -70px -35px; }
        .jssora13l:hover { background-position: -130px -35px; }
        .jssora13r:hover { background-position: -190px -35px; }
        .jssora13l.jssora13ldn { background-position: -250px -35px; }
        .jssora13r.jssora13rdn { background-position: -310px -35px; }
        .jssora13l.jssora13lds { background-position: -10px -35px; opacity: .3; pointer-events: none; }
        .jssora13r.jssora13rds { background-position: -70px -35px; opacity: .3; pointer-events: none; }
    </style>
   
	<form id="form" action="DetailsDeletePHP.php" method="post" enctype="multipart/form-data">
	<?php
    require("connection.php");
    if(isset($_REQUEST["propertyname"]))
    {
	$propertyname=$_REQUEST["propertyname"];
	echo '<input type="hidden" id="propertyName" name="propertyname" value="'.$propertyname.'">';
    }
    else
    {
    $propertyname=NULL;
    }

?>
	<div class="container">
		<div class="reg-form">
			<div class="row title">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 24px;">PROPERTY NAME:</label></div>
				<div class="col-lg-3"><label id="title" style="font-size: 24px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 12px;">POST DATE:</label></div>
				<div class="col-lg-3"><label id="postDate" style="font-size: 12px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 12px;">NOW:</label></div>
				<div class="col-lg-3"><label id="status" style="font-size: 12px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<br>
			 <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:800px;height:300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:800px;height:300px;overflow:hidden;" class="ImageListDom">
             
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;" data-autocenter="1">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora13l" style="top:0px;left:30px;width:40px;height:50px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora13r" style="top:0px;right:30px;width:40px;height:50px;" data-autocenter="2"></span>
    </div>
     
    <!-- #endregion Jssor Slider End -->
    <br>
            <div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 22px; color: red;">RENT:</label></div>
				<div class="col-lg-3"><label id="rent" style="font-size: 22px; color: red;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			 <div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 22px; color: red;">FORM:</label></div>
				<div class="col-lg-3"><label id="startingMonth" style="font-size: 22px; color: red;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<br>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 18px;">ADVANCE:</label></div>
				<div class="col-lg-3"><label id="advance" style="font-size: 18px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 18px;">FOR:</label></div>
				<div class="col-lg-3"><label id="rentFor" style="font-size: 18px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 18px;">INCLUDE:</label></div>
				<div class="col-lg-3"><label id="include" style="font-size: 18px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 18px;">FLOOR:</label></div>
				<div class="col-lg-3"><label id="floor" style="font-size: 18px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 18px;">PROPERTY TYPE:</label></div>
				<div class="col-lg-3"><label id="propertyType" style="font-size: 18px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 18px;">BUILD UP AREA:</label></div>
				<div class="col-lg-3"><label id="buildUpArea" style="font-size: 18px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 18px;">BORDER TYPE:</label></div>
				<div class="col-lg-3"><label id="customerType" style="font-size: 18px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 18px;">MAXIMUM BORDER:</label></div>
				<div class="col-lg-3"><label id="maximumBorder" style="font-size: 18px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<br>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 18px;">DESCRIPTION:</label></div>
				<div class="col-lg-3"><p id="description" style="font-size: 18px;"></p></div>
				<div class="col-lg-4"></div>
			</div>
			<br>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 18px;">ADDRESS:</label></div>
				<div class="col-lg-3"><address id="address" style="font-size: 18px;"></address></div>
				<div class="col-lg-4"></div>
			</div>
			<br>
			 <div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-2"> <button type="button" id="delete" class="form-control btn btn-danger">Delete</button></div>
				<div class="col-lg-3"></div>
				<div class="col-lg-2">
                  <button type="button" id="cancel" class="form-control btn btn-warning">Cancel</button>
                 </div>
                   <div class="col-lg-3"></div>
		</div>
		</div>
		</form>
	</body>
</html>