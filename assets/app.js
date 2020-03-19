Dropzone.autoDiscover = false

var myDropzone = new Dropzone('#imgDrop', {
   url: 'drop_upload.php',
   addRemoveLinks: true,
   autoProcess: false,
   autoProcessQueue: false,
   uploadMultiple: false,
   parallelUploads: 20,
   maxFiles: 20
})

myDropzone.on('success', function(res) {
   var { file_name } = JSON.parse(res.xhr.response)

   res.previewElement.append(
      Dropzone.createElement(
         `<input type="hidden" name="drp_name[]" value="${file_name}"/>`
      )
   )
})

$(document).ready(function() {
   $('#form-img').submit(function(e) {
      $('#img-uploaded').html('')

      e.preventDefault()

      var this_ = $(this)

      myDropzone.processQueue()
      myDropzone.on('queuecomplete', function() {
         var data = this_.serialize()
         $.ajax({
            url: 'insert_img.php',
            method: 'POST',
            data: data,
            dataType: 'JSON',
            success: function(res) {
               if (res.result) {
                  $('#img-uploaded').html('upload success')
               }
            }
         })
      })
   })
})
