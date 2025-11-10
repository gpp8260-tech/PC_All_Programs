const express = require('express');
const app = express();
app.use(express.json());

let users = [
  { id: 1, name: 'Alice' },
  { id: 2, name: 'Bob' }
];

app.put('/users/:id', (req, res) => {
  const userId = parseInt(req.params.id);
  const { name } = req.body;

  const user = users.find(u => u.id === userId);
  if (!user) {
    return res.status(404).json({ message: 'User not found' });
  }

  user.name = name;
  res.json({ message: 'User updated', user });
});

app.listen(3000, () => {
  console.log('Server is running at http://localhost:3000');
});
