#!/bin/sh
#script to copy all the files in this directory to the server
rsync *.html *.png *.css hcl:/srv/http/
