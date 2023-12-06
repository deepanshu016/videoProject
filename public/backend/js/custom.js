
function getCurrentUrl(){
    var current_url = window.location.href;
    current_url = current_url.split("/");
    var new_url = current_url[0]+'//'+current_url[2]+'/'+current_url[3];
    return new_url;
}
function showNotify(message,status,url){
    if(status == 'success'){
        toastr.success(message);
        setTimeout(function(){
            window.location = url;
        }, 2000);
    }else if(status == 'error'){
        toastr.error(message);
    }else if(status == 'errors'){
        toastr.error(message);
    }
}

$(document).on("submit",'.all-form',function(e){
    e.preventDefault();
    var method = $(this).attr('method');
    var url = $(this).attr("action");
    var form = $(this)[0];
    var form_data = new FormData(form);
    $.ajax({
        type: method,
        url: url,
        data:form_data,
        dataType: 'json',
        processData: false,
        contentType: false,
        beforeSend: function() {
            $('#loader-container').show();
        },
        error: function(xhr){
           if (xhr.status === 422) {
                $('#loader-container').hide();
                var errors = JSON.parse(xhr.responseText);
                $.each(errors.errors, function(index, value) {

                    $("#" + index).html(value);
                });
            } else {
                console.log("No errors found in response.");
            }
            success = false;
        },
        success: function(data){
            $('#loader-container').hide();
            if(data.status == 'success'){
                showNotify(data.msg,data.status,data.url);
            }
            if(data.status == 'errors'){
                showNotify(data.msg,data.status,data.url);
            }
        }
    });
});






$(document).on("submit",'.upload-video',function(e){
    e.preventDefault();
    var method = $(this).attr('method');
    var url = $(this).attr("action");
    var form = $(this)[0];
    var form_data = new FormData(form);
    const fileInput = document.getElementById('featured_image');
    const file = fileInput.files[0];
     let startTime = new Date().getTime();
     let success = false; 
    $.ajax({
        type: method,
        url: url,
        data:form_data,
        dataType: 'json',
        processData: false,
        contentType: false,
        beforeSend: function() {
            $('#loader-container').show();
        },
        xhr: function() {
            const xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener('progress', function(event) {
                if (success && event.lengthComputable) {
                    $(".progress-bar-wrraper").show();
                    const progressBarFill = $('#progressBar');
                    const progressPercentage = $('#progressPercentage');
                    const percent = (event.loaded / event.total) * 100;
                    progressBarFill.css('width', percent + '%');
                    progressBarFill.attr('aria-valuenow', percent);
                    let currentTime = new Date().getTime();
                    let elapsedTime = (currentTime - startTime) / 1000; 
                    let remainingBytes = event.total - event.loaded;
                    let uploadSpeed = event.loaded / elapsedTime;
                    let timeLeft = remainingBytes / uploadSpeed;
                    let minutesLeft = Math.floor(timeLeft / 60);
                    let secondsLeft = Math.floor(timeLeft % 60);
                    progressPercentage.text(percent.toFixed(0) + '%');
                    $('#timeLeft').text(minutesLeft + ' min ' + secondsLeft + ' sec left');
                }
            }, false);
            return xhr;
        },
        error: function(xhr){
           if (xhr.status === 422) {
                $('#loader-container').hide();
                var errors = JSON.parse(xhr.responseText);
                $.each(errors.errors, function(index, value) {

                    $("#" + index).html(value);
                });
            } else {
                console.log("No errors found in response.");
            }
            success = false;
        },
        success: function(data){
            $('#loader-container').hide();
            success = true;
            if(data.status == 'error'){
                $.each(data.errors, function(key, value) {
                    $('#' + key).addClass('is-invalid');

                    $('#' + key).html(value);
                });
            }
            if(data.status == 'success'){
                showNotify(data.msg,data.status,data.url);
            }
            if(data.status == 'errors'){
                showNotify(data.msg,data.status,data.url);
            }
        }
    });
});


$(document).on('click','.delete-data', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var url = $(this).attr('url');
    Swal.fire({
        title: "Are you sure ?",
        text: "You want to delete some data",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        closeOnConfirm: true,
        closeOnCancel: true
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
                type: "POST",
                url: url,
                data:{id:id},
                dataType: 'json',
                success: function(data){
                    if(data.status == 'success'){
                        showNotify(data.message,data.status,data.url);
                    }
                    if(data.status == 'errors'){
                        showNotify(data.message,data.status,data.url);
                    }
                }
        }); 
      } else if (result.isDenied) {
       showNotify('Action Cancelled','error','');
      }
    }); 
});

$(document).on("change",".switch-video-type",function(e){
   const type = $(this).val();
   if(type === '1'){
        $(".upload_video").show();
        $(".uplaod_video_url").hide();
   }
   if(type === '2'){
        $(".upload_video").hide();
        $(".uplaod_video_url").show();
   }
})