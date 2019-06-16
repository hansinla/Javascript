/********************************************
* Gets a key (num) and use it on str
* to do a Caesar's encryption.
*********************************************/

function CaesarCipher(str,num) { 

    var key = parseInt(num);


    var lowerCaseA = "a".charCodeAt(0);
    var lowerCaseZ = "z".charCodeAt(0);
    var upperCaseA = "A".charCodeAt(0);
    var upperCaseZ = "Z".charCodeAt(0)

    var code = 0;

    var answer = "";

    
    // Rotate the plainText over 'key' number of positions
    // if the character is an alphabet character
    for (var i = 0; i < str.length ; i++)
    {
        code = str.charCodeAt(i);

        if (code >= lowerCaseA && code <= lowerCaseZ)
        {
            answer = answer + String.fromCharCode(lowerCaseA + ((code - lowerCaseA + key) % 26));
        }
        else if (code >= upperCaseA && code <= upperCaseZ)
        {
            answer = answer + String.fromCharCode(upperCaseA + ((code - upperCaseA + key) % 26));
        }
        else
            answer = answer + str[i];  
    }
  
    return answer;
   
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
CaesarCipher(readline());           

