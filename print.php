<!DOCTYPE html>
<html>
    <head>
        <title>VITA HOUSIE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        
    <div class="col-md-8 col-md-offset-2 bg-info">
                <h3 style="text-align: center">TICKETS</h3>
            </div>
       

<?php
error_reporting(0);
if(isset($_REQUEST["s"]))
{

    $t=$_REQUEST["total"];
    
function createTicket() {

     
     $numbers = explode(",",$_REQUEST["words"]);
    
-
    // Each ticket has 3 rows and each row has 4 blank spaces
    $row[0][0]="a";
    $row[0][1]="b";
    $row[0][2]="c";
    $row[0][0]="d";
    $row[1][1]="e";
    $row[2][2]="f";
    $row[0][0]="g";
    $row[1][1]="h";
    $row[2][2]="i";
   

    
    for ($i=0; $i<3; $i++) {
        for ($j=0; $j<3; $j++) {
            $rand_key=array_rand($numbers,1);
            $row[$i][$j]=$numbers[$rand_key];
              
        }
        
    }
    
    $table = "";

    // The emoji images are hosted in a sub-folder
    for ($i=0; $i<3; $i++) {
        $table .= "<tr>";
        for ($j=0; $j<3; $j++) {
            $table .= "<td width=300 height=50>".$row[$i][$j]."</td>";
            
        }
        $table .= "</tr>";
    }

    $table = "<table cellspacing=5 cellpadding=10 border=2 class='table table-responsive' style='background-color: light-gray'>$table</table>";

    return $table;
}

$html =  "";

// Generate 2x5 tickets per sheet
for ($i=0; $i<$t; $i++) {
    $html .=   "<p align='center' >".($i+1)."<p>".createTicket();
}

echo "<div class='container col-md-8 col-md-offset-2'>".$html."</div>";




}
?>




    </body>
</html>