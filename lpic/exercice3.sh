#!/bin/sh

if [ $# -eq 0 ]

then

 echo "$0 : You must give/supply one integers"

 exit 1

fi

if test $1 -gt $2

then

 echo "$1 number grater then $2"

else

 echo "$1 number lsser then $2"

fi
