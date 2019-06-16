module.exports = function(dir, filter, callback){
    var fs = require('fs');
    filter = "." + filter;
    var data = [];
    
    fs.readdir(dir, function(err, list){
        if (err) return callback(err);
        for (var i = 0; i < list.length; i++) {
            if (list[i].slice(-filter.length) === filter) {
                data.push(list[i]);
            }
        }
        callback(err, data);
    });
};

/*
alt solution:


 var fs = require('fs')
    var path = require('path')
    
    module.exports = function (dir, filterStr, callback) {
    
      fs.readdir(dir, function (err, list) {
        if (err)
          return callback(err)
    
        list = list.filter(function (file) {
          return path.extname(file) === '.' + filterStr
        })
    
        callback(null, list)
      })
    }

 */