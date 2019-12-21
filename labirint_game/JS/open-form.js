function regbut(regform,authform) {
    if (regform === 'none' && authform === 'block') {
        document.getElementById('forma-registration').style.display = 'block';
        document.getElementById('forma-auth').style.display = 'none';
        document.getElementById('reg-but').classList.add('reg-but-active');
        document.getElementById('auth-but').classList.toggle('auth-but-active');
    } else if ( regform === 'none' && authform === 'none'){
      document.getElementById('auth.but').style.display = 'block';
    } else {
        document.getElementById('forma-registration').style.display = 'none';
        document.getElementById('auth-but').classList.add('auth-but-active');
        document.getElementById('reg-but').classList.toggle('reg-but-active');
        document.getElementById('forma-auth').style.display = 'block';
    }
}