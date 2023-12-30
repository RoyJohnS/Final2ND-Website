<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#rcorners2{
  border-radius: 25px;
  border: 2px solid #73AD21;
  padding: 15px;
  width: 400px;
  height: 400px;
}
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <h2>Registration Form</h2>
  
  <table id = "rcorners2" width="315" height="392" border="0">
    <tr>
      <td width="155" height="54">Fistname</td>
      <td width="12">:</td>
      <td width="106"><span id="sprytextfield1">
        <label for="fname"></label>
        <input type="text" name="fname" id="fname" />
      <span class="textfieldRequiredMsg">*</span></span></td>
      <td width="44">&nbsp;</td>
      <td width="57">&nbsp;</td>
    </tr>
    <tr>
      <td height="39">M.I.</td>
      <td>:</td>
      <td><label for="mname"></label>
        <select name="mname" id="mname">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
          <option value="G">G</option>
          <option value="H">H</option>
          <option value="I">I</option>
          <option value="J">J</option>
      </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="39">Lastname</td>
      <td>:</td>
      <td><span id="sprytextfield2">
        <label for="lname"></label>
        <input type="text" name="lname" id="lname" />
      <span class="textfieldRequiredMsg">*</span></span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="47">Password</td>
      <td>:</td>
      <td><span id="sprypassword1">
        <label for="pword"></label>
       
      <span class="passwordRequiredMsg">A value is required.</span></span>
        <label for="psw"></label>
      <input type="text" name="psw" id="psw" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="37"><p>Confirm Password</p></td>
      <td>:</td>
      <td><span id="spryconfirm1">
        <label for="cpword"></label>
       
      <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span><span id="spryconfirm2">
      <label for="cpw"></label>
      <input type="text" name="cpw" id="cpw" />
      <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="63"><input type="submit" name="button" id="button" value="Submit" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "pword");
var spryconfirm2 = new Spry.Widget.ValidationConfirm("spryconfirm2", "psw");
</script>
</body>
</html>