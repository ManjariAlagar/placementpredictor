<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>List of Applicants</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>NAME</th>
      <th>DOB</th>
	  <th>AGE</th>
	  <th>GENDER</th>
	  <th>DEGREE</th>
	  <th>COURSE</th>
	  <th>CGPA</th>
    </tr>
    <xsl:for-each select="placementform/Student_personal">
    <tr>
      <td><xsl:value-of select="fname"/></td>
      <td><xsl:value-of select="dob"/></td>
	  <td><xsl:value-of select="age"/></td>
	  <td><xsl:value-of select="gender"/></td>
	  <td><xsl:value-of select="degree"/></td>
	  <td><xsl:value-of select="course"/></td>
	  <td><xsl:value-of select="cgpa"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>