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
          <button id="add_repeat" type="button" class="btn btn-primary">Add another entry...</button>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- UserFrosting is using Handlebars.js -->
    <script src="http://builds.handlebarsjs.com.s3.amazonaws.com/handlebars-v1.3.0.js"></script>

    <?php require_once("templates/repeat.html"); ?>
    <script>
        // Convert form data to JSON
        $.fn.serializeObject=function(){var a={},b=this.serializeArray();return $.each(b,function(){void 0!==a[this.name]?(a[this.name].push||(a[this.name]=[a[this.name]]),a[this.name].push(this.value||"")):a[this.name]=this.value||""}),a};

       var source   = $("#repeat-template").html();
       var template = Handlebars.compile(source);
       var addRepeatInstance = function (context) {
          var html  = $(template(context));
          $("#content").append(html);
          html.on("submit", function(e) {
             e.preventDefault();

             var data = $(e.target).serializeObject();
             $.post("api/repeat/create.php", data)
              .done(function() { /* show success */ })
              .fail(function() { /* show failure */ });
          });
       };

       $("#add_repeat").on("click", function() {
          var context  = { repeat_id: 0 };
          addRepeatInstance(context);
       });

       $.get("api/repeat/list.php")
        .done(function(data) {
           $.each(data, function() {
              addRepeatInstance(this);
           );
       });
    </script>
  </body>
</html>
