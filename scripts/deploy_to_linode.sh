#!/bin/bash

# Deployment script - deploys local project to Linode!
# This script clones the repo to a temp directory and copies
# the cloned code to Linode.

TMPDIR="/tmp/deploy_linode_imustconfess"

if [ -d "$TMPDIR" ]; then
	rm -rf $TMPDIR
fi

mkdir $TMPDIR
cd $TMPDIR

# get the latest and greatest codes
git clone zack@gamesprediction.com:code/testsite

# use the proper path.php file
echo "Setting the proper path file";
cp $TMPDIR/imustconfess/htdocs/Paths/path_linode.php $TMPDIR/imustconfess/htdocs/Paths/path.php

# copy that shizz
echo "Deploying!! ...."
scp -r imustconfess/* zack@gamesprediction.com:/home/zack/public/i-must-confess.com/public/

# remove the tmp dir
echo "Deploy done, cleaning up"
cd /
rm -rf $TMPDIR
