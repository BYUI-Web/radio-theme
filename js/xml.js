function getXML(xmlFileName){
  var url = "http://www.byuidahoradio.org/wp-content/themes/Radio%20Template/xml/"+ xmlFileName + ".xml";
  console.log(url);
  if (window.XMLHttpRequest){
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xh = new XMLHttpRequest();
  }
  else{
    // code for IE6, IE5
    xh = new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xh.open("GET", url, false);
  xh.send(null);

  xmlDocument = xh.responseXML;

  writeToDoc(xmlDocument);
  // populateDOM(xmlDocument);
}

function writeToDoc(xmlDocument) {
  // Get title
  var xmlTitle = xmlDocument.getElementsByTagName("title")[0].childNodes[0].nodeValue;
  // Clean input
  var cleanTitle = xmlTitle.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");
  // Output Title to span in html
  document.getElementById("title").innerHTML = cleanTitle;
  // Get artist
  var xmlArtist = xmlDocument.getElementsByTagName("artist")[0].childNodes[0].nodeValue;
  // Clean input
  var cleanArtist = xmlArtist.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");
  // Output Artist to span in html
  document.getElementById("artist").innerHTML = cleanArtist;

    
    console.log("Title: " + cleanTitle);
    
    console.log("Artist: " + cleanArtist);
}


  // mystring.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");
