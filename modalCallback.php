<div class="modal fade" id="callbackModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Оставить заявку</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        [[!AjaxForm?
             &snippet=`FormIt`
             &form=`callbackForm`
             &hooks=`email`
             &emailTpl=`mailTpl`
             &emailSubject=`Сообщение с сайта site.modx`
             &emailFrom=`borshblack@gmail.com`
             &emailTo=`AN@redken.online`
             &validate=`name:required,phone:required,email:email:required,message:required`
             &validationErrorMessage=`Заполните все поля!`
             &successMessage=`Успех!`
         ]]
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>