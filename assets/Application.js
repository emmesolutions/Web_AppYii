/* System */

/*
	[WM_AppYii]
	Web eMMe - Simply Yii-Powered Application

    	Copyright (C) 2016 Martinelli Michele

   	This program is free software: you can redistribute it and/or modify
    	it under the terms of the GNU General Public License as published by
    	the Free Software Foundation, either version 3 of the License, or
    	(at your option) any later version.

    	This program is distributed in the hope that it will be useful,
    	but WITHOUT ANY WARRANTY; without even the implied warranty of
    	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    	GNU General Public License for more details.

    	You should have received a copy of the GNU General Public License
    	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// JavaScript Refresh Page (XMLHttpRequest)

function XHRequest()
	{
		var xmlhttp;
		if (window.XMLHttpRequest) { xmlhttp=new XMLHttpRequest(); }
	
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200) { document.getElementById("WM_XHRequest").innerHTML=xmlhttp.responseText; }
			  }
		  
		xmlhttp.open("GET",Refresh,true);
		xmlhttp.send();
		
	}

