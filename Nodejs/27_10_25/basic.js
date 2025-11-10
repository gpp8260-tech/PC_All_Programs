const express = require('express');
const app = express();

app.get('/users/:id',(req,res)=>{
    const userId= req.params.id;
    res.send(`User ID is ${userId}`);
});
app.get('/:name',(req,res)=>{

    const name = req.params.name;
    res.send(`<h3>Your name is ${name}</h3>`);

});

app.listen(4000,()=>console.log(`Server running on http://localhost:4000 `));