#!/bin/bash

docker run -d --name="$1" -p "$2":80 debian 
