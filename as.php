<style type="text/css">
.bb.segment{
  position: relative;
  background: #FFFFFF;
  box-shadow: 0px 1px 2px 0 rgba(34, 36, 38, 0.15);
  margin: 1rem 0em;
  padding: 1em 1em;
  border-radius: 8px 8px 5px 5px;
  border: 1px solid rgba(34, 36, 38, 0.15);
}
.bb.divider {
  line-height: 1;
  margin: 1rem 0rem;
  height: 0em;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: rgba(0, 0, 0, 0.85);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  font-size: 1rem;
  border-top: 1px solid rgba(34, 36, 38, 0.15);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.theme-option{
	width: 80%;
}

ul.sidenav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 97%;
    height: 100%;
    overflow: auto;
    margin-top: -10px;
}

ul.sidenav li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
    border-bottom: 2px solid transparent;
    cursor: pointer;
}
 
ul.sidenav li a.active {
    color: black;
    border-bottom: 2px solid #70AD47;
}

ul.sidenav li a:hover:not(.active) {
    color: black;
    border-bottom: 2px solid #797979;
}

div.content {
    margin-left: 25%;
    padding: 1px 16px;
    height: 1000px;
}

@media screen and (max-width: 600px){
    ul.sidenav {
        width:100%;
        height:auto;
        position:relative;
    }
    ul.sidenav li a {
        float: left;
        padding: 15px;
    }
    div.content {margin-left:0;}
}

@media screen and (max-width: 400px){
    ul.sidenav li a {
        text-align: center;
        float: none;
    }
}
[biasa]{
	margin: 0px;
}
[bb]{

  background-color: #44B480 !important;
  color: white !important;
    font-weight: bold;
    cursor: pointer;
    border-radius: 3px;
    border: 2px solid transparent;
    padding: 8px 20px 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;

}
[fr]{
	float: right;
	width: 40%;
}
.forcont{
	width:65%;
	display:inline-block;
	vertical-align:top;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
[tbt]{
	font-weight: bolder;
}
.savedinfo{
	font-style: normal;
	float: right;
}
.saveprocess{
	color: #3AC0FF;
	font-style: normal;
	float: right;
}
.failsave{
	color: #DB2828;
	font-style: normal;
	float: right;
}
</style>
<div class="bb theme-option segment" style="min-height:600px;">
	<p style="color:#70AD47;font-family: 'Century Gothic';font-size:20px;margin:0px;">Gogo Tomago <a title="">Theme Options</a> <i class="saveprocess" style="display:none;">[Saving...]</i><i class="failsave" style="display:none;">[FAILED]</i><i class="savedinfo" style="display:none;">[SAVED]</i></p>
	<div class="bb divider"></div><br>
	<div style="min-width:100%;">
		<div style="width:20%;display:inline-block;">
<ul class="sidenav">
  <li b-id="jto1"><a class="active">General Settings</a></li>
  <li b-id="jto4"><a class="">Site View</a></li>
  <li b-id="jto2"><a class="">Site Features</a></li>
  <li b-id="jto3"><a class="">Theme Info</a></li>
</ul>
		</div>
		<div class="forcont">
			<div class="cont" c-id="jto1">
				<form action="" method="get" accept-charset="utf-8">
					<label>Site Title</label>
					<input onchange="doSave('blogname',$('#blogname').val());" id="blogname" type="text" value="<?php echo getOption('blogname'); ?>" fr>
					<div class="bb divider"></div>

					<label>Site Description</label>
					<textarea onchange="doSave('blogdescription',$('#blogdescription').val());" id="blogdescription" fr><?php echo getOption('blogdescription'); ?></textarea><br><br><br>
					<div class="bb divider"></div>

					<label>Footer Text </label>
					<textarea onchange="doSave('gogo_tomago_footer_text',$('#gogo_tomago_footer_text').val());" id="gogo_tomago_footer_text" style="width:60%;float:right;"><?php echo getOption('gogo_tomago_footer_text'); ?></textarea><br><br><br><br>
					<div class="bb divider"></div>

					<label>Maintenance Mode </label>
<select onchange="doSave('gogo_tomago_maintenance_mode',$('#gogo_tomago_maintenance_mode').val());" id="gogo_tomago_maintenance_mode" fr>
<?php if(getOption('gogo_tomago_maintenance_mode') == 'off'){ ?>	
  <option value="off">Off</option>
  <option value="on">On</option>
<?php } else { ?>
  <option value="on">On</option>
  <option value="off">Off</option>
<?php } ?>
</select>
					<div class="bb divider"></div>

				</form>
			</div>
      <div class="cont" c-id="jto4" style="display:none;">
          <label>Slider 1</label>
          <input onchange="doSave('gogo_tomago_slider1',$('#gogo_tomago_slider1').val());" id="gogo_tomago_slider1" type="text" value="<?php echo getOption('gogo_tomago_slider1'); ?>" fr>
          <div class="bb divider"></div>
          <label>Slider 2</label>
          <input onchange="doSave('gogo_tomago_slider2',$('#gogo_tomago_slider2').val());" id="gogo_tomago_slider2" type="text" value="<?php echo getOption('gogo_tomago_slider2'); ?>" fr>
          <div class="bb divider"></div>
          <label>Slider 3</label>
          <input onchange="doSave('gogo_tomago_slider3',$('#gogo_tomago_slider3').val());" id="gogo_tomago_slider3" type="text" value="<?php echo getOption('gogo_tomago_slider3'); ?>" fr>
          <div class="bb divider"></div>
<br><br>
          <label>Recommended Image 1</label>
          <input onchange="doSave('gogo_tomago_rec1',$('#gogo_tomago_rec1').val());" id="gogo_tomago_rec1" type="text" value="<?php echo getOption('gogo_tomago_rec1'); ?>" fr>
          <div class="bb divider"></div>
          <label>Recommended Image 2</label>
          <input onchange="doSave('gogo_tomago_rec2',$('#gogo_tomago_rec2').val());" id="gogo_tomago_rec2" type="text" value="<?php echo getOption('gogo_tomago_rec2'); ?>" fr>
          <div class="bb divider"></div>
          <label>Recommended Image 3</label>
          <input onchange="doSave('gogo_tomago_rec3',$('#gogo_tomago_rec3').val());" id="gogo_tomago_rec3" type="text" value="<?php echo getOption('gogo_tomago_rec3'); ?>" fr>
          <div class="bb divider"></div>

      </div>
			<div class="cont" style="display:none;" c-id="jto2">
				<form method="get" accept-charset="utf-8">
					<label>Google Analystic</label>
					<textarea onchange="doSave('gogo_tomago_google_analystic',$('#gogo_tomago_google_analystic').val());" id="gogo_tomago_google_analystic" fr><?php echo getOption('gogo_tomago_google_analystic'); ?></textarea><br><br><br>
					<div class="bb divider"></div>
				</form>
			</div>
			<div class="cont" style="display:none;" c-id="jto3">
 <table style="width:100%;">
  <tr>
    <td tbt>Version</td>
    <td tbt>Info</td>
    <td tbt>Final Date</td>
  </tr>
  <tr>
    <td><b>1.0.0 - Installed Version</b></td>
    <td>First Version</td>
    <td>12 February 2017</td>
  </tr>
</table> <br>
			</div>
		</div>
	</div>
  <a href="https://kutemukan.com/profile/ruby/" style="position:fixed;bottom:10%;right:7%;width:50px;height:50px;border-radius:50%;background-color:#59C090;font-weight:bold;cursor:pointer;text-decoration: none;"><br><b style="font-size:17px;color:white;padding-left:20px;">:)</b></a>
  <a href="https://www.facebook.com/real.jihantoro/" style="position:fixed;bottom:10%;right:10%;width:50px;height:50px;border-radius:50%;background-color:#1E88E5;font-weight:bold;cursor:pointer;text-decoration: none;"><br><b style="font-size:17px;color:white;padding-left:14px;">FB</b></a>
