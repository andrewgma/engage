var bookmarklet_box = null;

function closebm()
{
	if(bookmarklet_box)
	{
		document.body.removeChild(bookmarklet_box);
	}
	else
	{
		if(document.getElementById("politicalBM"))
		{
			document.body.removeChild(document.getElementById("politicalBM"));
		}
		
	}
}


function openbm()
{
	closebm();
	
	bookmarklet_box = document.createElement('div');
	bookmarklet_box.style.position = "fixed";
	bookmarklet_box.style.width = "315px";
	bookmarklet_box.style.top = "15px";
	bookmarklet_box.style.zIndex = "99999";
	bookmarklet_box.style.right = "15px";
	bookmarklet_box.style.border = "5px solid #808080";
	bookmarklet_box.style.background = "#FFFFFF";
	
	bookmarklet_box.id = "politicalBM";
	
	var query_url = document.URL;

	var url = "http://vyu.me/politicalHack/bookmarkletDisplay.php?" + window.btoa(query_url);
	
	bookmarklet_box.innerHTML = "<div style='text-align: right; padding: 4px;font-weight: bold;'><a style='color: #FFFFFF;text-decoration: none;' href='javascript:closebm();'>X</a></div>" + "<iframe src='"+url+"' height='400px' width='315px' style='border: 0;border-top: 1px solid #000;'></iframe>";

	document.body.appendChild(bookmarklet_box);
}


openbm();
