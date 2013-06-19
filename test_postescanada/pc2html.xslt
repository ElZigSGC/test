<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="xml" indent="yes" omit-xml-declaration="yes"/>

  <xsl:template match="/">
    <html>
      <head>
        <title>Forfaits disponibles</title>
        <meta charset="utf-8"/>
      </head>
      <body>
        <h2>Voici les forfaits disponibles pour votre envoi</h2>
        <form action="" method="get">
          <ul>
            <xsl:apply-templates select="price-quotes/price-quote[.//guaranteed-delivery='true']"/>
          </ul>
          <input type="submit" value="Complétez votre commande"/>
        </form>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="price-quote">
    <li>
      <input type="radio" name="codeForfait" value="{service-code}" />
      <xsl:value-of select="service-name" />, 
      <xsl:value-of select="price-details/due" />
      (délai de livraison garanti : <xsl:value-of select=".//expected-transit-time"/> jours)
    </li>
  </xsl:template>
  
  
</xsl:stylesheet>
