<?php
loadModel('User');

class Login extends Model {
    // Criação de Função para checar se o usuário está logado ou não
    public function checkLogin() {
        $user = User::getOne(['email' => $this->email]);
        if($user) {
            if($user->end_date) {
                throw new AppException('Usuário está desligado da empresa');
            }

            if(password_verify($this->password, $user->password)) {
                return $user;
            }
        }
        throw new AppException('Usuário e Senha inválidos.');
    }
}