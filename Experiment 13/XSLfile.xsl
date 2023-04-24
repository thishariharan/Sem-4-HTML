<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/products">
    <html>
      <head>
        <title>The XSLT Result</title>
      </head>
      <body>
        <table border="1">
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Availability</th>
          </tr>
          <xsl:for-each select="product[price &gt; 50]">
            <tr>
              <td><xsl:value-of select="name"/></td>
              <td><xsl:value-of select="description"/></td>
              <td><span style="background-color: yellow;"><xsl:value-of select="price"/></span></td>
              <td><xsl:value-of select="avl"/></td>
            </tr>
          </xsl:for-each>
          <xsl:for-each select="product[price &lt;= 50]">
            <tr>
              <td><xsl:value-of select="name"/></td>
              <td><xsl:value-of select="description"/></td>
              <td><xsl:value-of select="price"/></td>
              <td><xsl:value-of select="avl"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
