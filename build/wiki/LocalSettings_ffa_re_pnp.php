<?php

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgSitename = "FFA Real Estate";
$wgMetaNamespace = "FFA_Real_Estate";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/ffa_re_pnp";

## The URL path to static resources (images, scripts, etc.)
## This variable cannot be moved to LocalSettings.php because it is required by the logo below
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/logo-ffa-re.png";

$wgDBname = "wiki_ffa_re_pnp";
