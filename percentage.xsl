
<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Your skill percentage</h2>
  <table border="1">
    
    <xsl:for-each select="/placementpredictor/percentagecalculator">
	<tr bgcolor="#9acd32">
      <th>Skill</th>
      <th>Score</th>
    </tr>
    <tr>
      <td><xsl:value-of select="python"/></td>
      <td><xsl:value-of select="./python_score"/></td>
    </tr>
	<tr>
      <td><xsl:value-of select="datasc"/></td>
      <td><xsl:value-of select="./datascience_score"/></td>
    </tr>
	<tr>
      <td><xsl:value-of select="ds"/></td>
      <td><xsl:value-of select="./ds_score"/></td>
    </tr>
	<tr>
      <td><xsl:value-of select="resulttitle"/></td>
      <td><xsl:value-of select="./result"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>