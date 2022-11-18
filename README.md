# Gravatar plugin for Craft CMS 4.x

Adds gravatar support to CraftCMS twig templates.

**This project is a fork of public archive [noxify/craft-gravatar](https://github.com/noxify/craft-gravatar), 
which has been updated to be compatible with Craft4 and was created due
to the "public archive" status of the forked repo.**

## Requirements

This plugin requires PHP8 & Craft CMS 4.0.0 or later.

## Installation

Install via the [CraftCMS Plugin Store](https://plugins.craftcms.com/)\
Or on the command line (from the project root directory):
```
composer require belniakmedia/craft-gravatar
php craft plugin/install
```

## Configuring Gravatar

The plugins allows you to configure the following settings:

**Directly from your CP:**

> * Gravatar URL ( `default: //gravatar.com/avatar/` )
> * Size ( `default: 80` )
> * Rating ( `default: mp` )
> * Default Avatar ( `default: mp` )

**Via project config file:**
> See `config.php` in the plugin root folder for more information.

Detailed instructions what are the allowed values are defined here: https://de.gravatar.com/site/implement/images/


## Using Gravatar

### Get the Gravatar URL with default settings

```
{{ craft.gravatar.url( 'hello@example.com' ) }}
```

### Get the Gravatar URL with custom settings

```
{{ craft.gravatar.url( 'hello@example.com', {'s' : 120, 'd': 'identicon', 'r' : 'x'} ) }}
```

### Get the Gravatar IMG with default settings

```
{{ craft.gravatar.img( 'hello@example.com' ) }}
```

### Get the Gravatar IMG with custom settings

```
{{ craft.gravatar.img( 'hello@example.com', {'s' : 120, 'd': 'identicon', 'r' : 'x'} ) }}
```

### Get the Gravatar IMG with custom settings and attributes

```
{{ craft.gravatar.img( 'hello@example.com', {'s': 120}, {'class' : 'useravatar'} ) }}
```

Brought to you by [Belniak Media](https://github.com/BelniakMedia)