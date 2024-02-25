#!/usr/bin/env python
import cgi
import cgitb
import sys

# Enable CGI error reporting for debugging
cgitb.enable()

# Read the image file from the POST request
form = cgi.FieldStorage()
image_file = form['image_file']

# Read the image data
image_data = image_file.file.read()

# Write the rotated image data to standard output
print("Content-Type: image/jpeg")
print()

# Write the rotated image data to standard output
sys.stdout.buffer.write(image_data[::-1])
