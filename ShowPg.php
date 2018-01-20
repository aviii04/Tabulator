<?php

mysql_connect('localhost','root',"");
mysql_select_db('intern');

$sql="select * from income";
$records=mysql_query($sql);
//--------------------------------
$num_rows=mysql_num_rows($records)+1;

?>
<html>
<head>
<title>Show Table</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>

 <div class="container-fluid" style="background-color:#F44336;color:#fff;height:150px;">
        <h1 class="text-center">Web application (ERP)</h1>
        <h3 class="text-center">Tabulated Data</h3>
    </div>
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#" data-toggle="tooltip" data-placement="top" title="Select Page to Navigate">Pages-></a></li>
            <li><a href="InsertPg.php" data-toggle="tooltip" data-placement="top" title="Insert Data">Insert Data</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Shows Tabulated Data">Show Tabulated Data</a></li>
            <li><a href="#" title="Total No. of Records" data-toggle="popover" data-placement="top" data-content="<?php echo $num_rows;?>">No. of Records Generated</a></li>
       
	   </ul>
    </nav>

<div class="container">
        <div class="row">
            <table class="table  table-bordered table-hover">
                <thead >
                    <tr class="danger">
                        <td>ID</td>
                        <td colspan="3">Maintenance</td>
                        <td colspan="2">Purchase</td>
                    </tr>
                </thead>
                <thead>
                    <tr class="warning">
                        <td>#</td>
                        <td>Maintenance<br> 1</td>
                        <td>Maintenance<br> 2</td>
                        <td>Maintenance<br> 3</td>
                        <td>Purchase<br> 1</td>
                        <td>Purchase<br> 2</td>

                    </tr>
                </thead>
				 <tbody>

<!--------------------------------------------------------------------------------------------->
<?php
$count=0;
 while($data=mysql_fetch_assoc($records)){
	 $count++;
	 $str=$data['Garbage_of_details'];
	 $result=preg_split("/,/",$str);
     $str1=$result[0];
      $str2=$result[1];

preg_match_all("/\d{1,10}(?=-)|\d{1,10}\b/",$str1,$result1);

preg_match_all("/\d{1,10}(?=-)|\d{1,10}\b/",$str2,$result2);

	//--------------------------------------------------------------------------------------------- 

	echo "<tr class='info'>";
	  echo "<td>".$data['ID']."</td>";
	  echo "<td>".$result1[0][1]."</td>";
	  echo "<td>".$result1[0][3]."</td>";
	  echo "<td>".$result1[0][5]."</td>";
	  echo "<td>".$result2[0][1]."</td>";
	  echo "<td>".$result2[0][3]."</td>";
	echo "</tr>";
	
 }

?>

 
               
                   
                </tbody>
            </table>
        </div>
    </div>
	
	
	<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>