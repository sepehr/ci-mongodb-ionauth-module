#CodeIgniter MongoDB IonAuth Module
CodeIgniter [IonAuth](https://github.com/benedmunds/CodeIgniter-Ion-Auth/) library as a standalone HMVC module with optional MongoDB support.

It's not intended to work with vanilla CodeIgniter setups, make sure that you're using **Modular Extensions**. If you're looking to add MongoDB support to a regular IonAuth library (not a module), have a look at [CodeIgniter MongoDB IonAuth](https://github.com/sepehr/ci-mongodb-ionauth) which provides a patch to add mongodb support to IonAuth library.

##Requirements
* [CodeIgniter Modular Extensions](https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc/wiki/Home)
* [CodeIgniter MongoDB Session Library](https://github.com/sepehr/ci-mongodb-session)
* [CodeIgniter MongoDB Active Record Library](https://github.com/alexbilbie/codeigniter-mongodb-library/tree/v2)

##Installtion
* Move each file to its corresponding directory within your modular CodeIgniter application.
* Make sure that all config directives in `mongodb.php`, `mongodb_session.php` and `ion_auth.php` files are properly set to your will.