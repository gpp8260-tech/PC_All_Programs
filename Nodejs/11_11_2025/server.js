const express = require('express');
const app = express();
const homeRoutes = require('./routes/homeRoutes');

app.set('view engine', 'ejs'); // Set EJS as view engine

// Use the routes
app.use('/', homeRoutes);

const PORT = 3000;
app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
