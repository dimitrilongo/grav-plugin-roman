# [![Grav Mobile Detect Plugin](assets/grav-roman.png)][project]

[![Release](https://img.shields.io/github/release/dimitrilongo/grav-plugin-roman.svg)](https://github.com/dimitrilongo/grav-plugin-roman/releases)
[![Issues](https://img.shields.io/github/issues/dimitrilongo/grav-plugin-roman.svg)](https://github.com/dimitrilongo/grav-plugin-roman/issues)
[![Downloads](https://img.shields.io/github/downloads/dimitrilongo/grav-plugin-roman/total.svg)](https://github.com/dimitrilongo/grav-plugin-roman/archive/master.zip)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.txt "License")

> This plugin introduces roman numeral conversion.

Want to learn more about Roman numeral : [Wikipedia](https://en.wikipedia.org/wiki/Roman_numerals)

##### Table of Contents:

* [About](#grav-roman-plugin)
* [Installation and Updates](#installation-and-updates)
* [Usage](#usage)
    * [getRoman](#user-content-get-roman-numeral-of-number-2016)
    * [getNumber](#user-content-get-number-from-roman-numeral)
* [Disclaimer](#disclaimer)
* [Troubleshooting](#troubleshooting)
* [Contributing](#contributing)
* [License](#license)
* [Thanks](#thanks)

# Grav Roman Plugin

The **Grav Roman Plugin** for [Grav](http://github.com/getgrav/grav) convert an integer into a roman numeral and vice versa.

This plugin is an adaptation of [Craft-Roman](https://github.com/bransinanderson/Craft-Roman).

# Installation and Updates

The **Grav Roman Plugin** is easy to install with GPM.

```
$ bin/gpm install roman
```

Or clone from GitHub and put in the `user/plugins/roman` folder.

For more informations, please check the [Installation and update guide](docs/INSTALL.md).


# Usage

Inside content files.

## Examples

#### Get roman numeral of number 2016
```
{{ getRoman(2016) }}
```

#### Example Output for `{{ getRoman(2016) }}`
```
MMXVI
```

#### Get number from roman numeral
```
{{ getNumber('MCMXCVII') }}
```

#### Example Output for `{{ getNumber('MCMXCVII') }}`
```
1997
```

#### Get roman numeral of current year
```
{{ getRoman('now'|date('Y')) }}
```

#### Example Output for `{{ getRoman('now'|date('Y')) }}`
```
MMXVI
```

# Troubleshooting

If you find a bug, [please open a new issue][issues]

# Disclaimer

I've 'written' this plugin for my own use. It comes without any guarantee, so your mileage may vary in using it. If you find bugs or have great additions you'd like to share, use github to fork the project and share your improvements by initiating pull request

# Tested on Grav

[![Latest Stable Version](https://poser.pugx.org/getgrav/grav/v/stable)](https://packagist.org/packages/getgrav/grav)

# Contributing

You can contribute at any time! Before opening any issue, please search for existing issues and review the [guidelines for contributing](docs/CONTRIBUTING.md).

After that please note:

* If you find a bug, would like to make a feature request or suggest an improvement, [please open a new issue][issues]. If you have any interesting ideas for additions to the syntax please do suggest them as well!
* Feature requests are more likely to get attention if you include a clearly described use case.
* If you wish to submit a pull request, please make again sure that your request match the [guidelines for contributing](docs/CONTRIBUTING.md) and that you keep track of adding unit tests for any new or changed functionality.

See also the list of [contributors] who participated in this project.

# Licence

See [Licence](https://github.com/dimitrilongo/grav-plugin-roman/blob/master/LICENSE.txt)

# Thanks

[bransinanderson/Craft-Roman](https://github.com/bransinanderson/Craft-Roman)

[Sommerregen/grav-plugin-shortcodes](https://github.com/Sommerregen/grav-plugin-shortcodes)

[getgrav/grav](https://github.com/getgrav/grav)

[github]: https://github.com/dimitrilongo/ "GitHub account from Dimitri Longo"
[mit-license]: http://www.opensource.org/licenses/mit-license.php "MIT license"

[project]: https://github.com/dimitrilongo/grav-plugin-roman
[issues]: https://github.com/dimitrilongo/grav-plugin-roman/issues "GitHub Issues for Grav Roman Plugin"
[contributors]: https://github.com/dimitrilongo/grav-plugin-roman/graphs/contributors "List of contributors of the project"
