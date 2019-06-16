 var url = "mongodb://localhost:27017/learnyoumongo";
 var dbName = 'parrots';
 var testAge =  process.argv[2];
 var mongo = require('mongodb').MongoClient;
 
 mongo.connect(url, function(err, db) {
     
     if (err) console.log('Whoops! in line 8', err);
     
     // db gives access to the database
     var coll = db.collection(dbName);
     // inserting document
     coll.count({
         age: { $gt: +testAge }
    }, function(err, count) {
      // handle error
      if (err) console.log('Whoops! in line 19', err);
      // other operations
      console.log(count);
      db.close();
    });
});