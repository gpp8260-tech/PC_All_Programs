// Controller logic
exports.getHomePage = (req, res) => {
  res.render('home', { title: 'Home Page', message: 'Welcome to My Express App!' });
};
