
Sandboxed UI Plugins for Insight Clients
========================================

This project contains [CommonJS](http://www.commonjs.org/) programs to be loaded as _User Interface (UI) Plugins_ into clients suporting the
[Insight](http://www.christophdorn.com/Research/#Insight) system. Plugins use the [Insight Plugin API](https://github.com/insight/plugin-api)
to communicate with the Insight host environment.

The insight system is being incubated as part of the [FirePHP Companion](http://www.christophdorn.com/Tools/#FirePHP Companion) tool and
there is a PHP implementation bundled with the [FirePHP 1.0](http://reference.developercompanion.com/#/Tools/FirePHPCompanion/Introduction/)
release which is usable via _FirePHP Companion_. JavaScript, Java, Perl, Ruby and other language implementations are planned.

See [Overview](http://github.com/insight/sandboxed-ui-plugins/blob/master/docs/Overview.md) in the
[Documentation](http://github.com/insight/sandboxed-ui-plugins/blob/master/docs/) for an introduction.


Using
=====

_UI Plugins_ can be run with [FirePHP Companion](http://www.christophdorn.com/Tools/#FirePHP Companion) which is the first supporting client.
On the server [FirePHP 1.0](http://reference.developercompanion.com/#/Tools/FirePHPCompanion/Introduction/) is needed.

See [Using](http://github.com/insight/sandboxed-ui-plugins/blob/master/docs/Using.md) for installation and usage instructions. Information about
available _UI Plugins_ can be found under [Plugins](http://github.com/insight/sandboxed-ui-plugins/blob/master/docs/Plugins.md).


Contributing
============

You can write your own _UI Plugins_ and contribute them to this project or share them with others on your own.

See [Authoring](http://github.com/insight/sandboxed-ui-plugins/blob/master/docs/Authoring.md) and
[Sharing](http://github.com/insight/sandboxed-ui-plugins/blob/master/docs/Sharing.md) for more information.


Roadmap
=======

This project and the [Insight](http://www.christophdorn.com/Research/#Insight) project as a whole is currently in public **BETA**.
The APIs are relatively stable although some changes may still be made. Your participation by using _UI Plugins_ and providing
feedback while writing your own will drive the plugin system towards the first stable release.

Milestones
----------

 * Basic UI Elements via HTML/CSS/JavaScript (**DONE - but need way to define HTML snippets in files to be injected at runtime**)
 * Basic interaction with _Insight_ system on backend server (**DONE**)
 * Basic interaction with _Insight_ system on client (**DONE**)
 * CommonJS [Mappings/C](http://wiki.commonjs.org/wiki/Packages/Mappings/C) support for using libraries in programs (**DONE**)
 * Expand number of PHP-specific plugins

Additional milestones will be prioritized based on user feedback and perceived need.


Support & Feedback
==================

[http://groups.google.com/group/insight-dev/](http://groups.google.com/group/insight-dev/)


Author
======

This project is a part of the [Insight](http://www.christophdorn.com/Research/#Insight) project maintained by
[Christoph Dorn](http://www.christophdorn.com/).


Documentation License
=====================

[Creative Commons Attribution-NonCommercial-ShareAlike 3.0](http://creativecommons.org/licenses/by-nc-sa/3.0/)

Copyright (c) 2010 [Christoph Dorn](http://www.christophdorn.com/)


Code License
============

[MIT License](http://www.opensource.org/licenses/mit-license.php)

Copyright (c) 2010 [Christoph Dorn](http://www.christophdorn.com/)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
