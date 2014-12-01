$(document).ready(function() {
	// Attendence read-only
	$('#Attendence_editView_fieldName_cf_827').attr('readonly', 'readonly');
	$('#Attendence_editView_fieldName_cf_827').siblings('.add-on').remove();
	$('#Attendence_editView_fieldName_cf_827').attr('disabled','disabled');
	$('#Attendence_editView_fieldName_cf_825').attr('readonly', 'readonly');
	$('#Attendence_editView_fieldName_cf_825').siblings('.add-on').remove();
	$('#Attendence_editView_fieldName_cf_825').attr('disabled','disabled');
});
$('select[name="assigned_user_id"]').prop('disabled', true).trigger("chosen:updated");