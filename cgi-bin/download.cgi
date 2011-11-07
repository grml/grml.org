#!/usr/bin/python

current_version = "2010.04"
mirror_url = "http://download.grml.org/"

#### END OF CONFIGURATION ####

import cgi, re

safe_regex = re.compile('^[a-zA-Z0-9_]+$')

def validate_input(value):
	x = safe_regex.match(value)
	if not x:
		raise Exception("unsafe input found" + str(x))
	return value

def get_download_url(flavour, arch, filetype):
	folder = ''
	product = 'grml'
	if arch == "amd64": product = 'grml64'
	if flavour == 'full':
		pass
	else:
		product += '-' + flavour

	filetypes = {
		'iso': '',
		'bt': '.torrent',
		'md5': '.md5',
		'sha1': '.sha1',
		'signature': '.sha1.asc'
	}
	fileext = filetypes[filetype]
	if "rc" in current_version: 
		folder = "devel/"

	iso = product + '_' + current_version + '.iso' + fileext
	return mirror_url + folder +  iso

def run():
	import cgitb
	cgitb.enable()

	try:
		form = cgi.FieldStorage()
		try:
			global current_version
			current_version = form['version'].value
		except Exception:
			pass
		flavour = validate_input(form['flavour'].value)
		arch = validate_input(form['arch'].value)
		filetype = "iso"
		if "filetype" in form: filetype = validate_input(form['filetype'].value)

		print "Status: 302"
		print "Location: " + get_download_url(flavour, arch, filetype)
		print
	except Exception, e:
		print "Content-Type: text/html"     # HTML is following
		print                               # blank line, end of headers
		print "<H1>Error</H1>"
		print "Please select flavour and architecture."
		print e

if __name__ == "__main__":
	run()

