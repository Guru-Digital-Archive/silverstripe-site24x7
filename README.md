# Silverstripe Site24x7

The Silverstripe Site24x7 plugin helps you add your [Site24x7's Real User Monitoring (RUM)](https://www.site24x7.com/real-user-monitoring.html) code snippet to your Silverstripe site.

## Requirements
 * SilverStripe ^3.2
 * Site24x7 RUM key

## Installation
Installation with [Composer](https://getcomposer.org/) is the preferred method, as it will ensure you have all the required dependencies.
```shell
cd /your/project/folder
composer require gdmedia/silverstripe-site24x7
```
or
Ensure all requirements are installed and download the [the zip](../../archive/master.zip).
Extract and rename `silverstripe-site24x7-master` to `silverstripe-site24x7`

Once the files are installed, you must run dev/build and flush
`http://youprojectdomain.nz/<b>dev/build?flush=all</b></pre>

Then add your RUM Key in admin settings
<pre>http://youprojectdomain.nz/admin/settings/</pre>

## Versioning

This project follows [Semantic Versioning](http://semver.org) paradigm. That is:

> Given a version number MAJOR.MINOR.PATCH, increment the:
>  1. MAJOR version when you make incompatible API changes,
>  2. MINOR version when you add functionality in a backwards-compatible manner, and
>  3. PATCH version when you make backwards-compatible bug fixes.
>  4. Additional labels for pre-release and build metadata are available as extensions to the MAJOR.MINOR.PATCH format.
