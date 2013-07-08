Lelesys SocialBookmark Plugin
======================

This plugin adds SocialBookmarks to your websites.

Warning: This plugin is experimental.

Quick start
-----------

* include the plugin's TypoScript definitions to your own one's
(located in, for example, `Packages/Sites/Your.Site/Resources/Private/TypoScripts/Library/ContentElements.ts2`) with:

```
include: resource://Lelesys.Plugin.SocialBookmarks/Private/TypoScripts/Library/NodeTypes.ts2
```

* include the plugin's Stylesheet to your own one's where you add other stylesheets of the site.

```
<link href="{f:uri.resource(path: 'resource://Lelesys.Plugin.SocialBookmarks/Public/Stylesheets/Socialbookmark.css')}" rel="stylesheet" media="screen">
```

Usage
-----
* add the plugin content element "Lelesys SocialBookmarks" to the position of your choice.
* add the plugin content element "Lelesys SocialBookmarks Item" under "Lelesys SocialBookmarks".
In page inspector there is drop down available for social networking sites icons,
where you can select icons of your choice.