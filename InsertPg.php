
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Home Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<script type="text/javascript">
	function reset()
	{
		document.Form.g_val.value="";
		document.Form.ID.value="";
	}
	</script>
</head>
<body>
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:150px;">
        <h1 class="text-center">Web application (ERP)</h1>
        <h3 class="text-center">(Enter the Record)</h3>
    </div>
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#" data-toggle="tooltip" data-placement="top" title="Select Page to Navigate">Pages-></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Insert Data">Insert Data</a></li>
            <li><a href="ShowPg.php" data-toggle="tooltip" data-placement="top" title="Shows Tabulated Data">Show Tabulated Data</a></li>
	   </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="jumbotron" style="background:#1c2B4A">
                <div class="page-header">
                    <h2 class="text-center" style="color:white">Insert Value<h2>
                </div>
                <form class="form-horizontal" action="insert.php" method="post" name="Form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" style="color:white">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder="e.x., 1,2,..." name="ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" style="color:white">Garbage_of_details:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="garbage_val" placeholder="In Specified Format" name="g_val" required>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success" name="submit_bt">Insert</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-primary"  onclick="reset()">Reset Form</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

     

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>