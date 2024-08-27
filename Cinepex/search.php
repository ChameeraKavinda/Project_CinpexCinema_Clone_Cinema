<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cineplex</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container  my-5" style="max-width:50%">
        <div class="text-center mt-5 mb-4">
            <h2>Movie Search</h2>
            <h3>Search this movie here</h3>
        </div>
        <input type="text" class="form-control" id="cineplex" autocomplete="off" placeholder="Search....">
    </div>
    <div id="searchresult"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript"> 
        $(document).ready(function(){
            $("#cineplex").keyup(function(){
                var input = $(this).val();
                if(input != ""){
                    $.ajax({
                        url: "livesearch.php",
                        method: "post",
                        data: {input: input},
                        success: function(data){
                            $("#searchresult").html(data);
                        }
                    });
                } else {
                    $("#searchresult").css("display", "none");
                }
            });
        });
    </script>
</body>
</html>
