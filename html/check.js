function SendForm () {
var tmp, radiook;

if (document.getElementById('last_name1').value == '' || document.getElementById('name1').value == '' || document.getElementById('city1').value == '' || document.getElementById('email1').value == '' || document.getElementById('phone_number1').value == ''){
	alert('��������� ��� ������������ ����!');
	return false;
}

if (document.getElementById('email1').value.indexOf( "@", 2) == -1) 
{
	alert('����������� ������� �����!');
	return false;
} 
return true;
}
