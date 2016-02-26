<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Dialog - Default functionality</title>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<!-- This is to show the preview of uploaded file in the same page -->
<form method='post' action='upload.php' enctype="multipart/form-data">
    <input name='fileToUpload' type="file" accept="image/*" onchange="loadFile(event)">
    <div>
        <img id="output" style='height:300px; width:300px' />
    </div>
    <input type="submit" value='Upload File' />
</form>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
 

</body>
</html>

