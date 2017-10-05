import express from 'express';
const PORT=4321;
express()
  .use(express.static('public'))
  .get('/', r=>r.res.sendFile('public/index.html'))
  .use(r=>r.res.status(404).end('Still not here, sorry!'))
  .use((e,r,res,n)=>res.status(500).end(`Error: ${e}`))
  .listen(process.env.PORT || PORT, ()=>console.log(process.pid))
;
