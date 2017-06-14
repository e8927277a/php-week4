<head>
<title>
week2作業
</title>
</head>
<body bgcolor="#9999FF">
<h1><center>運動會報名表</center></h1>
<center>
<h2>基本資料</h2>
<form action = "week3.php" method = "post">
<table>
<tr>
<td>姓名:</td><td><input type="text" name = "name"></td>
</tr>
<tr>
<td>性別:</td>
<td>
<input type="radio" name="gender" value="male">男
<input type="radio" name="gender" value="female">女
</td>
</tr>
<tr>
<td>手機:</td><td><input type="text" name = "phone"></td>
</tr>
<tr>
<td>e-mail:</td><td><input type="email" name = "email"></td>
</tr>
<tr>
<td>生日:</td><td><input type="date" name = "birth"></td>
</tr>
<tr>
<td>科系:</td>
<td><select name="course">
<option value="IM">資管</option>
<option value="AE">應經</option>
<option value="FI">金管</option>
<option value="APIBM">亞太</option></td>
</tr>
</table>
<h2>參加項目</h2>
<table>
<tr>
<th>田徑</th>
<tr>
<td>個人:</td>
<td><input type="radio" name="pmeter" value = "prun100">100公尺
<input type="radio" name="pmeter" value = "prun200">200公尺
<input type="radio" name="pmeter" value = "prun400">400公尺
<input type="radio" name="pmeter" value = "prun800">800公尺
<input type="radio" name="pmeter" value = "jumpheight">跳高
<input type="radio" name="pmeter" value = "jumpfar">跳遠</td>
</tr>

<tr>
<td>團體:</td>
<td><input type="radio" name="tmeter" value = "trun400">400公尺
<input type="radio" name="tmeter" value = "trun800">800公尺
<input type="radio" name="tmeter" value = "trun1200">1200公尺
<input type="radio" name="tmeter" value = "trun1600">1600公尺
<input type="radio" name="tmeter"value = "trun2000">2000公尺</td>
</tr>
<tr>
<th>球類</th>
</tr>
<tr>
<td></td>
<td><select name="sport[]" size="4" multiple="True">
<option value="s1">籃球</option>
<option value="s2">桌球</option>
<option value="s3">撞球</option>
<option value="s4">羽球</option>
</select></td>
</tr>
</table>
<input type="submit" name="Name" value="Caption">
<input type="reset" name="Name" value="Caption">
</center>
</form>
</body>