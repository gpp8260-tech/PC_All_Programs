// Step 1: Import Express
const express = require('express');

// Step 2: Create an Express app
const app = express();

// Step 3: Middleware for logging
app.use((req, res, next) => {
  console.log(`${req.method} ${req.url}`);
  next(); // Move to next route
});

// Step 4: Define a route
app.get('/', (req, res) => {
  res.send('Hello from Express!');
});

app.post('/demo',(req,res)=>{
    res.send("Hello from demo");
});

app.get('/about', (req, res) => {
  res.send('Hello About Page');
});

// Step 5: Start the server
app.listen(3000, () => {
  console.log('✅ Server running on http://localhost:3000');
});
