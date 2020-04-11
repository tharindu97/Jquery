<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery AJAX load example</title>
</head>
<body>
    <h1>jQuery AJAX load example</h1>
    <button>Load Content</button>
    <div class="content">
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('button').click(function(){
                $('.content').load('content.php');
            });
        });
    </script>
</body>
</html>