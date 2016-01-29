# MadPiper

MadPiper lets you create piped cli commands with a fluent interface.

[![Build Status](https://travis-ci.org/broeser/madpiper.svg?branch=master)](https://travis-ci.org/broeser/madpiper)
[![codecov.io](https://codecov.io/github/broeser/madpiper/coverage.svg?branch=master)](https://codecov.io/github/broeser/madpiper?branch=master)
[![License](http://img.shields.io/:license-mit-blue.svg)](http://mit-license.org)
[![SemVer 2.0.0](https://img.shields.io/badge/semver-2.0.0-blue.svg)](http://semver.org/spec/v2.0.0.html)


## Goals

- MadPiper shall be easy to use and easy to learn


## Installation

MadPiper works with PHP 5.4, 5.5., 5.6 and 7.0.

The package can be installed via composer:

``composer require broeser/madpiper``

Check your safe mode settings and restrictions, in case you want to execute
commands generated with MadPiper.

## How to use

You can use MadPiper like this:
```PHP
<?php
$madPiperCommand = new MadPiper\Command();

exec($madPiperCommand
    ->ps('u')
    ->grep('COMMAND')
);
```
Which will execute this (not very useful) command:

``ps u|grep COMMAND``

Note that neither ps() nor grep() are predefined methods, you can use almost any
command you can imagine with as many arguments as you want.

```PHP
<?php
$madPiperCommand = new MadPiper\Command();

exec($madPiperCommand
    ->ls('-ls', 'R*')
    ->…
);
```

MadPiper does not execute, ist just returns the command as string. That means,
that it should be easy to use MadPiper in your own project and with almost any
framework.

MadPiper currently does not escape arguments.

## Contributing?

Yes, please!

See [CONTRIBUTING.md](CONTRIBUTING.md) for details and/or open an issue with your questions.

Please note that this project is released with a [Contributor Code of Conduct](CODE_OF_CONDUCT.md). 
By participating in this project you agree to abide by its terms.


## MadPiper?

A pun on the pipe-character | and the fact, that this project is slightly mad.