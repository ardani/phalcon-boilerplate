## Lightning (PHP Framework)

Lightning is a high performance framework that sits on top of Phalcon. It's for web artisans. In consideration of the popular Web business needs, Lightning is so flexible that is capable of the development of large systems (CMS, etc) or smaller systems (API services, micro-services, etc)

> We believe development must be an enjoyable, creative experience to be
> truly fulfilling. Laravel attempts to take the pain out of development
> by easing common tasks used in the majority of web projects.
>
> *by Laravel*

The high performance version of Laravel is Lumen, but it’s not good/fast enough. Lightning is trying to be a fast full-stack framework with elegant syntax. Laravel gave me a lot of inspiration, so you may find she a bit like Laravel.

### Features

 - Optimized for high performance
 - Maintaining elegance without sacrificing performance
 - Modern toolkit, pinch of magic
 - Laravel's database agnostic migrations and schema builder
 - Laravel Elixir provides a clean, fluent API for defining basic Gulp tasks.
 - Useful helper functions

### Requirements

- PHP >= 5.6
- Phalcon PHP Extension


### Documentation

**Installation**

Lightning utilizes Composer to manage its dependencies. So, before using Lightning, make sure you have Composer installed, and execute the following command:

    composer install --ignore-platform-reqs

**Application Configuration**

All of the configuration files for the Lightning framework are stored in the config directory. Feel free to look through the files and get familiar with the options available to you.

**Environment Configuration**

It is often helpful to have different configuration values based on the environment the application is running in. For example, you may wish to use a different cache driver locally than you do on your production server. It's easy using environment based configuration.

To make this a cinch, Lightning uses the single underscore file to represent the environment configuration. In a fresh Lightning installation, the root directory of your application will contain a `_example.php` file. This is a sample environment configuration file, you should rename it to `_` manually before running the application.

Your `_` file should not be committed to your application's source control, since each developer / server using your application could require a different environment configuration. If you are developing with a team, you may wish to continue including a `_example.php` file with your application.

**HTTP Routing**

HTTP Routing is based on Phalcon's router component. Their usage is the same. You will define routes for your application in the `app/routes.php` file.

**HTTP Controllers**

Instead of defining all of your request handling logic in a single `routes.php` file, you may wish to organize this behavior using Controller classes. Controllers are stored in the `app/Controllers` directory, and generally named with the suffix `Controller`.

**Service Providers**

Service providers are the central place of Lightning application bootstrapping. What do we mean by "bootstrapped"? In general, we mean registering things, for example, registering service container bindings.

But, being different from other frameworks, each service provider in Lightning has its specific purpose, out of consideration for performance optimization.

Service providers are stored in the `app/Providers` directory, and generally named with the suffix `ServiceProvider`.

**Views**

Views contain the HTML served by your application and separate your controller / application logic from your presentation logic. Views are stored in the `resources/views` directory.

Lightning integrates Phalcon's Simple View components. In consideration of performance, instead of server-side template rendering, it is recommended to use front-end technology such as AngularJS, Jade
