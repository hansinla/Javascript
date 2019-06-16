 var url = "mongodb://localhost:27017/learnyoumongo";
 var mongo = require('mongodb').MongoClient;
 
 mongo.connect(url, function(err, db) {
     
     if (err) console.log('Whoops! in line 8', err);
     
     // db gives access to the database
     var coll = db.collection('users');
     // inserting document
     coll.update({
      "username": "tinatime"
    }, {
      $set: {
         "age": 40
      }
    }, function(err, data) {
      // handle error
      if (err) console.log('Whoops! in line 19', err);
      // other operations
      db.close();
    });
});