const express = require('express');
const router = express.Router();
const pagecontroller = require('./controllers/pagecontroller'); // ✅ correct

router.get('/',pagecontroller.getHomePage);

module.exports = router;
