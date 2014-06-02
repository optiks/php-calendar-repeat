<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>php-calendar-template</title>
    
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">    
  </head>
  <body>
    <div id="content"></div>

    <div class="container">
       <div class="control-group">
          <button name="add" type="button" class="btn btn-primary">Add another entry...</button>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- UserFrosting is using Handlebars.js -->
    <script src="http://builds.handlebarsjs.com.s3.amazonaws.com/handlebars-v1.3.0.js"></script>

    <?php require_once("templates/repeat.html"); ?>
    <script>
       var source   = $("#repeat-template").html();
       var template = Handlebars.compile(source);

       $("#add_repeat").on("click", function() {
          var new_repeat_context  = { repeat_id: 0 };
          var html     = template(new_repeat_context);
          $("#content").append(html);
          $(html).on("submit", function(e) {
             e.preventDefault();
             alert("submitted");
          }); 
       });
    </script>
  </body>
</html>
