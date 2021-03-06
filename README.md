![devCUHead](https://www.devcu.com/mediasrc/github-banner.png?V=1.0)

[![License](https://img.shields.io/badge/License-GNUv3-important.svg)](https://github.com/GaalexxC/IPS-Application-Boilerplate/blob/master/LICENSE)
[![Version](https://img.shields.io/badge/Version-1.0.0-ff69b4.svg)](https://www.devcu.com/devcu-tracker/)
[![Build](https://img.shields.io/badge/Build-Release-yellow.svg)](https://www.devcu.com/devcu-tracker/)
[![Status](https://img.shields.io/badge/Status-Stable-success.svg)](https://www.devcu.com/devcu-tracker/)
[![Development](https://img.shields.io/badge/Development-Active-success.svg)](https://www.devcu.com/devcu-tracker/)
[![Platform](https://img.shields.io/badge/Platform-IPS4.4+-blue.svg)](https://www.devcu.com/devcu-tracker/)
[![GitHub last commit (branch)](https://img.shields.io/github/last-commit/GaalexxC/IPS-Application-Boilerplate/development.svg)](https://www.devcu.com/devcu-tracker/)

## ** Become a Patron/Supporter of devCU **
	
**Please support our Open Source Projects and keep this software free**

- Patrons and Donators have access to Beta and Release version up to 2 weeks before the public

[![donate](https://www.devcu.com/mediasrc/patronize_devcu.png)](https://www.patreon.com/devcu/) [![donate](https://www.devcu.com/mediasrc/support_devcu.png?v=1)](https://www.devcu.com/clients/donations/)

    
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

#### For IPS 4.4x developers a simple boilerplate for Application building. A standard Application directory setup with a minimal set of files including routers, controllers , templates and dev folder for a starting base. Includes default index page for starters.

## Features

- Standard file and directory structure for IPS 4.4 Application development
- Generic "dashboard" modules [Front/Admin] for starters
- Application.php includes standard permissions, icon and FrontNavigation
- Extensions: FrontNavigation
- Modules Front: Main Controller
- Modules Admin: Overview and Settings Controllers (Enable applications, group permissions, custom appplication name)
- Data JSON: acpmenu, acpsearch, extensions, furl, modules, settings [application, hooks, widgets, schema, themesettings, tasks and version not provided but generated automatically]
- dev folder: lang and html starter files. [css, js, resources, or email not provided]

## Usage and Install

- First create a new application in IPS developer Mode and fill in the information. Application directory will be your application name, make note of it for below.
- Enter the Developer center for your application
  - Create your version typically 1.0.0 (10000)
  - Create "dashboard" in Modules-Admin (You can choose another name for this directory but make sure to update the boilerplate directory name as well as file class names)
  - Create "dashboard" in Modules-Front (You can choose another name for this directory but make sure to update the boilerplate directory name as well as file class names)

- A small amount of editing on your part will get you up and running in a couple minutes. Rename all instances of boilerplate/Boilerplate [case sensitive!!!] in files and directory names to match your aplications name. I suggest using a text app like [TextCrawler](https://www.digitalvolcano.co.uk/textcrawler.html) to do it in a second or your favorite text editor to find and replace [Match Case please!!!].
- Files
  - \Application.php [6 instances]
  - \modules\front\dashboard\main.php [7 instances]
  - \modules\admin\dashboard\overview.php [6 instances]
  - \modules\admin\dashboard\settings.php [22 instances]
  - \extensions\core\FrontNavigation\Boilerplate.php [10 instances plus file name]
  - \dev\lang.php [23 instances]

- Upload the contents of the src directory to your new app directory

- To test, make it the default application and add a menu item for your application

<img src="https://www.devcu.com/mediasrc/boilerplate_admin.PNG?V=1.1" width="40%"></img>
<img src="https://www.devcu.com/mediasrc/boilerplate_index.PNG?V=1.1" width="40%"></img>

- Have fun developing!


## ** Updated Notes **

07/25/19

- 1.0.0 Stable Release
- IPS development Tools required for IPS 4.4+ developer environment
- Working on a simpler method to avoid all those edits and just plug and play
- Please report and issues, feature requests, or suggestions in Issues


## License

GNU General Public License v3.0

## Development / Contribute / Join Team

Please! Contact Me

## Copyrights

Created for devCU Software ©2020
