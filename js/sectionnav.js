// JavaScript Document
document.getElementById("default").addEventListener("click", keep_active, false);
document.getElementById("page_one").addEventListener("click", keep_active, false);
document.getElementById("page_two").addEventListener("click", keep_active, false);
document.getElementById("page_three").addEventListener("click", keep_active, false);

function keep_active(event)
{
	var current_button = (event.target || event.srcElement);
	
	var elements = [];
	
	elements[0] = "default";
	elements[1] = "page_one";
	elements[2] = "page_two";
	elements[3] = "page_three";
	
	for(var i = 0; i < elements.length; i++)
	{
		if(current_button.id == elements[i])
		{
			document.getElementById(elements[i]).className = "active";
		}
		else
		{
			document.getElementById(elements[i]).className = "inactive";
		}
	}
}





