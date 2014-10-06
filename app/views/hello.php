<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
    <div class="content">
    <script id="test-template" type="text/x-handlebars-template">
            <h1>{{title}}</h1>
            <p>{{body}}</p>
            <ul>
                {{#each days_of_week}}
                    <li>{{day}}</li>
                {{/each}}
            </ul>
    </script>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/handlebars/handlebars-v2.0.0.js"></script>
    <script>
        $(function() {
            $.post("/getdata").done(function(data){
//                alert(data.title);
                var source = $("#test-template").html();
                var template = Handlebars.compile(source);
                $('.content').html(template(data));
            });
        });
    </script>
</body>
</html>
