function checkblock() {
    if (document.getElementById('forma-registration').style.display === 'none') {

        document.getElementById('reg-but').style.background = '#093b09';
        document.getElementById('reg-but').style.borderBottomLeftRadius = '0px';
        document.getElementById('forma-auth').style.display = 'none';
    } else if (document.getElementById('forma-auth').style.display === 'block'){
        document.getElementById('auth-but').style.background = '#093b09';
        document.getElementById('auth-but').style.borderBottomRightRadius = '0px';
        document.getElementById('forma-registration').style.display = 'none';
    } else {
        document.getElementById('forma-registration').style.display = 'none';
        document.getElementById('reg-but').style.background = 'transparent';
        document.getElementById('forma-auth').style.display = 'none';
        document.getElementById('auth-but').style.background = 'transparent';
    }
}