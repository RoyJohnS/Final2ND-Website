<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="firstName">First Name:</label>
     <input type="text" name="firstName" id="firstName" />
  </p>
  <p><label>M:I</label>
    &nbsp;
    <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
      <option>A</option>
      <option>B</option>
      <option>C</option>
      <option>D</option>
      <option>E</option>
      <option>F</option>
      <option>G</option>
      <option>H</option>
      <option>I</option>
      <option>J</option>
    </select>
  </p>
  <p><label>Last Name:</label>&nbsp;
    <label for="LastName"></label>
    <input type="text" name="LastName" id="LastName" />
  </p>
  <p>
    <label>
      <input type="checkbox" name="CheckboxGroup1" value="male" id="CheckboxGroup1_0" />
    Male</label>
    <br />
    <label>
      <input type="checkbox" name="CheckboxGroup1" value="female" id="CheckboxGroup1_1" />
      Female</label>
    <br />
    <label for="Male"></label>
  </p>
  <p>
    <input type="submit" name="Submit" id="Submit" value="Submit" />
  </p>
</form>
</body>
</html>