<?xml version="1.0"?> 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0"> 
<xsl:template match="/"> 
<html>
<body bgcolor="#ffffff"> 
<center> 
<h3>Table of Employees</h3> 
</center> 
<table align="center" border="1"> 
<tr bgcolor="a2a2af"> 
<th>EMPID</th> 
<th>EMPNAME</th> 
<th>SALARY</th> 
<th>DOB</th> 
<th>DOJ</th> 
<th>ADDRESS</th> 
<th>DEPTNAME</th> 
<th>DESIGNATION</th> 
</tr> 
<xsl:for-each select="employeedetails/employee"> <tr> 
<td> 
<xsl:value-of select="empid"/> 
</td> 
<td> 
<xsl:value-of select="empname"/> 
</td> 
<td> 
<xsl:value-of select="salary"/> 
</td>
<td> 
<xsl:value-of select="dob"/> </td> 
<td> 
<xsl:value-of select="doj"/> </td> 
<td> 
<xsl:value-of select="address"/> </td> 
<td> 
<xsl:value-of select="deptname"/> </td> 
<td> 
<xsl:value-of select="designation"/> </td> 
</tr> 
</xsl:for-each> 
</table> 
</body> 
</html> 
</xsl:template> 
</xsl:stylesheet> 
