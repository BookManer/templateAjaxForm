<div class="form-container">
    <form id="callbackForm" action="[[~[[*id]]]]" method="post" class="ajax_form af_example d-flex flex-column">
    	<label class="form-group">
    		<span>Имя</span>
    		<input class="input form-control" name="name" type="text" [[+fi.name]] >
    		<p class="error-field alert alert-danger d-none"></p>
    	</label>
    	<label class="form-group">
    		<span>Телефон</span>
    		<input class="input form-control" name="phone" type="tel" [[+fi.phone]] >
		    <p class="error-field alert alert-danger d-none"></p>
    	</label>
    	<label class="form-group">
    		<span>E-mail</span>
    		<input class="input form-control" name="email" type="email" [[+fi.email]] >
		    <p class="error-field alert alert-danger d-none"></p>
    	</label>
    	<label class="form-group">
    		<span>Ваш вопрос:</span>
    		<textarea name="message" class="textarea form-control" [[+fi.message]] ></textarea>
    		<p class="error-field alert alert-danger d-none"></p>
    	</label>
    	<button class="btn_blue btn btn-primary">отправить</button>
    	<p class="error-alert alert alert-danger mt-2"></p>
    	<style>
    	    .error-alert {
	            display: none;
	        }
    	</style>
    </form>
</div>