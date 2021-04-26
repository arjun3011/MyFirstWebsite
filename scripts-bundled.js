var senHttpRequest = function (method,url){
    var request = new XMLHttpRequest();
// open sends the request 
    request.open(method, url);
    request.responseType ='json';
    // onload gets the data 
    var getData = function() {
        var data = this.response;
        console.log(data[0]["title"]["rendered"]);
    
    }

   var error = function() {
    //       There was a connection error of some sort\
        console.log("connection error");
    }
    if (request.readyState == 4) {
        if (this.status >= 200 && this.status < 400) {
            getData();
        }
    else{
        var err = alert("We reached our target server, but it returned an error");
        console.log(err);
        }
    }
    else {
    error();
    }


    request.send();  
    };

senHttpRequest('GET', 'http://localhost/myfirstweb/wp-json/wp/v2/pages?search=' + this.findWord.value);      

