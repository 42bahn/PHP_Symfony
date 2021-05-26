#!/bin/sh

domain=$(curl -I $1 | grep 'Location:' | cut -d" " -f2)
echo $domain
