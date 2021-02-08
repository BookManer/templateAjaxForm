$("[name='phone']").mask("+7 (xxx) xxx xx-xx", {
        translation: {
          'x': {
            pattern: /[0-9]/, optional: false, fallback: '8',
          }
        }
    }); 
    $(document).on('af_complete', function(event, response) {
        var form = response.form;
        $('.error-field').addClass('d-none');
        
        if (form.attr('id') === 'callbackForm' && !response.success) {
            var errorFieldNames = Object.entries(response.data);
            errorFieldNames.forEach(function(fieldError) {
                $("[name='"+fieldError[0]+"'] + .error-field").removeClass('d-none').html(fieldError[1]);
            });
            
            form.find('.error-alert').html(response.message).show();
        }
        
        if (form.attr('id') === 'callbackForm' && response.success) {
            form.find('.error-alert').hide();
            $('.error-field').addClass('d-none');
            $('#callbackModal').modal('hide');
            $('.overlay').addClass('animate');
            setTimeout(function() {
                $('.overlay').removeClass('animate');
            }, 2500);
        }
    })
