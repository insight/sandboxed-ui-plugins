Overview
========

The insight system is a customizable intelligence system that can expose, transport and render application internal data and general application
administration interfaces in a uniform fashion. It also allows for interacting with the application via the generated UIs.

The user interfaces are generated via _User Interface (UI) Plugins_ that any compliant UI host environment can load.

The first UI environment to support these plugins is [FirePHP Companion](http://www.christophdorn.com/Tools/#FirePHP Companion). Many more
are planned and prioritized based on user contributions and perceived need. Any integrated development environment is a great candidate.

_User Interface (UI) Plugins_ are simply mini HTML/CSS/JavaScript programs written according to the [CommonJS](http://www.commonjs.org/)
standards. At their most basic level they look like this:

    <package>/lib/main.js ~

        var CONSOLE = require('insight-plugin-api/console');

        exports.main = function() {
            CONSOLE.log("Hello World");
        }

    <package>/package.json ~

        {
            "implements": {
                "cadorn.org/insight/@meta/plugin/0": {
                    "main": "main",
                }
            },
            "mappings": {
                "insight-plugin-api": {
                    "catalog": "http://registry.pinf.org/jsinsight.org/github/catalog.json",
                    "name": "plugin-api",
                    "revision": "master"
                },
            }
        }

The _main()_ function is called by the host environment once all plugin resources are loaded. The _mappings_ property in
_package.json_ declares the dependencies for the plugin and maps their respective APIs to local aliases to be used
in _require()_ calls according to the [CommonJS Mappigs/C proposal](http://wiki.commonjs.org/wiki/Packages/Mappings/C).

Ultimately what makes such a CommonJS package an _Insight UI Plugin_ is the use of the
[Insight Plugin API](https://github.com/insight/plugin-api) as declared above and adherence to _Environmental Constraints_
as documented in the [Authoring](http://github.com/insight/sandboxed-ui-plugins/blob/master/docs/Authoring.md) guide.

One important point to note is that the host environment for these plugins sandboxes the plugins to restrict access
to anything other than plugin local or relevant resources, actions and events as specified by the host environment's security policy.
This isolation is essential to ensure that even if a malicious plugin is loaded it cannot bring harm to the host environment.
