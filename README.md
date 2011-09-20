Domain Model Library for Zend Applications
==========================================

Introduction
------------

This is a library based off work done by Keith Pope.

It can be used as a simple domain model to allow your models to interact
with databases and other resources in a structured and simple manner.

Installation
-----------

Place the library in your /library folder. Make sure to autoload the 'Dm'
namespace by adding

    autoloaderNamespaces[] = "Dm"

to your application.ini config file.

Models
------

Models are created by extending Dm_Model_Abstract class. These do no have to
be associated with any persistant storage, they can simply function as model
classes if needed.

Resources
---------

Models can make use of Resources. These resources allow models to access data
from various sources. These sources can be a database table, an API, or something
else entirely. To make a Resource simply implement Application_Model_Resource_User_Interface,
which is currently empty. If your resource is a database table, it should extend
Dm_Model_Resource_Db_Table_Abstract as well.

Resource Items
--------------

Resources that are gateways to database tables can use Resource Items as the
rowclass for the table. This allows you to put item specifc logic into the
Resource Item class. Resource items should extend
Dm_Model_Resource_Db_Table_Row_Abstract.

Version 0.3
