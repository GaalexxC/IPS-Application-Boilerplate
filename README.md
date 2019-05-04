![devCUHead](https://www.devcu.net/mediasrc/githubhead_2.gif?V=1.4)

[![License](https://img.shields.io/badge/License-GNUv3-important.svg)](https://github.com/WXdisco/IPS-localWX/blob/master/LICENSE)
[![Version](https://img.shields.io/badge/Version-1.0.0-ff69b4.svg)](https://www.devcu.com/forums/devcu-tracker/)
[![Build](https://img.shields.io/badge/Build-Stable-blueviolet.svg)](https://www.devcu.com/forums/devcu-tracker/)
[![Status](https://img.shields.io/badge/Status-Complete-critical.svg)](https://www.devcu.com/forums/devcu-tracker/)
[![Development](https://img.shields.io/badge/Development-Active-success.svg)](https://www.devcu.com/forums/devcu-tracker/)
[![Platform](https://img.shields.io/badge/Platform-IPS4.4+-blue.svg)](https://www.devcu.com/forums/devcu-tracker/)

## ** Become a Patron of devCU **
	
**Please support our Open Source Projects and keep this software free**

- Patrons have access to Beta and Release version up to 2 weeks before the public

[![donate](https://www.devcu.net/mediasrc/become_a_patron_button.png)](https://www.patreon.com/devcu/)

    
<pre>
    .-"^`\                                        /`^"-.
  .'   ___\                                      /___   `.
 /    /.---.                                    .---.\    \
|    //     '-.  ___________________________ .-'     \\    |
|   ;|         \/--------------------------//         |;   |
\   ||       |\_)      devCU Software      (_/|       ||   /
 \  | \  . \ ;  |   Open Source Projects   || ; / .  / |  /
  '\_\ \\ \ \ \ |                          ||/ / / // /_/'
        \\ \ \ \|      IPS Boilerplate     |/ / / //
         `'-\_\_\          v 1.0.0         /_/_/-'`
                '--------------------------'
</pre>

# IPS Application Boilerplate

#### For IPS 4.4x develoeprs a boilerplate for Application building. A standard Application directory setup with a minimal set of files including routers, controllers , templates and dev folder for a starting base. Includes default index page for starters.

## Features

- Standard file and directory structure for IPS 4.4 Application development
- Application.php includes standard permissions, icon and FrontNavigation
- Extensions: FrontNavigation
- Modules Front: Main Controller
- Modules Admin: Overview and Settings Controllers (Enable applications, group permissions, custom appplication name)
- Data JSON: acpmenu, acpsearch, appplication, extensions, furl, modules, settings, versions [hooks, widgets, schema, themesettings or tasks not provided]
- dev folder: lang and html starter files. [css, js, resources, or email not provided]

## Install

- Upload the boilerplate directory or import the .tar file from releases


## Usage

- Rename all instances of boilerplate/Boilerplate in files and directory names to match your aplications name
- Files
  - Application.php
  - modules\front\boilerplate\main.php
  - modules\admin\dashboard\overview.php
  - modules\admin\dashboard\settings.php
  - extensions\core\FrontNavigation\Boilerplate.php
  - \dev\lang.php

- Directories
  - modules\front\boilerplate\
  - dev\html\front\boilerplate

- Have fun developing!


## ** Updated Notes **

05/04/19

- May 4 2019 1.0.0 Stable Release
- IPS development Tools for IPS 4.4.3 developer environment
- Please report and issues, feature requests, or suggestions in Issues


## License

GNU General Public License v3.0

## Development / Contribute / Join Team

Please! Contact Me

## Copyrights

Created for devCU Software ©2019
