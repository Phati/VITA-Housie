<!DOCTYPE html>
<html>
    <head>
        <title>VITA HOUSIE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            #sub{
                display: none;
            }
            #msg1{
                display: none;
            }
        </style>
    </head>
    <body>
        <div class="container" style="margin-top:50px;"> 
            <div class="col-md-8 col-md-offset-2 jumbotron">
                <h1 style="text-align:center;">Housie</h1>
                <form action="print.php">
                    <div class="form-group">
                      <label class="col-md-8 col-md-offset-2 " for="input1">These words will be randomly printed on the tickets</label>
                      <textarea rows="8" cols="10"  name="words" id="word" class="form-control" onchange="checklength()" placeholder="Please enter atleast 10 words separated by comma" required></textarea>
                        <small><p id="msg1" class="text-danger"></p></small>
                        
                      <div class="form-group" style="margin-top:10px;">
                        <input type="number"
                          class="form-control" name="total" aria-describedby="helpId" min="2" max="80"
                          placeholder="Please enter the number of tickets to generate" required>
                        
                      </div>
                      <button style="margin-top:10px;"  type="button" onclick="checklength()" class="btn btn-warning">Submit</button>
                      <button style="margin-top:10px;" id="sub" name="s" type="submit" class="btn btn-success">Generate</button>
                    </div>
                </from>
                
            </div>
             
          


        </div>

        <script>
            function checklength()
            {

                var array=document.getElementById("word");   
                var msg=document.getElementById("msg1"); 
                if(array.value=="")
                {
                    msg.style.display="block";
                    msg.innerHTML="Please enter the words";
                    return;
                }

                array=array.value.split(",").map(function(item){
                    return parseInt(item,10);
                });
                var msg=document.getElementById("msg1"); 
                var bt=document.getElementById("sub"); 
                

                if(array.length<10)
                {
                    msg.style.display="block";
                    msg.innerHTML="Please enter more words";
                    bt.style.display="none";
                }

                else
                {
                    msg.innerHTML=" ";
                    bt.style.display="block";

                }



            }
            
        </script>



    </body>
</html>