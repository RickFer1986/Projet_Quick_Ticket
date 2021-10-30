<main class="content">
    <div class="content-title mb-4">
        <h2>Dados Pessoais</h2>
        <form class="dados-pessoais" action="#" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="<?= $_POST['nome'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= $_POST['email'] ?>">
                </div>
            </div>
            <h2>Dados Ingresso</h2>
            <div class="form-row alt">
                <div class="form-group col-md-4">
                    <div class="alt-ing">
                        <div>
                            <label>Tipo de Ingresso:</label>
                        </div>
                        <div class="alt2">
                            <input type="radio" name="tipo-ingresso" id="tipo-ingresso">
                            <label for="vip">VIP</label>
                            <input type="radio" name="tipo-ingresso" id="tipo-ingresso">
                            <label for="normal">Normal</label>
                        </div>
                    </div>

                </div>
                <div class="form-group col-md-8">
                    <label for="qtd">Quantidade de Ingressos</label>
                    <input type="number" name="qtd" id="qtd">
                </div>
            </div>
            <h2>Dados Preço</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="preco">Preço R$</label>
                </div>
                <div class="form-group col-md-6">
                    <label for="preco-total">Preço Total R$</label>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tipo-pag">Tipo de Pagamento: </label><br>
                    <label for="dinheiro">Dinheiro</label>
                    <input type="radio" name="preco" id="preco">
                    <label for="cartao">Cartão</label>
                    <input type="radio" name="preco" id="preco">
                </div>
                <div class="form-group col-md-2">
                    <label for="troco">Troco R$</label>
                </div>
            </div>
            <button class="btn btn-primary">Imprimir</button>
        </form>
    </div>
</main>