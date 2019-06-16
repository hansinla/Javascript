var express = require('express');
var port = process.argv[2];
var app = express();

app.put('/message/:NAME', function(req, res){

	res.end(require('crypto')
      .createHash('sha1')
      .update(new Date().toDateString() + req.params.NAME)
      .digest('hex'));
});

app.listen(port);