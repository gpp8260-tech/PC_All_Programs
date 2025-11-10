const { MongoClient } = require('mongodb');
const url = "mongodb://localhost:27017/";

async function createCollection() {
  const client = new MongoClient(url);
  
  try {
    await client.connect();
    const database = client.db("TestDb");
    await database.createCollection("customers");
    console.log("Collection created!");
  } catch (err) {
    console.error("Error:", err);
  } finally {
    await client.close();
  }
}

createCollection();