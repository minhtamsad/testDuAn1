const http = require('http');

const server = http.createServer((req, res) => {
  if (req.method === 'POST') {
    let data = '';
    
    req.on('data', (chunk) => {
      data += chunk;
    });

    req.on('end', () => {
      const parsedData = JSON.parse(data);
      console.log('Received data:', parsedData);
      res.writeHead(200, {'Content-Type': 'application/json'});
      res.end(JSON.stringify({ ok : parsedData}));
    });
  } else {
    res.writeHead(404, {'Content-Type': 'text/plain'});
    res.end('Not Found');
  }
});

const PORT = 3000;
server.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
}); 
