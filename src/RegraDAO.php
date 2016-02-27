  <?php

require_once 'Conexao.php';

class RegraDAO {

    private $conn;

    function __construct() {
        $this->conn = Conexao::conectar();
    }

    public function inserir(RegraModel $model) {
        try {
            $query = "insert into regra (seq_usuario,des_regra,
                                         tip_regra,dat_inativo,
                                         seq_categoria)
                                   values (:seq_usuario,:des_regra,
                                           :tip_regra,:dat_inativo,
                                           :seq_categoria)";

            $stmt = $this->conn->prepare($query);

            $stmt->bindValue(":seq_usuario", $model->getSeqUsuario());
            $stmt->bindValue(":des_regra", $model->getDesRegra());
            $stmt->bindValue(":tip_regra", $model->getTipRegra());
            $stmt->bindValue(":dat_inativo", $model->getDatInativo());
            $stmt->bindValue(":seq_categoria", $model->getSeqCategoria());

            return $stmt->execute();
       } catch (Exception $e) {
            echo "Erro ao incluir a regra \n".$e->getMessage();
        }
    }
   //Altera todas as informacoes cadastradas
    public function alterar(RegraModel $model) {
        try {
            $query = "update regra
                        set seq_usuario = :seq_usuario,
                            des_regra = :des_regra,
                            tip_regra = :tip_regra,
                            dat_inativo = :dat_inativo,
                            seq_categoria = :seq_categoria
                      where seq_regra = :seq_regra";

            $stmt = $this->conn->prepare($query);

            $stmt->bindValue(":seq_usuario", $model->getSeqUsuario());
            $stmt->bindValue(":des_regra", $model->getDesRegra());
            $stmt->bindValue(":tip_regra", $model->getTipRegra());
            $stmt->bindValue(":dat_inativo", $model->getDatInativo());
            $stmt->bindValue(":seq_categoria", $model->getSeqCategoria());
            $stmt->bindValue(":seq_regra", $model->getSeqRegra());

            return $stmt->execute();
       } catch (Exception $e) {
            echo "Erro ao alterar a regra \n".$e->getMessage();
        }
    }

    //Lista todas as regras cadastradas
    public function listar() {
        try {
           $query = "select *
                       from regra";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        } catch (Exception $e) {
            echo "Erro ao listar as regras \n".$e->getMessage();
        }
    }

    //Lista todas as regras ativas cadastradas
    public function listarInativas() {
        try {
           $query = "select *
                       from regra
                     where dat_inativo is not null";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        } catch (Exception $e) {
            echo "Erro ao listar as regras inativas \n".$e->getMessage();
        }
    }
    //Altera a data de inativo, desativando a regra
    public function desativar($seqRegra) {
        try {
          $query = "update regra
                        set dat_inativo = :dat_inativo
                      where seq_regra = :seq_regra";

          $stmt = $this->conn->prepare($query);

          $stmt->bindValue(":dat_inativo", date("Y-m-d"));
          $stmt->bindValue(":seq_regra", $seqRegra);
          //Debug
          //echo $stmt->debugDumpParams();
          //var_dump($stmt->errorInfo());
          return $stmt->execute();
      } catch (Exception $e) {
          echo "Erro ao desativar a regra \n".$e->getMessage();
      }
    }

    function __destruct() {
        Conexao::desconectar();
    }
}