</div>
<script src="<?php echo get_template_directory_uri() . '/js/bundle.js'; ?>"></script>
<script type="text/javascript">
!function() {
		$('[b-id]').each(function(){
		var pid = $(this).attr("b-id")
		, 	cid = $('[c-id="'+pid+'"]')
		,  	noc = $('[c-id!="'+pid+'"]')
		, 	bdo = $('[b-id="'+pid+'"] > a')
		, 	ndo = $('[b-id!="'+pid+'"] > a');
		
		$('[b-id="'+pid+'"]').click(function(){
			bdo.addClass('active');
			ndo.removeClass('active');

			$('.cont[c-id="'+pid+'"]').show();
			$('.cont[c-id!="'+pid+'"]').hide();
		});
	});
}(window.jQuery);
function doSave (on,ov) {
	if(on && ov.length > 0)
	{ 
		$.ajax({
			url   : "<?php bloginfo('url');?>/wp-admin/admin.php?gogo-tomago-settings", 
			type  : 'POST',
			dataType: 'html',
			data  : {on:on,ov:ov},
			beforeSend  : function(){
				$('.saveprocess').show();
			},
			success : function(result){
				$('.saveprocess').hide();
				$('.savedinfo').show();
				setTimeout(function(){
	$('.savedinfo').hide();
}, 1000);
			},
            error: function(){
				$('.saveprocess').hide();
				$('.failsave').show();
				setTimeout(function(){
	$('.failsave').hide();
}, 1000);
            }
		});
	}
}

</script>