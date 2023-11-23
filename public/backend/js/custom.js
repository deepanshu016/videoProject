
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
            $('#loader-container').hide();
            var errors = xhr.responseJSON.errors;
            $.each(errors, function(index, value) {
                $("#"+index).html(value)
            });
        },
        success: function(data){
            $('#loader-container').hide();
            if(data.status == 'error'){
                $.each(data.errors, function(key, value) {
                    $('#' + key).addClass('is-invalid');

                    $('#' + key).html(value);
                });
            }
            if(data.status == 'success'){
                showNotify(data.message,data.status,data.url);
            }
            if(data.status == 'errors'){
                showNotify(data.message,data.status,data.url);
            }
        }
    });
})
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