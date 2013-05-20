TYPO3 Neos Lelesys SocialBookmark Plugin
======================

This plugin adds SocialBookmarks to TYPO3 Neos websites.

Quick start
-----------

* include the plugin's TypoScript definitions to your own one's (located in, for example, `Packages/Sites/Your.Site/Resources/Private/TypoScripts/Library/ContentElements.ts2`, with:

```
include: resource://Lelesys.Plugin.SocialBookmarks/Private/TypoScripts/Library/NodeTypes.ts2
```

* include the plugin's Stylesheet to your own one's where you add other stylesheets of the site.

```
<link href="{f:uri.resource(path: 'resource://Lelesys.Plugin.SocialBookmarks/Public/Stylesheets/Socialbookmark.css')}" rel="stylesheet" media="screen">
```

* add the plugin content element "Lelesys-SocialBookmarks" to the position of your choice.