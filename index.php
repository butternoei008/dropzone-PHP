<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dropzone</title>

   <link rel="stylesheet" href="dropzone/dist/min/dropzone.min.css">
   <style>
      .dropzone .dz-preview .dz-remove {
         position: absolute;
         top: -10px;
         right: -10px;
         z-index: 999;
         color: rgba(0, 0, 0, .3);
      }

      .dropzone {
         border: 2px dashed #0087F7;
         border-radius: 8px;
      }
   </style>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
   <script src="dropzone/dist/dropzone.js"></script>
   <script src="assets/app.js"></script>
</body>

</html>