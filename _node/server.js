//require the modules needed
var http = require('http'),
    path = require('path'),
    fs = require('fs');
 
//these are the supported content types
contentType = {
    ".html" : "text/html",
    ".css" : "text/css",
    ".gif" : "image/gif"
};
 
//file delivery function
function getFile(filePath,response,mimeType){
    //for troubleshooting
    console.log("Getting the file now! You are almost there!");
    //does the requested file exist?
    fs.exists(filePath,function(exists){
        //if it does
        if(exists){
            //for troubleshooting
            console.log("The requested file exists! Here ya go!");
            //read the file
            fs.readFile(filePath,function(error,contents){
                if(!error){
                    //if there was no error
                    //send the contents with the default 200/ok header
                    response.writeHead(200,{
                        "Content-type" : mimeType,
                        "Content-Length" : contents.length
                    });
                    response.end(contents);
                } else {
                    //for troubleshooting
                    console.log(error);
                };
            });
        };
    });
};
 
//HTTP requests function
function onRequest(request, response) {
    //for troubleshooting
    console.log("HTTP request received! Next we gotta make sure you are asking for a file type we recognize!");
    //variables for file, extension and file location
    var fileName = path.basename(request.url) || 'index.html',
        extensionName = path.extname(fileName),
        localFolder = __dirname + '/public/';
 
    //do we support the requested file type?
    if(!contentType[extensionName]){
        //for now just send a 404 and a short message
        response.writeHead(404, {'Content-Type': 'text/html'});
        response.end("<html><head></head><body>The requested file type is not supported</body></html>");
    } else {
        //for troubleshooting
        console.log("The file type is good! Next we will serve that file up for ya!");
    };
 
    //call the file delivery function
    //pass in the path to the file we want,
    //the response object, and the contentType
    getFile((localFolder + fileName),response,contentType[extensionName]);
};

//create the server and listen on port 8888
http.createServer(onRequest).listen(8888);

//for troubleshooting
console.log("You just started the server you built!");