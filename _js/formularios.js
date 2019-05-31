
function validacao() {
    var user = document.forms["login"]["nome"].value;
    var password = document.forms["login"]["senha"].value;
    if (user === "") {
        alert("Por favor insira seu nome de usuário");
        return false;
    } else if (password === "") {
        alert("Por favor insira a senha");
        return false;
    } else if ((user.length < 6) || (password.length < 6)) {
        alert("Erro! Usuário e/ou Senha Incorreta(s)!");
        return false;
    } else {
        alert("Bem-Vindo(a)! Agora você tem acesso às apostilas gratuitas");
        return true;
    }
}

function criar() {
    var usuario = document.forms["cadastro"]["novoNome"].value;
    var password = document.forms["cadastro"]["novaSenha"].value;

    if (usuario.length < 6 || password.length < 6) {
        alert("Os campos devem conter pelo menos 6 caracteres");
        return false;
    } else if (usuario === "") {
        alert("Por favor insira seu nome de usuário");
        return false;
    } else if (password === "") {
        alert("Por favor insira sua senha");
        return false;
    } else {
        alert("Bem-Vindo(a)! Agora você tem acesso às apostilas gratuitas");
        return true;
    }
}

function mensagem() {
    document.write("Muito Obrigado pela resposta. Te mandaremos uma resposta em até 24hs :)");
}

