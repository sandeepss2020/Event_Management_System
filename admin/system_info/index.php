<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>

<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: scale-down;
		border-radius: 100% 100%;
	}
	img#cimg2{
		height: 50vh;
		width: 100%;
		object-fit: contain;
		/* border-radius: 100% 100%; */
	}
</style>
<div class="col-lg-12">
	<div class="card card-outline card-maroon rounded-0 shadow">
		<div class="card-header">
			<h5 class="card-title">System Information</h5>
			<!-- <div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_department" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New</a>
			</div> -->
		</div>
		<div class="card-body">
			<form action="" id="system-frm">
			<div id="msg" class="form-group"></div>
			<div class="form-group">
				<label for="name" class="control-label">System Name</label>
				<input type="text" class="form-control form-control-sm" name="name" id="name" value="<?php echo $_settings->info('name') ?>">
			</div>
			<div class="form-group">
				<label for="short_name" class="control-label">System Short Name</label>
				<input type="text" class="form-control form-control-sm" name="short_name" id="short_name" value="<?php echo  $_settings->info('short_name') ?>">
			</div>













			<fieldset>
				<legend>Other Information</legend>
				<div class="form-group">
					<label for="email" class="control-label">Email</label>
					<input type="email" class="form-control form-control-sm" name="email" id="email" value="<?php echo $_settings->info('email') ?>">
				</div>
				<div class="form-group">
					<label for="contact" class="control-label">Contact #</label>
					<input type="text" class="form-control form-control-sm" name="contact" id="contact" value="<?php echo $_settings->info('contact') ?>">
				</div>
				<div class="form-group">
					<label for="address" class="control-label">Office Address</label>
					<textarea rows="3" class="form-control form-control-sm" name="address" id="address" style="resize:none"><?php echo $_settings->info('address') ?></textarea>
				</div>
			</fieldset>
			</form>
		</div>
		<div class="card-footer">
			<div class="col-md-12">
				<div class="row">
					<button class="btn btn-sm btn-primary" form="system-frm">Update</button>
				</div>
			</div>
		</div>

	</div>
</div>
<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        	_this.siblings('.custom-file-label').html(input.files[0].name)
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	function displayImg2(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	_this.siblings('.custom-file-label').html(input.files[0].name)
	        	$('#cimg2').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	function displayImg3(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	_this.siblings('.custom-file-label').html(input.files[0].name)
	        	$('#cimg3').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$(document).ready(function(){
		 $('.summernote').summernote({
		        height: '60vh',
		        toolbar: [
		            [ 'style', [ 'style' ] ],
		            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
		            [ 'fontname', [ 'fontname' ] ],
		            [ 'fontsize', [ 'fontsize' ] ],
		            [ 'color', [ 'color' ] ],
		            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
		            [ 'table', [ 'table' ] ],
					['insert', ['link', 'picture']],
		            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
		        ]
		    })
	})
</script>