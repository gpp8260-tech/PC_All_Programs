const { MongoClient } = require('mongodb');
const uri = 'mongodb://localhost:27017';

MongoClient.connect(uri, (err, client) => {
  if (err) {
    console.error('❌ Failed to connect:', err);
    return;
  }

  const db = client.db('mydb');

  db.collection('users').insertOne({ name: 'John' }, (err, res) => {
    if (err) {
      console.error('❌ Failed to insert:', err);
    } else {
      console.log('✅ Document inserted:', res.insertedId);
    }

    client.close();
  });
});
