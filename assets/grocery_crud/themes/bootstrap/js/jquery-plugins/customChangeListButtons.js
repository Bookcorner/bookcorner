jQuery(document).ready(function($) {
$("table td:contains('Administrator')").closest("tr").find("a .edit-icon").remove();
$("table td:contains('Administrator')").closest("tr").find("a .delete-icon").remove();
});