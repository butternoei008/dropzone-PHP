Dropzone.autoDiscover = false

var myDropzone = new Dropzone('#imgDrop', {
   url: 'drop_upload.php',
   addRemoveLinks: true,
   autoProcess: false,
   autoProcessQueue: false,
   uploadMultiple: false,
   parallelUploads: 20,
   maxFiles: 20,
   maxFilesize: 1,
   acceptedFiles: "image/*",
   dictDefaultMessage: 'Drop file here',
   dictFileTooBig: 'Up to 1 MB in size',
   dictMaxFilesExceeded: 'No more than 20 images',
   dictCancelUpload: '<i class="fas fa-lg fa-times-circle"></i>',
   dictRemoveFile: '<i class="fas fa-lg fa-times-circle"></i>'
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
