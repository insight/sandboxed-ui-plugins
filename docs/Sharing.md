Sharing
=======

There are several approaches to sharing an _Insight UI Plugin_.


Via the insight/sandboxed-ui-plugins project
--------------------------------------------

The goal of the [insight/sandboxed-ui-plugins](https://github.com/insight/sandboxed-ui-plugins) project is to collect plugins
that are useful for a large variety of applications irrespective of the application's language of implementation or use of a specific framework or library.

The idea is to develop a suite of plugins with a common look and feel that solve common problems such as caching logic monitoring,
request routing visualization, user profiling etc...

Plugins shared via this project must adhere to the following rules:

 * Must use the _Insight API_ currently [incubated as part of the FirePHP project](http://reference.developercompanion.com/#/Tools/FirePHPCompanion/API/) for all server components. The _Insight API_ will be implemented in a large number of programming languages and each plugin will have server components for each implementation.
 * Must be of use on a general basis and thus language, framework and library agnostic
 * Must adhere to the look and feel guidelines (yet to be established)
 * Must be licensed as MIT
 * May not include advertising or any kind of branding

To share your plugin via this project send a github pull request.


Via the firephp/ui-plugins project
----------------------------------

The goal of the [firephp/ui-plugins](https://github.com/firephp/ui-plugins) project is to collect plugins
that are useful for working with PHP-based applications and specific PHP frameworks and libraries.

Plugins shared via this project must adhere to the following rules:

 * Must use the _Insight API_ as implemented in the [FirePHP project](http://reference.developercompanion.com/#/Tools/FirePHPCompanion/API/) for all server components.
 * Must be of use with PHP applications, frameworks and libraries
 * Must have a pleasant look and feel ideally consistent with other plugins (specific guidelines will be established in time)
 * Must be licensed as MIT
 * May not include advertising or any kind of branding

To share your plugin via this project send a github pull request.


Via your own site
-----------------

If you have developed a plugin with a very narrow and specilized focus that is not relevant to a larger audience
or you don't want to contribute your code you can host the plugin yourself.

A plugin is typically distributed as an archive with installation and usage instructions.


Future
======

There are many features and services planned that will make developing, sharing and finding plugins completely seamless and trivial.

All you need to do for now is start developing plugins and the new features and services once available will start working with everything you have built in
the meantime.
