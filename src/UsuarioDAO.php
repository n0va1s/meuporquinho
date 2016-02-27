  <?php

require_once 'Conexao.php';

class UsuarioDAO {

    private $conn;

    function __construct() {
        $this->conn = Conexao::conectar();
    }

    public function inserir(UsuarioModel $model) {
        try {
            $query = "insert into usuario (nom_usuario,eml_usuario,tip_origem,ind_ativo)
                                   values (:nom_usuario,:eml_usuario,:tip_origem,:ind_ativo)";
            $stmt = $this->conn->prepare($query);

            $stmt->bindValue(":nom_usuario", $model->getNomUsuario());
            $stmt->bindValue(":eml_usuario", $model->getEmlUsuario());
            $stmt->bindValue(":tip_origem", $model->getTipOrigem());
            $stmt->bindValue(":dat_inativo", $model->getDatInativo());

            return $stmt->execute();
       } catch (Exception $e) {
            echo "Erro ao incluir o usuario \n".$e->getMessage();
        }
    }

    //Lista todos os usuario cadastrados
    public function listar() {
        try {
           $query = "select *
                       from usuario";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        } catch (Exception $e) {
            echo "Erro ao listar os usuarios \n".$e->getMessage();
        }
    }

    //Lista os usuario ativos
    public function listarAtivos() {
        try {
           $query = "select *
                       from usuario
                     where dat_inativo is not null";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        } catch (Exception $e) {
            echo "Erro ao listar os usuarios ativos \n".$e->getMessage();
        }
    }

    //Altera a situacao do usuario para inativo
    public function desativar($seqUsuario) {
        try {
          $query = "update usuario
                        set dat_inativo = :dat_inativo
                      where seq_usuario = :seq_usuario";

          $stmt = $this->conn->prepare($query);

          $stmt->bindValue(":dat_inativo", date("Y-m-d"););
          $stmt->bindValue(":seq_usuario", $seqUsuario);
          //Debug
          //echo $stmt->debugDumpParams();
          //var_dump($stmt->errorInfo());
          return $stmt->execute();
      } catch (Exception $e) {
          echo "Erro ao desativar o usuario \n".$e->getMessage();
      }
    }

    function __destruct() {
        Conexao::desconectar();
    }
}
