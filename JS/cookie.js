//Script for cookies\\

function Cookie_Wall(){
    days=30; // number of days to keep the cookie
    myDate = new Date();
    myDate.setTime(myDate.getTime()+(days*24*60*60*10000));
    document.cookie = 'COOKIE_WALL=2A6HNG76HGUJNG5UBJKP7H; expires=' + myDate.toGMTString();
}