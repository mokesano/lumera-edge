<?xml version="1.0"?>

<!--
  * plugins/generic/xmlGalley/transform/test.xsl
  *
  * Copyright (c) 2017-2026 Simon Fraser University
  * Copyright (c) 2024-2026 Rochmady and Lumera Teams
  * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
  *
  * Test XSL stylesheet for external XSLT using the XML Galleys plugin.
  *
  -->

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="text" omit-xml-declaration="yes"/>
<xsl:strip-space elements="*"/>

	<xsl:template match="/root">
		<xsl:apply-templates/>
	</xsl:template>
	
	<xsl:template match="level_1">
		<xsl:value-of select="level_2"/>
		<xsl:apply-templates/>

		<xsl:variable name="test"> Success</xsl:variable>
		<xsl:value-of select="$test"/>
	</xsl:template>

	<xsl:template match="level_2"/>
</xsl:stylesheet>
