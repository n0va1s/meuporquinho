  <?php

require_once 'Conexao.php';

class LancamentoDAO {

    private $conn;

    function __construct() {
        $this->conn = Conexao::conectar();
    }

    public function inserir(LancamentoModel $model) {
        try {
            $query = "insert into message (seq_usuario,dat_lancamento,
                                           dia_lancamento,mes_lancamento,
                                           ano_lancamento,val_lancamento,
                                           num_lancamento,txt_lancamento,
                                           seq_categoria)
                                   values (:seq_usuario,:dat_lancamento,
                                           :dia_lancamento,:mes_lancamento,
                                           :ano_lancamento,:val_lancamento,
                                           :num_lancamento,:txt_lancamento,
                                           :seq_categoria)";

            $stmt = $this->conn->prepare($query);

            $stmt->bindValue(":seq_usuario", $model->getSeqUsuario());
            $stmt->bindValue(":dat_lancamento", $model->getDatlancamento());
            $stmt->bindValue(":dia_lancamento", $model->getDiaLancamento());
            $stmt->bindValue(":mes_lancamento", $model->getMesLancamento());
            $stmt->bindValue(":ano_lancamento", $model->getAnoLancamento());
            $stmt->bindValue(":val_lancamento", $model->getValLancamento());
            $stmt->bindValue(":num_lancamento", $model->getNumLancamento());
            $stmt->bindValue(":txt_lancamento", $model->getTxtLancamento());
            $stmt->bindValue(":seq_categoria", $model->getSeqCategoria());

            return $stmt->execute();
       } catch (Exception $e) {
            echo "Erro ao incluir o lancamento \n".$e->getMessage();
        }
    }
   //Altera todas as informacoes cadastradas
    public function alterar(LancamentoModel $model) {
        try {
            $query = "update lancamento
                        set seq_usuario = :seq_usuario,
                            dat_lancamento = :dat_lancamento,
                            dia_lancamento = :dia_lancamento,
                            mes_lancamento = :mes_lancamento,
                            ano_lancamento = :ano_lancamento,
                            val_lancamento = :val_lancamento,
                            num_lancamento = :num_lancamento,
                            txt_lancamento = :txt_lancamento,
                            seq_categoria = :seq_categoria
                      where seq_lancamento = :seq_lancamento";

            $stmt = $this->conn->prepare($query);

            $stmt->bindValue(":seq_usuario", $model->getSeqUsuario());
            $stmt->bindValue(":dat_lancamento", $model->getDatlancamento());
            $stmt->bindValue(":dia_lancamento", $model->getDiaLancamento());
            $stmt->bindValue(":mes_lancamento", $model->getMesLancamento());
            $stmt->bindValue(":ano_lancamento", $model->getAnoLancamento());
            $stmt->bindValue(":val_lancamento", $model->getValLancamento());
            $stmt->bindValue(":num_lancamento", $model->getNumLancamento());
            $stmt->bindValue(":txt_lancamento", $model->getTxtLancamento());
            $stmt->bindValue(":seq_categoria", $model->getSeqCategoria());
            $stmt->bindValue(":seq_lancamento", $model->getSeqLancamento());

            return $stmt->execute();
       } catch (Exception $e) {
            echo "Erro ao alterar o lancamento \n".$e->getMessage();
        }
    }

    //Lista todas os lancamentos cadastrados
    public function listar() {
        try {
           $query = "select *
                       from lancamento";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        } catch (Exception $e) {
            echo "Erro ao listar os lancamentos \n".$e->getMessage();
        }
    }

    function __destruct() {
        Conexao::desconectar();
    }
}
