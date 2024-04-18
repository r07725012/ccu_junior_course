<html>
<body>
{{$hello}}
</br>
{{$str1|capitalize}}
</br>
{{$str2|cat:"Information Engineering"}}
</br>
{{$str3|date_format:"%Yyear%mmonth%dday"}}
</br>
{{$str4|default:"NA"}}
<br>
{{$str5|indent:8:"*"}}
<br>
{{$str6|lower}}
<br>
{{$str7|replace:"no":"have"|replace:"No":"Have"}}
</br>
<br>

<table border="1">
{{section name=i loop=$CM step=1}}

	<tr>
	{{if ($CM[i].CMID % 4) neq o and ($CM[i].CMID % 4) neq 1}}
	<td>{{$CM[i].CMTitle}}</td>
	{{else}}
	<td bgcolor="blue"> {{$CM[i].CMTitle}} </td>
	{{/if}}
	</tr>
	
{{/section}}
</table>
<br>

<form>
<select name="ClassRoom">
{{foreach from=$CR key=k item=value }}
<option value=$value> {{$value}}</option>
{{/foreach}}

</select>
</form>




</body>
</html>