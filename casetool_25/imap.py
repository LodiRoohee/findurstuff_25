#!/usr/bin/python
# Attempting to use python IMAP functions in PHP.

import sys;
import imaplib;
host = 'webmail.nitt.edu';
port = 143;
uname = str(sys.argv[1]);
passwd = sys.argv[2];

conn = imaplib.IMAP4(host,port);
try:
        connection
except:
        print 0

try:
        connection.login(uname,passwd)
        print 1
except connection.error:
        print 0
        