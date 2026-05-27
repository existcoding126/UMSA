EXEC sp_addlinkedserver
    @server='MYSQL_SERVER',
    @srvproduct='',
    @provider='MSDASQL',
    @datasrc='MYSQL_DSN';
GO