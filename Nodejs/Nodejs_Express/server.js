let express = require('express')
let demo = express()
let port = 9000

demo.get('/info',(req,res)=>{
    res.send('<h1>Hello World!</h1>')

});
demo.post('/',(req,res)=>{
    res.send("info method call");
});

demo.listen(port,()=>{
    console.log(`Example app listecon port ${port}`);
})
