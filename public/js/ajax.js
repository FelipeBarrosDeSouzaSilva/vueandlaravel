(function getUsuarios(){
					
    let url = "http://127.0.0.1:8000/showUsers";
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open('GET', url);
    
    xmlHttp.onreadystatechange = () => {
        
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
            
            let jsonText = xmlHttp.responseText;
            
            let jsonObj = JSON.parse(jsonText);
            //variavel js criada no inicio em app.blade.php
            //aray = jsonText;
             aray = JSON.parse(jsonText);
        }
        
    }
    xmlHttp.send();
    console.log(true)
    //aray = [{"id":1,"name":"felipe","email":"felipebarros300898@gmail.com","email_verified_at":null,"created_at":"2022-09-10T20:04:11.000000Z","updated_at":"2022-09-10T20:04:11.000000Z"},{"id":2,"name":"stela","email":"stela@gmail.com","email_verified_at":null,"created_at":"2022-09-10T23:46:25.000000Z","updated_at":"2022-09-10T23:46:25.000000Z"}];
})()