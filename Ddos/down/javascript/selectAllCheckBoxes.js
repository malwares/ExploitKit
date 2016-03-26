<script>
function selectAllCheckBoxes(FormName, FieldName, CheckValue)

{

	if(!document.forms[FormName])

		return;

	var objCheckBoxes = document.forms[FormName].elements[FieldName];

	if(!objCheckBoxes)

		return;

	var countCheckBoxes = objCheckBoxes.length;

	if(!countCheckBoxes)

		objCheckBoxes.checked = CheckValue;

	else

		// set the check value for all check boxes

		for(var i = 0; i < countCheckBoxes; i++)

			objCheckBoxes[i].checked = CheckValue;

}
</script>