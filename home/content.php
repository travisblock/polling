<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head></html>
<?php
if(isset($_GET['x'])){
	if($_GET['x']=='pemilu'){
		include "x98/pemilu.php";

	}elseif($_GET['x']=='user'){
		include "x98/user.php";

	}elseif($_GET['x']=='judul'){
		include "x98/judul.php";

	}else{
		echo "";
	}
}else{
	echo"
	<section class='no-padding-top no-padding-bottom'>
          <div class='container-fluid'>
            <div class='row'>
              <div class='col-md-4 col-sm-6'>
                <div class='statistic-block block'>
                  <div class='progress-details d-flex align-items-end justify-content-between'>
                    <div class='title'>
                      <div class='icon'><i class='icon-user-1'></i></div>
                      <strong><a href='http://blog.forstone.web.id'>blog.forstone.web.id</a></strong>
                    </div>
                  </div>
                  <div class='progress progress-template'>
                    <div role='progressbar' style='width: 20%' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' class='progress-bar progress-bar-template dashbg-1'></div>
                  </div>
                </div>
              </div>
              <div class='col-md-4 col-sm-6'>
                <div class='statistic-block block'>
                  <div class='progress-details d-flex align-items-end justify-content-between'>
                    <div class='title'>
                      <div class='icon'><i class='icon-user-1'></i></div>
                      <strong><a href='http://tools.forstone.web.id'>tools.forstone.web.id</a></strong>
                    </div>
                  </div>
                  <div class='progress progress-template'>
                    <div role='progressbar' style='width: 10%' aria-valuenow='10' aria-valuemin='0' aria-valuemax='100' class='progress-bar progress-bar-template dashbg-1'></div>
                  </div>
                </div>
              </div>
              <div class='col-md-4 col-sm-6'>
                <div class='statistic-block block'>
                  <div class='progress-details d-flex align-items-end justify-content-between'>
                    <div class='title'>
                      <div class='icon'><i class='icon-user-1'></i></div>
                      <strong><a href='?x=cdn'>cdn.forstone.web.id</a></strong>
                    </div>
                  </div>
                  <div class='progress progress-template'>
                    <div role='progressbar' style='width: 90%' aria-valuenow='90' aria-valuemin='0' aria-valuemax='100' class='progress-bar progress-bar-template dashbg-1'></div>
                  </div>
                </div>
              </div>
              <div class='col-md-4 col-sm-6'>
                <div class='statistic-block block'>
                  <div class='progress-details d-flex align-items-end justify-content-between'>
                    <div class='title'>
                      <div class='icon'><i class='icon-user-1'></i></div>
                      <strong><a href='http://ctf.forstone.web.id'>ctf.forstone.web.id</a></strong>
                    </div>
                  </div>
                  <div class='progress progress-template'>
                    <div role='progressbar' style='width: 5%' aria-valuenow='35' aria-valuemin='0' aria-valuemax='100' class='progress-bar progress-bar-template dashbg-1'></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
		";
}

?>