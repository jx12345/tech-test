Sky Tech Test
=============

Jim Margetts 7th Jan 2015
-------------------------

###Covering Note / Technologies Used

####Server Side Technologies
To implement the server side handling of the form I have used PHP in conjunction with the CodeIgniter framework.

The reasons for choosing PHP are:

* It is widely available across many hosting platforms.
* It has a large user base.
* It is well suited to writing server side form handling functionality such as this sort of application.

The reasons for choosing CodeIgniter are:

* It is easy to use, has a large user base and is easy to understand even for users that are not familiar with it.
* It is lightweight in fact here it is really just used for routing and to provide a familiar MVC structure.

####Client Side Technologies
On the client side I have used Twitter Bootstrap as a front end framework. I have used jQuery to add some dynamic functionality to the form and have used underscore.js as a templating engine.

The reasons for choosing Twitter Bootstrap are:

* It makes it very easy to quickly create a reasonable looking interface which scales responsively onto different sized screens.
* Again it has a large user base, it is well documented and is generally accepted as one of the leading front end frameworks.

The reasons for using jQuery are:

* It makes basic dynamic functionality such as is used in this project very quick to implement and easy to understand.

The reasons for using underscore are:

* It provides a simple templating engine so that the html for a new table row can be written out clearly as a template rather than writing the html from within javascript and we can embed javascript code into the template so the `array_index` can be passed into the html.
* It is very small and lightweight.

####Installation
The application is configured to run in the root folder of a virtual host under the Apache web server. It should run irrelevant of the virtual host name but the base_url and sub folder, if required, can be set in `/application/config/config.php`.

Eg. `$config['base_url'] = 'http://tect-test/sky';`

By default the application is set to use the full url including the filename of the front controller. Eg urls such as http://techtest/ index.php/people are used.However, if Apache is configured to allow .htaccess overrides (eg. `AllowOveride All` is set) then the file `/application/config/config.php` can be edited as follows in order to allow clean urls of the type `http://techtest/people`

`$config['index_page'] = 'index.php';`

to

`$config['index_page'] = '';`

A full working copy of the system is available at [http://www.jmware.co.uk/sky](http://www.jmware.co.uk/sky)

A git repo is available at [https://github.com/jx12345/techtest](https://github.com/jx12345/techtest)

BTW… Let me know if you want me to take these down.