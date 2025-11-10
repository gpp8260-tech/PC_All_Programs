const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');

const app = express();
const PORT = 3000;

app.use(bodyParser.json());

// Connect to MongoDB
mongoose.connect('mongodb://localhost:27017/demo', {
    useNewUrlParser: true,
    useUnifiedTopology: true
});

// Schema & Model
const UserSchema = new mongoose.Schema({
    name: String,
    email: String,
    age: Number
});

const User = mongoose.model('User', UserSchema);

// ✅ POST route to insert a new user
app.post('/add-user', (req, res) => {
    const { name, email, age } = req.body;

    const newUser = new User({ name, email, age });

    newUser.save().then(user => {
        res.json({ message: 'User added successfully', user });
    }).catch(err => {
        res.status(500).json({ error: 'Failed to add user' });
    });
});

// ✅ POST route to fetch users by name
app.post('/get-user', (req, res) => {
    const { name } = req.body;

    User.find({ name: name }).then(users => {
        res.json(users);
    }).catch(err => {
        res.status(500).json({ error: 'Database error' });
    });
});

// Start server
app.listen(PORT, () => {
    console.log(`Server running at http://localhost:${PORT}`);
});
