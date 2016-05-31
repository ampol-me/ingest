<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Untitled 1</title>
      <!-- Material Design fonts -->
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
    
      <!-- Bootstrap -->
      <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
      <!-- Bootstrap Material Design -->
      <link rel="stylesheet" type="text/css" href="/dist/css/bootstrap-material-design.css">
      <link rel="stylesheet" type="text/css" href="/dist/css/ripples.min.css">
      
      <!-- Dropdown.js -->
      <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">
    
      <!-- Page style -->
      <link href="index.css" rel="stylesheet">
      
      <!-- upload -->
      <link rel="stylesheet" type="text/css" href="/upload/uploadifive.css">
</head>


<body>

<div class="navbar navbar-warning">
  <div class="container-fluid">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">Ingest On-Air</a>
    </div>
    <div class="navbar-collapse collapse navbar-warning-collapse">
      
      <form class="navbar-form navbar-left">
        <div class="form-group has-error">
          <input type="text" size="100" class="form-control col-md-8" placeholder="Search">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Hi, Ampol Phimphila
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)"><i class="material-icons">exit_to_app</i>Action</a></li>
            <li><a href="javascript:void(0)"><i class="material-icons">exit_to_app</i>Another action</a></li>
            <li><a href="javascript:void(0)"><i class="material-icons">exit_to_app</i>Something else here</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0)"><i class="material-icons">exit_to_app</i>Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            <div class="well bs-component">
                <form class="form-horizontal">
                            
                      <fieldset>
                        <legend>Ingest Upload</legend>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-xs-4 col-xs-offset-4 col-sm-4 col-sm-offset-0">
                                    <?php 
                                    
                                    echo __DIR__;
                                    ?>
                                    <div id="queue"></div>
                                    <input type="text" readonly="" class="form-control" placeholder="Browse...">
                                    <input type="file" id="file_upload" class="form-control" name="file_upload"id="inputFile" multiple="true">
                            		
                                    <a href="javascript:$('#file_upload').uploadifive('upload')" class="btn btn-warning btn-fab"><i class="material-icons">cloud_upload</i></a>
                                </div>
                            </div>
                                                    
                        
                                                
                        
                      </fieldset>
                </form>
            </div>
        </div>    
        <div class="col-md-6">
            <div class="well bs-component">
                <form class="form-horizontal">
                            
                      <fieldset>
                        <legend>File Codename</legend>
                        
                            <div>

                              <!-- Nav tabs -->
                              <ul class="nav nav-pills nav-justified navtabs-warning " role="tablist">
                                <li role="presentation" class="active"><a href="#TVC" aria-controls="TVC" role="tab" data-toggle="tab">TVC</a></li>
                                <li role="presentation"><a href="#Promote" aria-controls="Promote" role="tab" data-toggle="tab">Promote</a></li>
                                <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-toggle="tab">List</a></li>
                                
                              </ul>
                            
                              <!-- Tab panes -->
                              <div class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade in active" id="TVC">
                                    <table class="table table-striped table-bordered table-hover ">
                                      <thead>
                                      <tr >
                                        <th class="text-center">#</th>
                                        <th class="text-center">ประเภท</th>
                                        <th class="text-center">รายการ</th>
                                        <th class="text-center">เวลา</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                     <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                     
                                     <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                     
                                     <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                     
                                      </tbody>
                                    </table>
                                  
                                  
                                  
                                  </div>
                                  <div role="tabpanel" class="tab-pane fade" id="Promote">
                                    <table class="table table-striped table-bordered table-hover ">
                                      <thead>
                                      <tr >
                                        <th class="text-center">#</th>
                                        <th class="text-center">ประเภท</th>
                                        <th class="text-center">รายการ</th>
                                        <th class="text-center">เวลา</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                     <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr><tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                     
                                      </tbody>
                                    </table>
                                  
                                  </div>
                                  <div role="tabpanel" class="tab-pane fade" id="list">
                                  <table class="table table-striped table-bordered table-hover ">
                                      <thead>
                                      <tr >
                                        <th class="text-center">#</th>
                                        <th class="text-center">ประเภท</th>
                                        <th class="text-center">รายการ</th>
                                        <th class="text-center">เวลา</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                      <tr class="danger">
                                        <td>3</td>
                                        <td class="text-center">TVC</td>
                                        <td>T0075_AIS_Brand_น้องพลอย_30s.mpg</td>
                                        <td class="text-center">14:29 16 พฤษาคม 2559</td>
                                      </tr>
                                     
                                     
                                      </tbody>
                                    </table>
                                  
                                  
                                  
                                  </div>
                                 
                                </div>
                            
                            </div>   
                            
                             
                            
                        
                        
                            
                        
                            
                                           
                        
                      </fieldset>
                </form>
            </div>
        </div>
      </div>



</div>  





<!--
Scripts
-->




<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- Twitter Bootstrap -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Material Design for Bootstrap -->
<script src="/dist/js/material.js"></script>
<script src="/dist/js/ripples.min.js"></script>
<script>
  $.material.init();
</script>

<!-- upload -->
<script src="/upload/jquery.uploadifive.min.js" type="text/javascript"></script>
<script type="text/javascript">
	<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadifive({
				'auto'             : true,
				'checkScript'      : '/upload/check-exists.php',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'queueID'          : 'queue',
				'uploadScript'     : '/upload/uploadifive.php',
                'onUploadComplete' : function(file, data) { console.log(data); }
			});
		});
</script>

<!-- Sliders -->
<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>

<!-- Dropdown.js -->
<script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
<script>
  $("#dropdown-menu select").dropdown();
</script>





</body>
</html>