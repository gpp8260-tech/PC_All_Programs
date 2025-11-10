const express = require('express');
const app = express();
const port = 5000;

const middle=(req,resp,next)=>{

    if(!req.query.age){
    resp.send("<h1>Please Provide age</h1>");
    }
    else if(req.query.age<18){
    resp.send("<h1>You can not access this page </h1>");
    }
    else{
            next();
    }
};
app.use(middle);

app.get('/',(req,resp)=>{
    resp.send('<h1>Welcome to Home Page</h1>');

});
app.get('/users',(req,resp)=>{
   resp.send('</h1>Welcome to User Page</h1>'); 
});


app.listen(3000, () => {
  console.log('✅ Server running on http://localhost:3000');
});
