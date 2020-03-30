$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    
    
    $uploadCrop = $('#upload-demo').croppie({
      url : $('#upload-demo-image').val(),
        enableExif: true,
        enableOrientation: true,    
        viewport: { // Default { width: 100, height: 100, type: 'square' } 
            width: 200,
            height: 200,
            type: 'circle' //square
        },
        boundary: {
            width: 300,
            height: 300
        }
    });
    
    
    $('#image').on('change', function () {
      var reader = new FileReader();
        reader.onload = function (e) {
          $uploadCrop.croppie('bind', {
            url: e.target.result
          }).then(function(data){
            console.log('jQuery bind complete',data);
          });
        }
        reader.readAsDataURL(this.files[0]);
    });
    
    
    $('.user-form').on('click', function (ev) {
      // ev.preventDefault();
      $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
      }).then(function (base64) {
        console.log(base64)
        $('#profile_picture').val(base64);
          $('.user-form').unbind().submit();
  
     
      });
    });  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
      });
      
      
      $uploadCrop = $('#upload-demo').croppie({
        url : $('#upload-demo-image').val(),
          enableExif: true,
          enableOrientation: true,    
          viewport: { // Default { width: 100, height: 100, type: 'square' } 
              width: 200,
              height: 200,
              type: 'circle' //square
          },
          boundary: {
              width: 300,
              height: 300
          }
      });
      
      
      $('#image').on('change', function () {
        var reader = new FileReader();
          reader.onload = function (e) {
            $uploadCrop.croppie('bind', {
              url: e.target.result
            }).then(function(data){
              console.log('jQuery bind complete',data);
            });
          }
          reader.readAsDataURL(this.files[0]);
      });
      
      
      $('.user-form').on('click', function (ev) {
        // ev.preventDefault();
        $uploadCrop.croppie('result', {
          type: 'canvas',
          size: 'viewport'
        }).then(function (base64) {
          console.log(base64)
          $('#profile_picture').val(base64);
            $('.user-form').unbind().submit();
    
       
        });
      });