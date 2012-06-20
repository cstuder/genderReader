genderReader
============

Status: In development

PHP-based reader for the prename dictionary `nam_dict.txt` of the `gender.c`-project.

Download link for the original `gender`.c: http://www.heise.de/ct/ftp/07/17/182/

Link to the (german) article introducing `gender.c`: https://www.heise.de/artikel-archiv/ct/2007/17/182

Content
-------

The subdirectory `gender.c` contains the entire original application and documentation files. Only `nam_dict.txt` is actually used by genderReader.

This directory contains the PHP script used to generate lists from the prename dictionary. Settings required to read from the dictionary are stored within `genderReaderConfiguration.php`. The reader itself is in `genderReader.php`.

You can find some sample scripts in the `samples` directory.

Usage
-----

TODO

License
-------

The dictionary `nam_dict.txt` is licensed under the GNU Free Documentation License. (`gender.c/gnu_doc.txt`)

The `gender.c` application is licensed under the GNU Lesser General Public License. (`gender.c/lib_gplg.txt`)

The genderReader scripts and its samples are licensed under the Simplified BSD License. (`LICENSE`)


Contact
-------

The prename dictionary was created by Jörg Michael <namequality.pro@googlemail.com>. Updated and extended dictionaries are available commercially.

The genderReader scripts were written by christian studer <cstuder@existenz.ch>.

