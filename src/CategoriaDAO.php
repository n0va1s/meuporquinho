  <?php

require_once 'Conexao.php';

class CategoriaDAO {

    private $conn;

    function __construct() {
        $this->conn = Conexao::conectar();
    }

    public function inserir(CategoriaModel $model) {
        try {
            $query = "insert into categoria (nom_categoria,txt_categoria,ind_categoria,
                                             tip_grupo,ind_ativo)
                                   values (:nom_categoria,:txt_categoria,:ind_categoria,
                                           :tip_grupo,:ind_ativo)";
            $stmt = $this->conn->prepare($query);

            $stmt->bindValue(":nom_categoria", $model->getNomCategoria());
            $stmt->bindValue(":txt_categoria", $model->getTxtCategoria());
            $stmt->bindValue(":ind_categoria", $model->getIndCategoria());
            $stmt->bindValue(":tip_grupo", $model->getTipGrupo());
            $stmt->bindValue(":dat_inativo", $model->getDatInativo());

            return $stmt->execute();
       } catch (Exception $e) {
            echo "Erro ao incluir a categoria \n".$e->getMessage();
        }
    }

    public function alterar(CategoriaModel $model) {
        try {
            $query = "update categoria
                        set nom_categoria = :nom_categoria,
                            txt_categoria = :txt_categoria,
                            ind_categoria = :ind_categoria,
                            tip_grupo = :tip_grupo,
                            dat_inativo = :dat_inativo
                      where seq_categoria = :seq_categoria";

            $stmt = $this->conn->prepare($query);

            $stmt->bindValue(":nom_categoria", $model->getNomCategoria());
            $stmt->bindValue(":txt_categoria", $model->getTxtCategoria());
            $stmt->bindValue(":ind_categoria", $model->getIndCategoria());
            $stmt->bindValue(":tip_grupo", $model->getTipGrupo());
            $stmt->bindValue(":dat_inativo", $model->getDatInativo());
            $stmt->bindValue(":seq_categoria", $model->getSeqCategoria());

            return $stmt->execute();
       } catch (Exception $e) {
            echo "Erro ao alterar a categoria \n".$e->getMessage();
        }
    }

    //Lista todas as categorias cadastradas
    public function listar() {
        try {
           $query = "select *
                       from categoria";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        } catch (Exception $e) {
            echo "Erro ao listar as categorias \n".$e->getMessage();
        }
    }

    //Lista todas as categorias ativas
    public function listarAtivas() {
        try {
           $query = "select *
                       from categoria
                     where dat_inativo is not null";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        } catch (Exception $e) {
            echo "Erro ao listar as categorias ativas \n".$e->getMessage();
        }
    }

    //Altera a situacao da categoria para inativa
    public function desativar($seqCategoria) {
        try {
          $query = "update categoria
                        set dat_inativo = :dat_inativo
                      where seq_categoria = :seq_categoria";

          $stmt = $this->conn->prepare($query);

          $stmt->bindValue(":dat_inativo", date("Y-m-d"););
          $stmt->bindValue(":seq_categoria", $seqCategoria);
          //Debug
          //echo $stmt->debugDumpParams();
          //var_dump($stmt->errorInfo());
          return $stmt->execute();
      } catch (Exception $e) {
          echo "Erro ao desativar a categoria \n".$e->getMessage();
      }
    }

    function __destruct() {
        Conexao::desconectar();
    }
}
