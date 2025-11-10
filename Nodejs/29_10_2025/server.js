const express = require('express');
const app = express();
const path = require('path');
const port=4000;

const demo = function(req,res,next){
    console.log(`Request URL: ${req.url}| Time: ${new Date().toISOString()}`);
  //  console.log(`Request URL: ${req.url} | Time: ${new Date().toISOString()}`);
    next()
}
app.use(demo);


 app.get('/:name',(req,res)=>{
    let name=req.params.name;
     res.sendFile(path.join(__dirname,'index.html'));
   
 });


app.post('/about',(req,res)=>{
    res.send("This post file ");
});
app.get('/contact',(req,res)=>{
    res.send("This contact us ");
})
app.listen(port,()=>{
    console.log(`Server is running on ${port}`);
})