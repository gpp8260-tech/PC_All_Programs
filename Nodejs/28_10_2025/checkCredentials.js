function checkCredentials(req, res, next) {
  const { email, password } = req.body;

  // Simple check
  if (email === 'test@example.com' && password === '123456') {
    next(); // credentials are correct, move to next handler
  } else {
    res.status(401).json({ message: 'Invalid email or password' });
  }
}

module.exports = checkCredentials;