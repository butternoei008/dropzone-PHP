<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dropzone</title>

   <link rel="stylesheet" href="dropzone/dist/min/dropzone.min.css">
</head>

<body>
   <form id="form-img">
      <div id="img-uploaded"></div>
      <input type="text" name="drp_post" required>
      <div class="dropzone" id="imgDrop">

      </div>
      <button type="submit">Save</button>
   </form>

   <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   <script src="dropzone/dist/dropzone.js"></script>
   <script src="assets/app.js"></script>
</body>

</html>