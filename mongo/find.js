 var url = "mongodb://localhost:27017/learnyoumongo";
 var testAge = parseInt(process.argv[2], 10);
 
 var mongo = require('mongodb').MongoClient;
 
 mongo.connect(url, function(err, db) {
     
     if (err) console.log('Whoops! in line 8', err);
     
     // db gives access to the database
      var parrotsCollection = db.collection('parrots');
      parrotsCollection.find({
          
          age: { $gt: testAge }
          
          }).toArray(function(err, documents) {
            if (err) console.log('Whoops! in line 15', err);
            console.log(documents);
            db.close();
            });
});