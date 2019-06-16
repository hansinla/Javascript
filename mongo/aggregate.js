 var url = "mongodb://localhost:27017/learnyoumongo";
 var dbName = 'prices';
 var testSize =  process.argv[2];
 var mongo = require('mongodb').MongoClient;
 
 mongo.connect(url, function(err, db) {
     
     if (err) console.log('Whoops! in line 8', err);
     
     // db gives access to the database
     var coll = db.collection(dbName);
     // inserting document
     coll.aggregate([
                     { $match: { size: testSize } },
                     { $group: { _id: "total", total: { $avg: "$price" } } }
                   ]).toArray(function(err, results) {
      // handle error
      if (err) throw err;
      console.log(Number(results[0].total).toFixed(2));
      db.close();
    });
});