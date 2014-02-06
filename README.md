WPEngine's version of TimThumb
==============================

This is a holding place for the WPEngine approved version of TimThumb which is otherwise found at [http://wp-common.s3.amazonaws.com/timthumb.php]().

Why have I done this?

After the TimThumb security vulnerability issue, WPEngine put in place a script to [automatically update](http://wpengine.com/2011/11/22/timthumb-script-scanner/) all instances of TimThumb on WPEngine sites to the latest (WPEngine approved) version.

I have a number of web sites hosted with WPEngine, many of which use TimThumb. All of them are deployed using WPEngine's excellent git deployment tools. However, when WPEngine updates TimThumb, there's no way for that update to get back to my local repos, so when I next deploy TimThumb gets reverted to the older version. A day or two later, WPEngine's script then updates it again.

I don't really like this back and forth, and don't want to have to manually download TimThumb all the time, so I now install TimThumb on all my sites as a git submodule. Whenever I deploy, the latest version gets pushed.

If you ever find that the version here is out of sync with the official WPEngine version, [let me know](http://rowatt.com/contact) and I'll update it.

If you have any questions about TimThumb, or want to thank the folk who maintain it, please go to the [official TimThumb site](http://www.binarymoon.co.uk/projects/timthumb/).
