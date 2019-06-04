
function ValidationForm()
{
	var result = true;
	var msg = "";
	
	if(document.forms[0]['Nom'].value=='')
	{
		result = false;
		msg += "Nom ne peut �tre vide\n";
	}
	if(document.forms[0]['EmailContact'].value!='' && !verifEmail(document.forms[0]['EmailContact'].value))
	{
		result = false;
		msg += "Email Contact mal form�\n";
	}
	if(document.forms[0]['EMail'].value!='' && !verifEmail(document.forms[0]['EMail'].value))
	{
		result = false;
		msg += "Email mal form�\n";
	}
	
	if(document.forms[0]['CodePostal'].value!='' && !verifCodePostal(document.forms[0]['CodePostal'].value))
	{
		result = false;
		msg += "Code Postal mal form�\n";
	}
	
	if(document.forms[0]['Telephone'].value!='' && !verifTelephone(document.forms[0]['Telephone'].value))
	{
		result = false;
		msg += "Telephone mal form�\n";
	}
	
	if(document.forms[0]['Fax'].value!='' && !verifTelephone(document.forms[0]['Fax'].value))
	{
		result = false;
		msg += "Fax mal form�\n";
	}
	
	if(document.forms[0]['PetitLogo'].value=='')
	{
		result = false;
		msg += "Petit Logo ne peut �tre vide\n";
	}
	
	if(document.forms[0]['GrandLogo'].value=='')
	{
		result = false;
		msg += "Grand Logo ne peut �tre vide\n";
	}
		
	if(!result)
	{
		alert(msg);
	}
	return result;
}
