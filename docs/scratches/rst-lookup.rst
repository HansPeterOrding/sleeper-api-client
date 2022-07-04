Headlines
# with overline, for parts
* with overline, for chapters
= for sections
- for subsections
^ for subsubsections
" for paragraphs

Linking to subdocs:

:doc:`title of subdoc </folder/file>`

example:
:doc:`encrypt them as secrets </configuration/secrets>`



TocTree in sub docs:

.. toctree::
    :maxdepth: 1
    :glob:

    configuration/*


Creating an index at the top of the file from headlines

.. index::
   single: Configuration