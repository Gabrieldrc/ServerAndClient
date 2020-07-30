# A React App & Server with Phalcon

## Commands to run it
``` bash
#  To run the SERVER you must be inside of server/ directory and run:
composer phalcon serve
#  Listener->  localhost:8000/

#  To run the Client you must be inside of client/ directory and run:
npm start
#  Listener->  localhost:3000/

** It's important to run both in diferent consoles **
```

This is our presentation page. It's distributed as:

## Server

``` bash
# php
version:7.4.8 (cli)
# phalcon framework devtool
version:^4.0
# db mysql
adapter     => Mysql,
host        => localhost,
username    => root,
password    => ,
dbname      => test,
charset     => utf8
```

### Request:

**Get: '/team'**

Response a USER object in json format like:
``` bash
  {
    'id':         INTEGER,
    'userName':   STRING,
    'firstName':  STRING,
    'lastName':   STRING,  
  }
```
