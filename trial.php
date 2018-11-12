
<!DOCTYPE html>
<html>
    <head>
        <title>Natours | Exciting tours for adventurous people</title>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <link href="styles/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    </head>
            <?php

            echo"

            <div class='col-md-7'>

             <input required type='text' name='shootdate1' id='shootdate1' title='Choose your desired date' />

            <script>
	  		$( function() {
	   			$( '#shootdate1').datepicker({
	   				minDate: 0
	   			});
	  		});
            </script>
            
             </div>

             <form action='details.php' method='post' class='form-horzontal'>

                                        <div class='form-group'>

                                            <label class='col-md-5 control-label'>From </label>

                                            <div class='col-md-7'>

                                                <input required type='text' id='shootdate' title='Choose your desired date'/>
                                                <script>
	  		$( function() {
	   			$( '#shootdate').datepicker({
	   				minDate: 0
	   			});
	  		});
            </script>
                                                
                                            </div>

                                        </div>

                                        <br>
                                        <br>

                                        <div class='form-group'>

                                            <label class='col-md-5 control-label'>Price </label>

                                            <div class='col-md-7'>

                                                <p class='price'>$$pro_price </p>
                                                
                                            </div>
                                        
                                        </div>


                                    </form>
            ";
            ?>
    </body>

</html>