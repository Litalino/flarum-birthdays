# Birthdays

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/litalino/flarum-birthdays.svg)](https://packagist.org/packages/litalino/flarum-birthdays) [![Total Downloads](https://img.shields.io/packagist/dt/litalino/flarum-birthdays.svg)](https://packagist.org/packages/litalino/flarum-birthdays)

A [Flarum](http://flarum.org) extension. Adds birthdays to user.

PLugin Developer: datlechin/flarum-birthdays

PLugin Clone Co-development: Litalino/flarum-birthdays

![](https://i.imgur.com/jfkTnp2.png)
![](https://i.imgur.com/vUtUvIS.png)

## Installation

Install with composer:

```sh
composer require litalino/flarum-birthdays:"*"
```

## Updating

```sh
composer update litalino/flarum-birthdays:"*"
php flarum cache:clear
```

## Updating from Datlechin

This extension replaces [Birthdays](https://github.com/datlechin/flarum-birthdays).

**Please backup your data before attempting the update!**

You can upgrade from any of the older versions of the Birthdays extension.

Then upgrade from the old extension to the new one:

```sh
composer remove datlechin/flarum-birthdays
composer require litalino/flarum-birthdays
```

When you enable the new extension, the permissions, settings and the data from Datlechin Birthdays will be moved to Litalino Birthdays.

## Goal

- [x] Show birthdays on user card.
- [x] User can set their own birthdays.
- [x] Add ability to user can hide their date of birth and age.
- [ ] Add a widget to show birthdays on the forum homepage.
- [x] Add birthday field to `EditUserModal` modal.
- [x] Add for the users birthday during registration.
- [x] Add ability to who can see and edit the birthdays.

## Links

- [Packagist](https://packagist.org/packages/litalino/flarum-birthdays)
- [GitHub](https://github.com/litalino/flarum-birthdays)
- [Discuss](https://discuss.flarum.org/d/29793)
