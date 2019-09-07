function available(str)
{

	var req=new XMLHttpRequest();
	req.open("get","http://localhost/app/php/ajax.php?user="+str,true);
	req.send();

	req.onreadystatechange=function()
	{
		if(req.readyState==4 && req.status==200)
		{


			if(req.responseText==0){
			document.getElementById('ajax').innerHTML="This Username Is Already Taken";
			document.getElementById('ajax').style.color="red";
				}
			else if(req.responseText==1)
			{
				if(str.length>0){
					document.getElementById('ajax').innerHTML="You Can Take This UserName  ";
					document.getElementById('ajax').style.color="green";
					
				}	

			}
		}
	};
}