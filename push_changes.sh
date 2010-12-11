#!/bin/sh
#script to copy all the files in this directory to the server
jekyll && rsync -avz _site/ hcl:/srv/http/
