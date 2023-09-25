<?php
class FaleConosco
{
    private $nome;
    private $estado;
    private $cidade;
    private $email;
    private $telefone;
    private $modalidade;
    private $assunto;
    private $mensagem;
    private $cpf;

    public function getNome()
    {
        return $this->nome;
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
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function getModalidade()
    {
        return $this->modalidade;
    }
    public function getAssunto()
    {
        return $this->assunto;
    }
    public function getMensagem()
    {
        return $this->mensagem;
    }
    public function getCPF()
    {
        return $this->cpf;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
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
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function setModalidade($modalidade)
    {
        $this->modalidade = $modalidade;
    }
    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;
    }
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }
    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }
}
?>