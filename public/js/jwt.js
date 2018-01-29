$( document ).ready(function() {  
    $( "#decodeBtn" ).click(function() {
        var encoded = $( '#encodedToken' ).val();
        var decoded = parseJwt(encoded);

        // alert( "Handler for .click() called." );
        $( "#decoded-jwt" ).empty();
        $( "#decoded-jwt" ).append( "<p>Issuer: "+decoded.iss+"</p>" );
        $( "#decoded-jwt" ).append( "<p>IAT: "+decoded.iat+"</p>" );
        $( "#decoded-jwt" ).append( "<p>Expires: "+decoded.exp+"</p>" );
        $( "#decoded-jwt" ).append( "<p>Not Valid Before: "+decoded.nbf+"</p>" );
        $( "#decoded-jwt" ).append( "<p>JTI: "+decoded.jti+"</p>" );
        $( "#decoded-jwt" ).append( "<p>Subject: "+decoded.sub+"</p>" );
        $( "#decoded-jwt" ).append( "<p>Private Key?: "+decoded.prv+"</p>" );

        console.log(decoded);

        
    });
});

function parseJwt (token) {
    var base64Url = token.split('.')[1];
    var base64 = base64Url.replace('-', '+').replace('_', '/');
    return JSON.parse(window.atob(base64));
};

function verifyJwtSignature(token, signature) {

}