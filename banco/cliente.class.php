<?php
class Cliente
{
    private $nome;
    private $telefone;
    private $estado;
    private $cidade;
    private $email;
    private $senha;
    private $cpf;

    public function getNome()
    {
        return $this->nome;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function getCPF()
    {
        return $this->cpf;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }
    
}
?>