My first module in Drupal8
==========================


The easiest way to create a new Module is using Drush and Drupalconsole.

Create basic file for our new module
------------------------------------

Goal: create a module named **hello** in the directory _/modules/custom_ with a package name _RbitCustom_.
Output: creation of _hello.info.yml_ and _composer.json_

    ➜  mydrupalsite git:(master) drupal generate:module
    // Welcome to the Drupal module generator
    Enter the new module name: > hello
    Enter the module machine name [hello]: > hello
    Enter the module Path [/modules/custom]: >
    Enter module description [My Awesome Module]: > My First Module (Hello)
    Enter package name [Custom]: > RbitCustom
    Enter Drupal Core version [8.x]: >
    Do you want to generate a .module file (yes/no) [no]: >
    Define module as feature (yes/no) [no]: >
    Do you want to add a composer.json file to your module (yes/no) [yes]: >
    Would you like to add module dependencies (yes/no) [no]: >
    Do you confirm generation? (yes/no) [yes]: >
    Generated or updated files
     Site path: /Users/rbutti/Downloads/mydrupalsite/
     1 - modules/custom/hello/hello.info.yml
     2 - modules/custom/hello/composer.json

Create a Controller for our new module
--------------------------------------

Goal: create a Controller (named **HelloController**)with a method (named _main_) with a input parameter (_name_). The URL of our new method will be **hello/main/{name}**
Output: creation of:

*  _HelloController.php_ the Controller php file
*  hello.routing.yml the routing yml file
*  HelloControllerTest.php the Tests for our new Controller

Launch the command **drupal generate:controller**

    ➜  mydrupalsite git:(master) drupal generate:controller
    // Welcome to the Drupal Controller generator
    Enter the module name [hello]: >
    Enter the Controller class name [DefaultController]: > HelloController
    Enter the Controller method title (leave empty and press enter when done) [ ]: > Hello World First Module
    Enter the action method name [hello]: > main
    Enter the route path [hello/hello/{name}]: > hello/main/{name}
    Enter the Controller method title (leave empty and press enter when done) [ ]: >
    Do you want to generate a unit test class (yes/no) [yes]: >
    Do you want to load services from the container (yes/no) [no]: >
    Do you confirm generation? (yes/no) [yes]: >
    Generated or updated files
     Site path: /Users/rbutti/Downloads/mydrupalsite/
     1 - modules/custom/hello/src/Controller/HelloController.php
     2 - modules/custom/hello/hello.routing.yml
     3 - modules/custom/hello/Tests/Controller/HelloControllerTest.php

Lanch the builtin web Server with Drupal Console

    $ drupal server

Open your browser at URL:

    http://127.0.0.1:8088/hello/main/world

to access to your new page created with your first module.

